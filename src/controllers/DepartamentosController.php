<?php

declare(strict_types=1);

namespace APP\Controllers;

use APP\Core\AbstractController;
use APP\models\Departamentos;

/**
 * Clase que se encarga de devolvernos una lista con todas las tareas
 */
class DepartamentosController extends AbstractController
{
    /**
     * En este caso queremos todos los dato por lo con el modelo vamos a usar el método que nos devuelve todos los datos
     * @return void
     */
    public function departments(): void
    {
        //Llamamos al modelo para poder gestionar los datos
        $departamentos = new Departamentos();
        //Para este controller vamos a utilizar la plantilla list.html.twig para poder mostrar adecuadamente los datos.
        $this->render(
            "departments.html.twig",
            //Le pasamos los parámetros al renderizado que son todos los datos que obtenemos del modelo.
            [
                "resultados" => $departamentos->findAllDepartments(),
                'title' => 'lista de todos los departamentos'
            ]
        );
    }
}
