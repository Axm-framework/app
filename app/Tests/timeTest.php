<?php

use PHPUnit\Framework\TestCase;
use Axm\Validation\Validator;

require_once __DIR__ . '/bootstrap.php';

class MiPruebaTest extends TestCase
{
    // public function testAlgo()
    // {
    //     // helpers('axm' , true);
    //     $val = new Validator();
    //     $data = [
    //         'nombre' => 'required|max:100|min:3|text',
    //         'apellidos' => 'required|max:100|min:3|text',
    //         'edad' => 'required|int|'
    //     ];

    //     $val->rules = $data;
    //     $val->data = [
    //         'nombre' => 'Juan Cristobal Gómez Duran',
    //         'apellidos' => 'Gómez Durán',
    //         'edad' => 78,
    //     ];

    //     dump(
    //         $val->startValidation()
    //     );
    // }

    // Crear una lista de solicitudes a realizar
    public $status;

    public function testAlgo()
    {
        $urls = [
            'https://www.google.com',
            'https://www.facebook.com',
            'https://www.github.com',
            'https://www.youtube.com',
        ];

        // Crear una fibra con una variable de estado personalizada
        $fiber = new Fiber(function () use ($urls) {
            $response = yield worker($urls);
            return $response;
        });

        $fiber->start();

        if ($fiber->isTerminated()) {
            return $fiber->getReturn();
        }
    }
}

// Crear una función asincrónica para realizar solicitudes HTTP
function asyncHttpRequest($url)
{
    return (function () use ($url) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        yield $response;
    });
}

// Crear una función de "worker" que maneje cada solicitud en una fiber
function worker($urls)
{
    foreach ($urls as $url) {
        $response = yield asyncHttpRequest($url);
        echo $url . " responded with " . strlen($response) . " bytes" . PHP_EOL;
    }
}

//./vendor/bin/phpunit tests

// assertEquals:                           Este método compara dos valores y verifica que sean iguales. Se utiliza para comparar valores escalares, objetos y matrices.
// assertTrue / assertFalse:               Estos métodos verifican si una expresión es verdadera o falsa, respectivamente.
// assertInstanceOf:                       Este método comprueba si una instancia de un objeto es una instancia de una clase específica.
// expectException:                        Este método especifica que se espera que se lance una excepción durante la ejecución de una prueba.
// assertNull / assertNotNull:             Estos métodos comprueban si un valor es nulo o no nulo, respectivamente.
// assertSame / assertNotSame:             Estos métodos comprueban si dos valores son el mismo objeto o no, respectivamente.
// assertCount:                            Este método comprueba si una matriz o un objeto iterable tiene un número específico de elementos.
// assertArrayHasKey:                      Este método comprueba si una matriz tiene una clave específica.
// assertStringContainsString:             Este método comprueba si una cadena contiene otra cadena.
// assertFileExists / assertFileNotExists: Estos métodos comprueban si un archivo existe o no existe, respectivamente.