<?php

//declare(strict_types=1);

namespace APP\Controllers;

use APP\Core\AbstractController;

class NoRuta extends AbstractController
{
    public function noRuta()
    {
        $this->render(
            "404.html.twig",
            [
                'title' => 'la ruta no es correcta',
                'descripcion' => 'error: ruta no disponible'
            ]
        );
    }
}
