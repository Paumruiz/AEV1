<?php

declare(strict_types=1);

namespace APP\Controllers;

use APP\Core\AbstractController;
use APP\models\Clientes;

class DetalleClienteController extends AbstractController
{
    /**
     * Obtenemos la totalidad de los datos de una determinado cliente a partir de su id
     */
    public function clientDetail(string $id = null): void
    {
        //Llamamos al modelo para poder gestionar los datos
        $clientes = new Clientes();
        if (is_null($id) || strcmp("", $id) == 0) {
            //Si no recibimos la id o está vacía pasamos los parámetros a TWIG como nulos
            $this->render(
                "clientDetail.html.twig",
                [
                    "resultados" => null,
                    'title' => 'no se han recibido parámetros'
                ]
            );
        } else if (is_numeric($id)) {

            //Para este controller vamos a utilizar la plantilla clientDetail.html.twig para poder mostrar adecuadamente los datos
            $this->render(
                "clientDetail.html.twig",
                [
                    "resultados" => $clientes->findClientById($id),
                    'title' => 'detalle del cliente ' . $id
                ]
            );
        } else {
            $noRutaController = new NoRuta();
            $noRutaController->noRuta();
        }
    }
}
