<?php

/**
 * sysPass
 *
 * @author    nuxsmin
 * @link      https://syspass.org
 * @copyright 2012-2018, Rubén Domínguez nuxsmin@$syspass.org
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
 *  along with sysPass.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace SP\Services\Import;

use SP\Services\Service;

defined('APP_ROOT') || die();

/**
 * Esta clase es la encargada de importar cuentas.
 */
class ImportService extends Service
{
    /**
     * @var ImportParams
     */
    protected $importParams;
    /**
     * @var FileImport
     */
    protected $fileImport;

    /**
     * Iniciar la importación de cuentas.
     *
     * @param ImportParams $importParams
     * @param FileImport   $fileImport
     *
     * @return int Returns the total number of imported items
     * @throws \Exception
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function doImport(ImportParams $importParams, FileImport $fileImport)
    {
        $this->importParams = $importParams;
        $this->fileImport = $fileImport;

        return $this->transactionAware(function () {
            return $this->selectImportType()
                ->doImport()
                ->getCounter();
        });
    }

    /**
     * @return ImportInterface
     * @throws ImportException
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     * @throws \SP\Storage\FileException
     */
    protected function selectImportType()
    {
        $fileType = $this->fileImport->getFileType();

        switch ($fileType) {
            case 'text/plain':
                return new CsvImport($this->dic, $this->fileImport, $this->importParams);
                break;
            case 'text/xml':
            case 'application/xml':
                return new XmlImport($this->dic, new XmlFileImport($this->fileImport), $this->importParams);
                break;
        }

        throw new ImportException(
            sprintf(__('Tipo mime no soportado ("%s")'), $fileType),
            ImportException::ERROR,
            __u('Compruebe el formato del archivo')
        );
    }

    /**
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    protected function initialize()
    {
        set_time_limit(0);
    }
}