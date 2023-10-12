<?php

declare(strict_types=1);

namespace APP\models;


use APP\Core\DataBase;

/**
 * Esta clase modela los datos obtenidos de la BB.DD. de la tabla departamentos, preparándolos para que los controladores puedan usarlos.
 */
class Departamentos
{

    public function __construct()
    {
    }

    public function findAllDepartments(): array
    {

        $sql = "SELECT * FROM dept";
        $db = DataBase::getInstance();
        return $db->executeSQL($sql);
    }
}
