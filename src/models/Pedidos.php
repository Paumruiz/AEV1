<?php

declare(strict_types=1);

namespace APP\models;


use APP\Core\DataBase;

/**
 * Esta clase modela los datos obtenidos de la BB.DD. de la tabla pedidos, preparándolos para que los controladores puedan usarlos.
 */
class Pedidos
{

    public function findAllOrders(): array
    {

        $sql = "SELECT * FROM pedido";
        $db = DataBase::getInstance();
        return $db->executeSQL($sql);
    }

    public function findOrdersByClient(string $id): array
    {
        $sql = "SELECT * FROM pedido WHERE cliente_cod =" . $id;
        $db = DataBase::getInstance();
        $result = $db->executeSQL($sql);

        return $result;
    }
}
