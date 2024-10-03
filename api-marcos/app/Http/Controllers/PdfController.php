<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function index()
    {
        // Crear una instancia del controlador StudentController
        $servantController = new ServantController();

        // Obtener la respuesta del método index()
        $response = $servantController->index();

        // Decodificar el contenido JSON a un array
        $responseData = json_decode($response->getContent(), true); // Asegurarse de que devuelve un array

        // Comprobar si la respuesta es válida y contiene datos de estudiantes
        if (!isset($responseData['data']) || !is_array($responseData['data'])) {
            return response()->json(['error' => 'Datos de servants no válidos'], 500);
        }

        // Obtener la lista de estudiantes
        $servants = $responseData['data'];

        // Preparar los datos para la vista
        $data = [
            'title' => 'Listado de Servants',
            'servants' => $servants
        ];

        // Cargar la vista y pasar los datos
        $pdf = PDF::loadView('pdf.document', $data);

        // Retornar el PDF como respuesta
        return $pdf->download('documento.pdf'); // El nombre del archivo PDF
    }

    //
}
