<?php

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


/*
 * Tasks routes (simple mvc structure)
 */
Route::get('/tasks','TasksController@index');

Route::get('/task/{task}','TasksController@show');

Route::get('/task/{task}','TasksController@show');

/*
 * Posts route (layaoutTets)
 */
Route::get('/posts', 'PostsController@index');

Route::get('/posts/{post}', 'PostsController@show');


/*
 * Email queue
 */
Route::get('email','EmailController@sendEmail');


/*
 * Auth Routes
 */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*
 * Testing Routes
 *
 * (Compact method)
 *
 * return view('prueba-parametres', compact('name', 'arrayTest'));
 *
 * (Function method)
 *
 * return view('prueba-parametres')
 *          ->with('arrayTest', $arrayTest)
 *          ->with('name', 'prueba hola');
 *
 * (Array method)
 *
 * return view('prueba-parametres',[
 *                   'name' => 'nombre de Prueba',
 *                   'arrayTest' => [
 *                   'nameArrayTest' => 'prueba prueba',
 *                   'colorArrayTest' => 'prueba prueba'
 *                   ]
 *               ]);
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('prueba', function () {
    return view('prueba');
});

Route::get('prueba-parametres', function () {

    $name = 'Hello TEST';
    $arrayTest = [
        'task-1' => 'do it something',
        'task-2' => 'do other different thing'
    ];

    return view('prueba-parametres', compact('name', 'arrayTest'));

});
