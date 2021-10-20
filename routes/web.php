<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ContactanosController;

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

Route::get('/', HomeController::class)->name('home');

Route::resource('curso', CursoController::class)->names('cursos');

Route::view('nosotros','nosotros')->name('nosotros');

Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');

Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');


/* Route::get('contactanos', function(){
    
    $correo = new ContactanosMailable();
    Mail::to('jorge27cht@gmail.com')->send($correo);
    return "Mensaje enviado";


})->name('contactanos.index'); */

/*Route::get('/curso', [CursoController::class, 'index'])->name('cursos.index');

Route::get('/curso/create', [CursoController::class, 'create'])->name('cursos.create');

Route::post('/curso', [CursoController::class, 'store'])->name('cursos.store');

Route::get('/curso/{curso}', [CursoController::class, 'show'])->name('cursos.show');

Route::get('/curso/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

Route::put('/curso/{curso}', [CursoController::class, 'update'])->name('cursos.update');

Route::delete('/curso/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy'); */

//Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos');


/*
Route::get('/curso', function () {
    
    return "Bienvenidos a la pagina principal";
});

Route::get('/curso/create', function () {
    
    return "En esta página podrás crear un curso";
});

Route::get('/curso/{curso}', function ($curso) {
    
    return "Bienvenido al curso $curso";
});


Route::get('/curso/{curso}/{categoria}', function ($curso, $categoria = null) {

    if($categoria){
        return "Bienvenido al curso $curso de la categoria $categoria";
    }else{
        return "Bienvenido al curso $curso";
    }
  
});*/