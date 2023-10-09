<?php

namespace APP\Controllers;

use APP\Core\AbstractController;

class NoRuta extends AbstractController
{
    public function noRuta($param = null)
    {
        //Ahora usamos el método extendido del AbstractController render para lanzar la plantilla de twig
        // con los parámetros necesarios.
        $this->render(
            "404.html.twig",
            [
                'title' => 'la ruta no es correcta',
                'descripcion' => 'error: la ruta introducida no existe'
            ]
        );
    }
}