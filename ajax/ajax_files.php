<?php

/**
 * sysPass
 * 
 * @author nuxsmin
 * @link http://syspass.org
 * @copyright 2012 Rubén Domínguez nuxsmin@syspass.org
 *  
 * This file is part of sysPass.
 *
 * sysPass is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * sysPass is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with sysPass.  If not, see <http://www.gnu.org/licenses/>.
 *
 */
// TODO: comprobar permisos para eliminar archivos

define('APP_ROOT', '..');
include_once (APP_ROOT . "/inc/init.php");

SP_Util::checkReferer('POST');

if (!SP_Init::isLoggedIn()) {
    SP_Util::logout();
}

if (!isset($_POST["sk"]) || !SP_Common::checkSessionKey($_POST["sk"])) {
    SP_Common::printXML(_('CONSULTA INVÁLIDA'));
}

if (SP_Config::getValue('filesenabled', 0) == 0) {
    echo _('Gestión de archivos deshabilitada');
    return;
}

$action = ( isset($_POST['action']) ) ? SP_Html::sanitize($_POST['action']) : '';
$accountId = ( isset($_POST['accountId']) ) ? (int) $_POST['accountId'] : 0;
$fileId = ( isset($_POST['fileId']) ) ? (int) $_POST['fileId'] : 0;

if ($action == 'upload') {
    if (!is_array($_FILES["inFile"]) || !$accountId === 0) {
        return;
    }

    $allowedExts = strtoupper(SP_Config::getValue('allowed_exts'));
    $allowedSize = SP_Config::getValue('allowed_size');

    if ($allowedExts) {
        // Extensiones aceptadas
        $extsOk = explode(",", $allowedExts);
    } else {
        echo _('No hay extensiones permitidas');
        return;
    }

    if (is_array($_FILES) && $_FILES['inFile']['name']) {
        // Comprobamos la extensión del archivo
        $fileData['extension'] = strtoupper(pathinfo($_FILES['inFile']['name'], PATHINFO_EXTENSION));

        if (!in_array($fileData['extension'], $extsOk)) {
            echo _('Tipo de archivo no soportado') . " '" . $fileData['extension'] . "' ";
            return;
        }
    } else {
        echo _('Archivo inválido') . ":<br />" . $_FILES['inFile']['name'];
        return;
    }

    // Variables con información del archivo
    $fileData['name'] = SP_Html::sanitize($_FILES['inFile']['name']);
    $tmpName = SP_Html::sanitize($_FILES['inFile']['tmp_name']);
    $fileData['size'] = $_FILES['inFile']['size'];
    $fileData['type'] = $_FILES['inFile']['type'];

    if (!file_exists($tmpName)) {
        // Registramos el máximo tamaño permitido por PHP
        SP_Files::getMaxUpload();

        echo _('Error interno al leer el archivo');
        return;
    }

    if ($fileData['size'] > ($allowedSize * 1000)) {
        echo _('El archivo es mayor de ') . " " . round(($allowedSize / 1000), 1) . "MB";
        return;
    }

    // Leemos el archivo a una variable
    $fileHandle = fopen($tmpName, 'r');

    if (!$fileHandle) {
        $message['action'] = _('Subir Archivo');
        $message['text'][] = _('Error interno al leer el archivo');

        SP_Common::wrLogInfo($message);

        echo _('Error interno al leer el archivo');
        return;
    }

    $fileData['content'] = addslashes(fread($fileHandle, filesize($tmpName)));
    fclose($fileHandle);

    if (SP_Files::fileUpload($accountId, $fileData)) {
        echo _('Archivo guardado');
    } else {
        echo _('No se pudo guardar el archivo');
    }
    return;
}

if ($action == 'download' || $action == 'view') {
    // Verificamos que el ID sea numérico
    if (!is_numeric($fileId) || $fileId === 0) {
        echo _('No es un ID de archivo válido');
        return;
    }

    $isView = ( $action == 'view' ) ? TRUE : FALSE;

    $file = SP_Files::fileDownload($fileId);

    if (!$file) {
        echo _('El archivo no existe');
        return;
    }

    $fileSize = $file->accfile_size;
    $fileType = $file->accfile_type;
    $fileName = $file->accfile_name;
    $fileExt = $file->accfile_extension;
    $fileData = $file->accfile_content;

    $message['action'] = _('Descargar Archivo');
    $message['text'][] = _('ID') . ": " . $fileId;
    $message['text'][] = _('Archivo') . ": " . $fileName;
    $message['text'][] = _('Tipo') . ": " . $fileType;
    $message['text'][] = _('Tamaño') . ": " . round($fileSize / 1024, 2) . " KB";

    SP_Common::wrLogInfo($message);

    if (!$isView) {
        // Enviamos el archivo al navegador
        header("Content-length: $fileSize");
        header("Content-type: $fileType");
        header("Content-Disposition: attachment; filename=\"$fileName\"");
        header("Content-Description: PHP Generated Data");
        header("Content-transfer-encoding: binary");

        echo $fileData;
    } else {
        $extsOkImg = array("JPG", "GIF", "PNG");
        if (in_array(strtoupper($fileExt), $extsOkImg)) {
            $imgData = chunk_split(base64_encode($fileData));
            echo '<img src="data:' . $fileType . ';base64, ' . $imgData . '" border="0" />';
//            } elseif ( strtoupper($fileExt) == "PDF" ){
//                echo '<object data="data:application/pdf;base64, '.base64_encode($fileData).'" type="application/pdf"></object>';
        } elseif (strtoupper($fileExt) == "TXT") {
            echo '<div id="fancyView" class="backGrey"><pre>' . $fileData . '</pre></div>';
        } else {
            echo '<div id="fancyMsg" class="msgError" >' . _('Tipo de archivo no soportado') . '</div>';
        }
    }
    return;
}

if ($action == "delete") {
    // Verificamos que el ID sea numérico
    if (!is_numeric($fileId) || $fileId === 0) {
        echo _('No es un ID de archivo válido');
        return;
    }

    if (SP_Files::fileDelete($fileId)) {
        echo _('Archivo eliminado');
    } else {
        echo _('Error al eliminar el archivo');
    }
    return;
}