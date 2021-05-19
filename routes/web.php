<?php

use App\Http\Controllers\MetabuscadorController;
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
/*
//el tipo de datos hay 2 lenguajes , fuertemente equipado:se define el tipo de dato y no cambia
// php, js son lenguajes devilmente equipados no es necesario definir el dato
//en php no existe el problema de definir las variables como entero etc
//concaenar pgar 2 cadenas de caracteres en php es con .
// solo para recorrer arreglos en php foreach
    $suma= 0;
    foreach($paises as  $nombre => $pais):
        $suma += $pais ["poblacion"];
    endforeach;
    echo "la suma de los paises es $suma";



    echo "<hr />";


/*/
//llamar una vista
//con datos de paises
//alias:nombre con el cual se reconocen los datos en la vista
return view ('paises')->with ( "naciones", $paises);




});
Route::get('formulario_buscador',"MetabuscadorController@formulario_buscador" );

Route::post('buscar',"MetabuscadorController@buscar");



