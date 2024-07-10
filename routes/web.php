<?php

use Illuminate\Support\Facades\Route;

//$url = link = http://127.0.0.1:8000/ciao

//$dominio =http://127.0.0.1:8000
//$uri =/ciao

Route::get('/', function () {
    //resources/views
    //welcome
    //.blade.php
    return view('welcome');
})->name('homepage');

Route::get('/chi-sono-io-sdsdsds-sdfsdfsdsdsdffsdsdffsd', function () {
    //resources/views/
    //about-us
    //.blade.php
    return view('about-us');
})->name('chisono');

Route::get('/servizi-offerti', function () {
    //Marketing, Sviluppo Web, eCommerce
    $servizi = ['marketing', 'consulenze', 'web', 'ecommerce', 'ciao', 'aulab', 'ciccio'];


    return view('servizi', ['servizi' => $servizi]);
})->name('servizi');

Route::get('/dettaglio-servizio/{service}', function ($service) {

    return view('servizio', ['servizio' => $service]);
})->name('servizio');
 

//Rotta parametrica


//$url = http://127.0.0.1:8000/profilo/romolo/3894784574/ciao;
//roptta static = http://127.0.0.1:8000/profilo;
//$name = 'romolo'
// Route::get('/profilo/{name}/anagrafica/{telefono}/{testo}', function ($name, $telefono, $testo) {
//     return $name . ' - ' .  $telefono . $testo;
// });

// Route::get('/profilo/ciccio', function () {
//     return 'Ciccio';
// });

// Route::get('/profilo/Pluto', function () {
//     return 'Pluto';
// });
