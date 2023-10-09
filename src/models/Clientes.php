<?php

declare(strict_types=1);

namespace APP\models;


use APP\Core\DataBase;

/**
 * Esta clase modela los datos obtenidos de la BB.DD. preparandolos para que los controladores puedan usarlos.
 */
class Clientes
{

    //Remarcar que cuando creamos el Model el constructor no hace nada.
    public function __construct()
    {
    }

    /**
     * Ejecutaremos la sentencia SQL correspondiente en el método para que nos devuelva todos los datos de la tabla tareas
     * @return array
     */
    public function findAllClients(): array
    {

        $sql = "SELECT * FROM cliente";
        //En este caso llamamos al método getInstance de la Clase DataBase y obtendremos una instancia de la misma,
        //Nosotros no debemos preocuparnos de si ya existía o no.
        $db = DataBase::getInstance();
        return $db->executeSQL($sql);
    }

    public function findClientById(string $id): array
    {
        $sql = "SELECT * FROM cliente WHERE cliente_cod =" . $id;
        //En este caso llamamos al método getInstance de la Clase DataBase y obtendremos una instancia de la misma,
        //Nosotros no debemos preocuparnos de si ya existía o no.
        $db = DataBase::getInstance();
        $result = $db->executeSQL($sql);
        return array_shift($result);
    }
}
