<?php

declare(strict_types=1);

namespace APP\models;


use APP\Core\DataBase;

/**
 * Esta clase modela los datos obtenidos de la BB.DD. preparandolos para que los controladores puedan usarlos.
 */
class Empresa
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

    public function findAllDepartments(): array
    {

        $sql = "SELECT * FROM dept";
        //En este caso llamamos al método getInstance de la Clase DataBase y obtendremos una instancia de la misma,
        //Nosotros no debemos preocuparnos de si ya existía o no.
        $db = DataBase::getInstance();
        return $db->executeSQL($sql);
    }

    public function findEmployeesByDepartment(string $dept): array
    {
        $sql = "SELECT * FROM emp WHERE dept_no =" . $dept;
        //En este caso llamamos al método getInstance de la Clase DataBase y obtendremos una instancia de la misma,
        //Nosotros no debemos preocuparnos de si ya existía o no.
        $db = DataBase::getInstance();
        $result = $db->executeSQL($sql);
        return $result;
    }

    public function findAllEmployees(): array
    {

        $sql = "SELECT * FROM emp";
        //En este caso llamamos al método getInstance de la Clase DataBase y obtendremos una instancia de la misma,
        //Nosotros no debemos preocuparnos de si ya existía o no.
        $db = DataBase::getInstance();
        return $db->executeSQL($sql);
    }

    public function findAllOrders(): array
    {

        $sql = "SELECT * FROM pedido";
        //En este caso llamamos al método getInstance de la Clase DataBase y obtendremos una instancia de la misma,
        //Nosotros no debemos preocuparnos de si ya existía o no.
        $db = DataBase::getInstance();
        return $db->executeSQL($sql);
    }

    public function findOrdersByClient(string $id): array
    {
        $sql = "SELECT * FROM pedido WHERE cliente_cod =" . $id;
        //En este caso llamamos al método getInstance de la Clase DataBase y obtendremos una instancia de la misma,
        //Nosotros no debemos preocuparnos de si ya existía o no.
        $db = DataBase::getInstance();
        $result = $db->executeSQL($sql);
        return $result;
    }

    public function findAllProducts(): array
    {

        $sql = "SELECT * FROM producto";
        //En este caso llamamos al método getInstance de la Clase DataBase y obtendremos una instancia de la misma,
        //Nosotros no debemos preocuparnos de si ya existía o no.
        $db = DataBase::getInstance();
        return $db->executeSQL($sql);
    }
    /**
     * Ejecutamos la sentencia SQL correspondiente para que nos devuelva los datos asociados a la "id" de la tabla tareas
     * @param string $id
     * @return array
     */
    public function findClientById(string $id): array
    {
        $sql = "SELECT * FROM cliente WHERE cliente_cod =" . $id;
        //En este caso llamamos al método getInstance de la Clase DataBase y obtendremos una instancia de la misma,
        //Nosotros no debemos preocuparnos de si ya existía o no.
        $db = DataBase::getInstance();
        $result = $db->executeSQL($sql);
        return array_shift($result);
    }

    public function findOrderDetailsByOrder(string $order): array
    {
        $sql = "SELECT * FROM detalle WHERE pedido_num =" . $order;
        //En este caso llamamos al método getInstance de la Clase DataBase y obtendremos una instancia de la misma,
        //Nosotros no debemos preocuparnos de si ya existía o no.
        $db = DataBase::getInstance();
        $result = $db->executeSQL($sql);
        return $result;
    }
}
