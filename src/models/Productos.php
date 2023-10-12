<?php

declare(strict_types=1);

namespace APP\models;


use APP\Core\DataBase;

/**
 * Esta clase modela los datos obtenidos de la BB.DD. de la tabla productos, preparándolos para que los controladores puedan usarlos.
 */
class Productos
{

    public function findAllProducts(): array
    {

        $sql = "SELECT * FROM producto";
        $db = DataBase::getInstance();
        return $db->executeSQL($sql);
    }
}
