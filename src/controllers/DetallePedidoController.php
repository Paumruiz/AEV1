<?php

declare(strict_types=1);

namespace APP\Controllers;

use APP\Core\AbstractController;
use APP\models\Detalles;

class DetallePedidoController extends AbstractController
{
    /**
     * Mostraremos la totalidad de los datos de una determinada tarea a partir de su id
     * @param string|null $id
     * @return void
     */
    public function orderDetail(string $pedidoId = null): void
    {
        $detalles = new Detalles();
        if (is_null($pedidoId) || strcmp("", $pedidoId) == 0) {
            //Si no recibimos la id o está vacía pasarémos los parámetros a TWIG como nulos
            $this->render(
                "orderDetail.html.twig",
                [
                    "resultados" => null,
                    'title' => 'no se han recibido parámetros'
                ]
            );
        } else if (is_numeric($pedidoId)) {

            // Utilizamos la plantilla detallePedido.html.twig para mostrar los detalles del pedido.
            $this->render(
                "orderDetail.html.twig",
                [
                    'resultados' => $detalles->findOrderDetailsByOrder($pedidoId),
                    'title' => 'detalle del pedido ' . $pedidoId

                ]
            );
        } else {
            $noRutaController = new NoRuta();
            $noRutaController->noRuta();
        }
    }
}
