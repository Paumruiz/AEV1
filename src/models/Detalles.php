<?php

declare(strict_types=1);

namespace APP\models;


use APP\Core\DataBase;

/**
 * Esta clase modela los datos obtenidos de la BB.DD. de la tabla detalle, preparándolos para que los controladores puedan usarlos.
 */
class Detalles
{

    public function findOrderDetailsByOrder(string $order): ?array
    {
        $sql = "SELECT * FROM detalle WHERE pedido_num =" . $order;
        $db = DataBase::getInstance();
        $result = $db->executeSQL($sql);

        if ($result) {
            return $result;
        } else {
            return null; // Devuelve null si no se encontró ningún cliente.
        }
    }
}
