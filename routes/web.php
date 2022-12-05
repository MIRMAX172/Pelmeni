<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelmeniController;
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
    return view('start');
});
Route::get('/reg', function () {
    return view('reg');
});
Route::get('/menu', [PelmeniController::class, 'GetData']);


// @foreach ($data as $item)
// <div class="block">
//         <h1>{{$item -> title}}</h1>
//         <!-- <img src="1.jpg" alt="" srcset=""> -->
//         <p>{{$item -> descripton}}</p>
//         <h3>Как готовят</h3>
//         <p>{{$item -> recipe}}</p>
//     </div>
// @endforeach