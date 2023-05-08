<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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



// Route::get('/', function () {
//     return view('layout');
// });
// Route::get('/accueil', function () {
//     return view('.pages.accueil');
// });
// Route::get('/apropos', function () {
//     return view('.pages.apropos');
// });
// Route::get('/index', function () {
//     return view('.packages.index',[
//                     'lists'=>[
//                             'a'=>['id' => 1, 'title' => 'Spatie', 'slug' => 'spatie'],
//                             'b'=>['id' => 2, 'title' => 'No Captcha', 'slug' => 'no-captcha'],
//                             'c'=>['id' => 3, 'title' => 'SEOTools', 'slug' => 'seotools']
//                     ]]
//                 );
// }
// );


Route::get('/', [StudentController::class, 'index']);
Route::resource("student", StudentController::class);
