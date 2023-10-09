<?php

declare(strict_types=1);

namespace APP\Controllers;

use APP\Core\AbstractController;

class MainController extends AbstractController
{
    /**
     * Esta ruta es la que sale por defecto en la aplicación cuando se inicia.
     * @return void
     */
    public function main(): void
    {
        //Ahora usamos el método extendido del AbstractController render para lanzar la plantilla de twig
        // con los parámetros necesarios.
        $this->render(
            "index.html.twig",
            [
                'title' => 'MVC con Templates TWIG',
                'descripcion' => 'página principal'
            ]
        );
    }
}
