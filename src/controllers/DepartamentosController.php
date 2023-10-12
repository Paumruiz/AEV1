<?php

declare(strict_types=1);

namespace APP\Controllers;

use APP\Core\AbstractController;
use APP\models\Departamentos;

/**
 * Clase que se encarga de devolvernos una lista con todos las departamentos
 */
class DepartamentosController extends AbstractController
{

    public function departments(): void
    {
        //Llamamos al modelo para poder gestionar los datos
        $departamentos = new Departamentos();
        //Para este controller vamos a utilizar la plantilla departments.html.twig para mostrar adecuadamente los datos
        $this->render(
            "departments.html.twig",
            //Le pasamos los parámetros al renderizado (los datos que obtenemos del modelo)
            [
                "resultados" => $departamentos->findAllDepartments(),
                'title' => 'lista de todos los departamentos'
            ]
        );
    }
}
