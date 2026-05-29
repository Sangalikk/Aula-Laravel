<?php

use App\Http\Controllers\KeepControler;
use Illuminate\Support\Facades\Route;

    // Tabuada
// Route::get('/tab/{n}/{x}', function($n, $x){
//     if(!is_numeric($x) || !is_numeric($n)) return 'Os valores de n e x devem ser números.';
//     for($i = 1; $i <= $x; $i++) {
//         echo "$n x $i = " . ($n * $i) . "<br>";
//     }
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/keep', [KeepControler::class, 'index'])->name('keep.index');
Route::get('/keep/create', [KeepControler::class, 'create'])->name('keep.create');
Route::post('/keep/create', [KeepControler::class, 'create']);

