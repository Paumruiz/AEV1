<?php

declare(strict_types=1);

namespace APP\Controllers;

use APP\Core\AbstractController;
use APP\models\Empleados;

/**
 * Clase que se encarga de devolvernos una lista con todas las tareas
 */
class EmpleadosController extends AbstractController
{
    /**
     * En este caso, queremos todos los datos o los datos de un departamento específico,
     * dependiendo de si se proporciona el ID del departamento como parámetro.
     *
     * @param int|null $departamentoId ID del departamento (opcional)
     * @return void
     */
    public function employees(string $dept = null)
    {
        //Llamamos al modelo para poder gestionar los datos
        $empleados = new Empleados();

        // Si se proporciona el ID del departamento, obtenemos solo los empleados de ese departamento.
        if (is_null($dept) || strcmp("", $dept) == 0) {
            //Para este controller vamos a utilizar la plantilla list.html.twig para poder mostrar adecuadamente los datos.
            $this->render(
                "employees.html.twig",
                //Le pasamos los parámetros al renderizado que en este caso es únicamente los datos de la id
                //que obtenemos del modelo.
                [
                    "resultados" => $empleados->findAllEmployees(),
                    'title' => 'lista de empleados'
                ]
            );
        } else if (is_numeric($dept)) {
            //Para este controller vamos a utilizar la plantilla list.html.twig para poder mostrar adecuadamente los datos.
            $this->render(
                "employees.html.twig",
                //Le pasamos los parámetros al renderizado que en este caso es únicamente los datos de la id
                //que obtenemos del modelo.
                [
                    "resultados" => $empleados->findEmployeesByDepartment($dept),
                    'title' => 'empleados del departamento ' . $dept
                ]

            );
        } else {
            $noRutaController = new NoRuta();
            $noRutaController->noRuta();
        }
    }
}
