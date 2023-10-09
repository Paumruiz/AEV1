<?php

declare(strict_types=1);

namespace APP\Controllers;

use APP\Core\AbstractController;
use APP\models\Pedidos;
use APP\models\Clientes;

/**
 * Clase que se encarga de gestionar los pedidos y detalles de pedidos de los clientes.
 */
class PedidosController extends AbstractController
{
    /**
     * Muestra un desplegable con el nombre de todos los clientes.
     *
     * @return void
     */
    public function orders(): void
    {
        // Llamamos al modelo para obtener la lista de clientes.
        $clientes = new Clientes();
        $pedidos = new Pedidos();

        $listaClientes = $clientes->findAllClients();

        // Si se ha seleccionado un cliente, mostramos los pedidos de ese cliente.
        $clienteId = $_POST['cliente_id'] ?? null;
        $listaPedidos = [];

        if ($clienteId !== null) {
            $listaPedidos = $pedidos->findOrdersByClient($clienteId);
        }

        // Utilizamos la plantilla pedidos.html.twig para mostrar el formulario y la lista de pedidos.
        $this->render(
            "orders.html.twig",
            [
                'clientes' => $listaClientes,
                'clienteId' => $clienteId,
                'pedidos' => $listaPedidos,
                'title' => 'lista de pedidos',
            ]
        );
    }
}
