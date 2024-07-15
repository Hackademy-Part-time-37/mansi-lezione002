<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

//$url = link = http://127.0.0.1:8000/ciao

//$dominio =http://127.0.0.1:8000
//$uri =/ciao


// Route::get('/',['Controller', 'metodo'])->name('homepage');
Route::get('/', [PageController::class, 'homepage'])->name('homepage');
Route::get('/chi-sono', [PageController::class, 'about'])->name('chisono');
Route::get('/servizi-offerti', [PageController::class, 'services'])->name('servizi');
Route::get('/dettaglio-servizio/{service}/{testo}', [PageController::class, 'service'])->name('servizio');
 

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
