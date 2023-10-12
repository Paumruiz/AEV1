<?php

declare(strict_types=1);

namespace APP\Controllers;

use APP\Core\AbstractController;
use APP\models\Productos;

/**
 * Clase que se encarga de devolvernos una lista con todos los productos
 */
class ListaProductosController extends AbstractController
{

    public function productList(): void
    {
        //Llamamos al modelo para poder gestionar los datos
        $productos = new Productos();
        //Para este controller vamos a utilizar la plantilla productList.html.twig para poder mostrar adecuadamente los datos
        $this->render(
            "productList.html.twig",
            //Le pasamos los parámetros al renderizado
            [
                "resultados" => $productos->findAllProducts(),
                'title' => 'lista de todos los productos'
            ]
        );
    }
}
