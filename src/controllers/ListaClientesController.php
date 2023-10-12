<?php

declare(strict_types=1);

namespace APP\Controllers;

use APP\Core\AbstractController;
use APP\models\Clientes;

/**
 * Clase que se encarga de devolvernos una lista con todos los clientes
 */
class ListaClientesController extends AbstractController
{

    public function clientList(): void
    {
        //Llamamos al modelo para poder gestionar los datos
        $clientes = new Clientes();
        //Para este controller vamos a utilizar la plantilla clientList.html.twig para poder mostrar adecuadamente los datos
        $this->render(
            "clientList.html.twig",
            //Le pasamos los parámetros al renderizado
            [
                "resultados" => $clientes->findAllClients(),
                'title' => 'lista de todos los clientes'
            ]
        );
    }
}
