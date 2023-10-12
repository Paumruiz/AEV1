<?php

declare(strict_types=1);

namespace APP\models;


use APP\Core\DataBase;

/**
 * Esta clase modela los datos obtenidos de la BB.DD. de la tabla empleados, preparándolos para que los controladores puedan usarlos.
 */
class Empleados
{

    public function findEmployeesByDepartment(string $dept): array
    {
        $sql = "SELECT * FROM emp WHERE dept_no =" . $dept;
        $db = DataBase::getInstance();
        $result = $db->executeSQL($sql);
        return $result;
    }

    public function findAllEmployees(): array
    {

        $sql = "SELECT * FROM emp";
        $db = DataBase::getInstance();
        return $db->executeSQL($sql);
    }
}
