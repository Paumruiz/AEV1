<?php

declare(strict_types=1);

namespace APP\models;


use APP\Core\DataBase;

/**
 * Esta clase modela los datos obtenidos de la BB.DD. preparandolos para que los controladores puedan usarlos.
 */
class Productos
{

    public function findAllProducts(): array
    {

        $sql = "SELECT * FROM producto";
        //En este caso llamamos al método getInstance de la Clase DataBase y obtendremos una instancia de la misma,
        //Nosotros no debemos preocuparnos de si ya existía o no.
        $db = DataBase::getInstance();
        return $db->executeSQL($sql);
    }
}
