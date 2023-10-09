<?php

declare(strict_types=1);

namespace APP\Controllers;

use APP\Core\AbstractController;
use APP\models\Empresa;

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
        $empresa = new Empresa();
        $clientes = $empresa->findAllClients();

        // Si se ha seleccionado un cliente, mostramos los pedidos de ese cliente.
        $clienteId = $_POST['cliente_id'] ?? null;
        $pedidos = [];

        if ($clienteId !== null) {
            $pedidos = $empresa->findOrdersByClient($clienteId);
        }

        // Utilizamos la plantilla pedidos.html.twig para mostrar el formulario y la lista de pedidos.
        $this->render(
            "orders.html.twig",
            [
                'clientes' => $clientes,
                'clienteId' => $clienteId,
                'pedidos' => $pedidos,
                'title' => 'lista de pedidos',
            ]
        );
    }
}
