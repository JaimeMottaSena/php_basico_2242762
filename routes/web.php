<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('variables' , function(){
    echo "hola";
});

Route::get("paises",function(){
    $paises=["Colombia"=>[
            "capital"=>"Bogota",
            "moneda"=>"Peso",
            "poblacion"=> 51
    ] ,
    "Peru"=>[
        "capital"=>"Lima",
        "moneda"=>"Sol",
        "poblacion"=> 32.8
    ],
    "Paraguay"=>[
        "capital"=>"Asuncion",
        "moneda"=>"Guarani",
        "poblacion"=> 7.3

    ]
];
//el tipo de datos hay 2 lenguajes , fuertemente equipado:se define el tipo de dato y no cambia
// php, js son lenguajes devilmente equipados no es necesario definir el dato
//en php no existe el problema de definir las variables como entero etc
//concaenar pgar 2 cadenas de caracteres en php es con .
// solo para recorrer arreglos en php foreach
    foreach($paises as  $nombre => $pais){
        echo "<pre>";
        echo"<h1>$nombre</<h1>". "<br/>";
        print_r($pais["capital"]. "<br/>");
        print_r($pais["poblacion"]. "<br/>");
        print_r($pais["moneda"]. "<br/>");
        echo"</pre>";
        echo "<hr />";

    }



});
