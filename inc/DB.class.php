<?php
/**
 * sysPass
 *
 * @author    nuxsmin
 * @link      http://syspass.org
 * @copyright 2012-2015 Rubén Domínguez nuxsmin@syspass.org
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

namespace SP;

defined('APP_ROOT') || die(_('No es posible acceder directamente a este archivo'));

/**
 * Esta clase es la encargada de realizar las operaciones con la BBDD de sysPass.
 */
class DB
{
    static $txtError = '';
    static $numError = 0;
    static $last_num_rows = 0;
    static $lastId = null;
    private static $_retArray = false;
    private static $_returnRawData = false;
    private static $_fullRowCount = false;

    public $num_rows = 0;
    public $num_fields = 0;
    private $_last_result = null;
    private $_querySource;

    /**
     * Datos para el objeto PDOStatement
     *
     * @var array
     */
    private $_stData;

    /**
     * Comprobar que la base de datos existe.
     *
     * @return bool
     * @throws SPException
     */
    public static function checkDatabaseExist()
    {
        try {
            $db = DBConnectionFactory::getFactory()->getConnection();

            $query = 'SELECT COUNT(*) '
                . 'FROM information_schema.tables '
                . 'WHERE table_schema=\'' . Config::getValue("dbname") . '\' '
                . 'AND table_name = \'usrData\'';

            if ($db->query($query)->fetchColumn() !== 0) {
                return true;
            }
        } catch (\Exception $e) {
            throw new SPException(SPException::SP_CRITICAL, $e->getMessage(), $e->getCode());
        }

        return false;
    }

    /**
     * Obtener los datos para generar un select.
     *
     * @param $tblName    string    con el nombre de la tabla a cunsultar
     * @param $tblColId   string    con el nombre de la columna del tipo Id a mostrar
     * @param $tblColName string    con el nombre de la columna del tipo Name a mostrar
     * @param $arrFilter  array     con las columnas a filtrar
     * @param $arrOrder   array     con el orden de las columnas
     * @return false|array con los valores del select con el Id como clave y el nombre como valor
     */
    public static function getValuesForSelect($tblName, $tblColId, $tblColName, $arrFilter = NULL, $arrOrder = NULL)
    {
        if (!$tblName || !$tblColId || !$tblColName) {
            return false;
        }

        $strFilter = (is_array($arrFilter)) ? " WHERE " . implode(" OR ", $arrFilter) : "";
        $strOrder = (is_array($arrOrder)) ? " ORDER BY " . implode(",", $arrOrder) : 'ORDER BY ' . $tblColName . ' ASC';

        $query = "SELECT $tblColId, $tblColName FROM $tblName $strFilter $strOrder";

        self::setReturnArray();
        $queryRes = self::getResults($query, __FUNCTION__);

        if ($queryRes === false) {
            return false;
        }

        $arrValues = array();

        foreach ($queryRes as $row) {
            $arrValues[$row->$tblColId] = $row->$tblColName;
        }

        return $arrValues;
    }

    /**
     * Establecer si se devuelve un array de objetos siempre
     */
    public static function setReturnArray()
    {
        self::$_retArray = true;
    }

    /**
     * Obtener los resultados de una consulta.
     *
     * @param  $query       string    con la consulta a realizar
     * @param  $querySource string    con el nombre de la función que realiza la consulta
     * @param  $data        array     con los datos de la consulta
     * @return bool|array devuelve bool si hay un error. Devuelve array con el array de registros devueltos
     */
    public static function getResults($query, $querySource, &$data = null)
    {
        if (empty($query)) {
            self::resetVars();
            return false;
        }

        try {
            $db = new DB();
            $db->_querySource = $querySource;
            $db->_stData = $data;
            $doQuery = $db->doQuery($query, $querySource, self::$_returnRawData);
        } catch (SPException $e) {
            self::logDBException($query, $e->getMessage(), $e->getCode(), $querySource);
            return false;
        }

        if (self::$_returnRawData && is_object($doQuery) && get_class($doQuery) == "PDOStatement") {
            return $doQuery;
        }

        DB::$last_num_rows = (self::$_fullRowCount === false) ? $db->num_rows : $db->getFullRowCount($query);

        if ($db->num_rows == 0) {
            self::resetVars();
            return false;
        }

        if ($db->num_rows == 1 && self::$_retArray === false) {
            self::resetVars();
            return $db->_last_result[0];
        }

        self::resetVars();
        return $db->_last_result;
    }

    /**
     * Restablecer los atributos estáticos
     */
    private static function resetVars()
    {
        self::$_returnRawData = false;
        self::$_fullRowCount = false;
        self::$_retArray = false;
    }

    /**
     * Realizar una consulta a la BBDD.
     *
     * @param $query       string  con la consulta a realizar
     * @param $querySource string  con el nombre de la función que realiza la consulta
     * @param $getRawData  bool    realizar la consulta para obtener registro a registro
     * @return false|int devuelve bool si hay un error. Devuelve int con el número de registros
     * @throws SPException
     */
    public function doQuery(&$query, $querySource, $getRawData = false)
    {
        $isSelect = preg_match("/^(select|show)\s/i", $query);

        // Limpiar valores de caché y errores
        $this->_last_result = array();

        try {
            $queryRes = $this->prepareQueryData($query);
        } catch (SPException $e) {
            throw $e;
        }

        if ($isSelect) {
            if (!$getRawData) {
                $this->num_fields = $queryRes->columnCount();
                $this->_last_result = $queryRes->fetchAll(\PDO::FETCH_OBJ);
            } else {
                return $queryRes;
            }

//            $queryRes->closeCursor();

            $this->num_rows = count($this->_last_result);
        }
    }

    /**
     * Asociar los parámetros de la consulta utilizando el tipo adecuado
     *
     * @param &$query  string La consulta a realizar
     * @param $isCount bool   Indica si es una consulta de contador de registros
     * @return bool
     * @throws SPException
     */
    private function prepareQueryData(&$query, $isCount = false)
    {
        if ($isCount === true) {
            // No incluimos en el array de parámetros de posición los valores
            // utilizados para LIMIT
            preg_match_all('/(\?|:)/', $query, $count);

            // Indice a partir del cual no se incluyen valores
            $paramMaxIndex = (count($count[1]) > 0) ? count($count[1]) : 0;
        }

        try {
            $db = DBConnectionFactory::getFactory()->getConnection();

            if (is_array($this->_stData)) {
                $sth = $db->prepare($query);
                $paramIndex = 0;

                foreach ($this->_stData as $param => $value) {
                    // Si la clave es un número utilizamos marcadores de posición "?" en
                    // la consulta. En caso contrario marcadores de nombre
                    $param = (is_int($param)) ? $param + 1 : ':' . $param;

                    if ($isCount === true && count($count) > 0 && $paramIndex >= $paramMaxIndex) {
                        continue;
                    }

                    if ($param == 'blobcontent') {
                        $sth->bindValue($param, $value, \PDO::PARAM_LOB);
                    } elseif (is_int($value)) {
//                        error_log("INT: " . $param . " -> " . $value);
                        $sth->bindValue($param, $value, \PDO::PARAM_INT);
                    } else {
//                        error_log("STR: " . $param . " -> " . $value);
                        $sth->bindValue($param, $value, \PDO::PARAM_STR);
                    }

                    $paramIndex++;
                }

                $sth->execute();
            } else {
                $sth = $db->query($query);
            }

            DB::$lastId = $db->lastInsertId();

            return $sth;
        } catch (\Exception $e) {
            error_log("Exception: " . $e->getMessage());
            throw new SPException(SPException::SP_CRITICAL, $e->getMessage(), $e->getCode());
        }
    }

    /**
     * Método para registar los eventos de BD en el log
     *
     * @param $query     string  La consulta que genera el error
     * @param $errorMsg  string  El mensaje de error
     * @param $errorCode int     El código de error
     */
    private static function logDBException($query, $errorMsg, $errorCode, $querySource)
    {
        $message['action'] = $querySource;
        $message['text'][] = $errorMsg . '(' . $errorCode . ')';
        $message['text'][] = "SQL: " . self::escape($query);

        error_log($query);
        error_log($errorMsg);
    }

    /**
     * Escapar una cadena de texto con funciones de mysqli.
     *
     * @param $str string con la cadena a escapar
     * @return string con la cadena escapada
     */
    public static function escape($str)
    {
        try {
            $db = DBConnectionFactory::getFactory()->getConnection();

            return $db->quote(trim($str));
        } catch (SPException $e) {
            return $str;
        }
    }

    /**
     * Obtener el número de filas de una consulta realizada
     *
     * @param &$query string La consulta para contar los registros
     * @return int Número de files de la consulta
     * @throws SPException
     */
    private function getFullRowCount(&$query)
    {
        if (empty($query)) {
            return 0;
        }

        $num = 0;
        $patterns = array(
            '/(LIMIT|ORDER BY|GROUP BY).*/i',
            '/SELECT DISTINCT\s([\w_]+),.* FROM/i',
            '/SELECT [\w_]+,.* FROM/i'
        );
        $replace = array('', 'SELECT COUNT(DISTINCT \1) FROM', 'SELECT COUNT(*) FROM');

        $query = preg_replace($patterns, $replace, $query);

        try {
            $db = DBConnectionFactory::getFactory()->getConnection();

            if (!is_array($this->_stData)) {
                $queryRes = $db->query($query);
                $num = intval($queryRes->fetchColumn());
            } else {
                if ($queryRes = $this->prepareQueryData($query, true)) {
                    $num = intval($queryRes->fetchColumn());
                }
            }

            $queryRes->closeCursor();

            return $num;
        } catch (SPException $e) {
            error_log("Exception: " . $e->getMessage());
            throw new SPException(SPException::SP_CRITICAL, $e->getMessage(), $e->getCode());
        }
    }

    /**
     * Realizar una consulta y devolver el resultado sin datos
     *
     * @param      $query       string La consulta a realizar
     * @param      $querySource string La función orígen de la consulta
     * @param      $getRawData  bool   Si se deben de obtener los datos como PDOStatement
     * @return bool
     */
    public static function getQuery($query, $querySource, &$data = null, $getRawData = false)
    {
        if (empty($query)) {
            return false;
        }

        try {
            $db = new DB();
            $db->_querySource = $querySource;
            $db->_stData = $data;
            $db->doQuery($query, $querySource, $getRawData);
            DB::$last_num_rows = $db->num_rows;
        } catch (SPException $e) {
            self::logDBException($query, $e->getMessage(), $e->getCode(), $querySource);
            self::$txtError = $e->getMessage();
            self::$numError = $e->getCode();

            return false;
        }

        return true;
    }

    /**
     * Establecer si se devuelven los datos obtenidos como PDOStatement
     *
     * @param bool $on
     */
    public static function setReturnRawData($on = true)
    {
        self::$_returnRawData = (bool)$on;
    }

    /**
     * Establecer si es necesario contar el número total de resultados devueltos
     */
    public static function setFullRowCount()
    {
        self::$_fullRowCount = true;
    }

    /**
     * Obtener la información del servidor de base de datos
     *
     * @return array
     */
    public static function getDBinfo()
    {
        $dbinfo = array();

        try {
            $db = DBConnectionFactory::getFactory()->getConnection();

            $attributes = array(
                'SERVER_VERSION',
                'CLIENT_VERSION',
                'SERVER_INFO',
                'CONNECTION_STATUS',
            );

            foreach ($attributes as $val) {
                $dbinfo[$val] = $db->getAttribute(constant('PDO::ATTR_' . $val));
            }

        } catch (SPException $e) {
            return $dbinfo;
        }

        return $dbinfo;
    }

    /**
     * Establecer los parámetos de la consulta preparada
     *
     * @param &$data array Con los datos de los parámetros de la consulta
     */
    public function setParamData(&$data)
    {
        $this->_stData = $data;
    }
}
