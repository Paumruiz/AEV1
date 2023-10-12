<?php

declare(strict_types=1);

namespace APP\Controllers;

use APP\Core\AbstractController;

class MainController extends AbstractController
{
    /**
     * Esta ruta es la ruta inicial, que sale por defecto cuando se inicia la aplicación
     */
    public function main(): void
    {
        //Para este controller vamos a utilizar la plantilla index.html.twig para poder mostrar adecuadamente los datos
        $this->render(
            "index.html.twig",
            [
                'title' => 'MVC con Templates TWIG',
                'descripcion' => 'página principal'
            ]
        );
    }
}
