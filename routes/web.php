<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    
    try {
        DB::connection()->getPdo();
        echo 'Conectado ao banco de dados com sucesso!' . DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        die('Não foi possível conectar ao banco de dados. Verifique sua conexão com a internet e tente novamente. Erro:' . $e->getMessage());
        // 
    }

});

Route::get('/main', [Main::class, 'index']);

?>