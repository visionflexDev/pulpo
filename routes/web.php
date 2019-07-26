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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('name','CiudadController');
//Routes
//
	
Route::middleware(['auth'])->group(function(){
	// Roles
	Route::post('roles/store','RoleController@store')->name('roles.store')
			->middleware('permission:roles.create');

	Route::get('roles','RoleController@index')->name('roles.index')
			->middleware('permission:roles.index');

	Route::get('roles/create','RoleController@create')->name('roles.create')
			->middleware('permission:roles.create');

	Route::put('roles/{role}','RoleController@update')->name('roles.update')
			->middleware('permission:roles.create');

	Route::get('roles/{role}','RoleController@show')->name('roles.show')
			->middleware('permission:roles.show');

	Route::delete('roles/{role}','RoleController@destroy')->name('roles.destroy')
			->middleware('permission:roles.destroy');

	Route::get('roles/{role}/edit','RoleController@edit')->name('roles.edit')
			->middleware('permission:roles.edit');

	// optica
		// 
	Route::post('opticas/store','OpticaController@store')->name('opticas.store')
			->middleware('permission:opticas.create');

	Route::get('opticas','OpticaController@index')->name('opticas.index')
			->middleware('permission:opticas.index');

	Route::get('opticas/create','OpticaController@create')->name('opticas.create')
			->middleware('permission:opticas.create');

	Route::put('opticas/{optica}','OpticaController@update')->name('opticas.update')
			->middleware('permission:opticas.create');

	Route::get('opticas/{optica}','OpticaController@show')->name('opticas.show')
			->middleware('permission:opticas.show');

	Route::delete('opticas/{optica}','OpticaController@destroy')->name('opticas.destroy')
			->middleware('permission:opticas.destroy');

	Route::get('opticas/{optica}/edit','OpticaController@edit')->name('opticas.edit')
			->middleware('permission:opticas.edit');

	// Persona
		// 
	Route::post('personas/store','PersonaController@store')->name('personas.store')
			->middleware('permission:personas.create');

	Route::get('personas','PersonaController@index')->name('personas.index')
			->middleware('permission:personas.index');

	Route::get('personas/create','PersonaController@create')->name('personas.create')
			->middleware('permission:personas.create');

	Route::put('personas/{personas}','PersonaController@update')->name('personas.update')
			->middleware('permission:personas.create');

	Route::get('personas/{personas}','PersonaController@show')->name('personas.show')
			->middleware('permission:personas.show');

	Route::delete('personas/{personas}','PersonaController@destroy')->name('personas.destroy')
			->middleware('permission:personas.destroy');

	Route::get('personas/{personas}/edit','PersonaController@edit')->name('personas.edit')
			->middleware('permission:personas.edit');
	
	// Propietario
		// 
	Route::post('propietarios/store','PropietarioController@store')->name('propietarios.store')
			->middleware('permission:propietarios.create');

	Route::get('propietarios','PropietarioController@index')->name('propietarios.index')
			->middleware('permission:propietarios.index');

	Route::get('propietarios/create','PropietarioController@create')->name('propietarios.create')
			->middleware('permission:propietarios.create');

	Route::put('propietarios/{propietario}','PropietarioController@update')->name('propietarios.update')
			->middleware('permission:propietarios.create');

	Route::get('propietarios/{propietario}','PropietarioController@show')->name('propietarios.show')
			->middleware('permission:propietarios.show');

	Route::delete('propietarios/{propietario}','PropietarioController@destroy')->name('propietarios.destroy')
			->middleware('permission:propietarios.destroy');

	Route::get('propietarios/{propietario}/edit','PropietarioController@edit')->name('propietarios.edit')
			->middleware('permission:propietarios.edit');

	// Regente
	Route::get('regentes','RegenteController@index')->name('regentes.index')
			->middleware('permission:regentes.index');
		// 
	Route::post('regentes/store','RegenteController@store')->name('regentes.store')
			->middleware('permission:regentes.create');

			// o tego que poner otra ruta_???
			// sii solo otra ruta y ya
			// ok, dani tienes algun select que haga busquedas para insertar aqui
			// ????
			// no
			// 
	Route::get('regentes/createSolo','RegenteController@createSolo')->name('regentes.createSolo')
			->middleware('permission:regentes.create');

	Route::get('regentes/create/{id}','RegenteController@create')->name('regentes.create')
			->middleware('permission:regentes.create');

	Route::put('regentes/{regente}','RegenteController@update')->name('regentes.update')
			->middleware('permission:regentes.create');

	Route::get('regentes/{regente}','RegenteController@show')->name('regentes.show')
			->middleware('permission:regentes.show');

	Route::delete('regentes/{regente}','RegenteController@destroy')->name('regentes.destroy')
			->middleware('permission:regentes.destroy');

	Route::get('regentes/{regente}/edit','RegenteController@edit')->name('regentes.edit')
			->middleware('permission:regentes.edit');
	
	// Distribuidora
		// 
	Route::post('distribuidoras/store','distribuidoraController@store')->name('distribuidoras.store')
			->middleware('permission:distribuidoras.create');

	Route::get('distribuidoras','distribuidoraController@index')->name('distribuidoras.index')
			->middleware('permission:distribuidoras.index');

	Route::get('distribuidoras/create','distribuidoraController@create')->name('distribuidoras.create')
			->middleware('permission:distribuidoras.create');

	Route::put('distribuidoras/{distribuidora}','distribuidoraController@update')->name('distribuidoras.update')
			->middleware('permission:distribuidoras.create');

	Route::get('distribuidoras/{distribuidora}','distribuidoraController@show')->name('distribuidoras.show')
			->middleware('permission:distribuidoras.show');

	Route::delete('distribuidoras/{distribuidora}','distribuidoraController@destroy')->name('distribuidoras.destroy')
			->middleware('permission:distribuidoras.destroy');

	Route::get('distribuidoras/{distribuidora}/edit','distribuidoraController@edit')->name('distribuidoras.edit')
			->middleware('permission:distribuidoras.edit');
    
	// User
		// 
	// Route::post('users/store','UsersController@store')->name('users.store')
	// 		->middleware('permission:users.create');

	Route::get('users','UserController@index')->name('users.index')
			->middleware('permission:users.index');

	Route::get('users/create','UserController@create')->name('users.create')
			->middleware('permission:users.create');

	Route::put('users/{user}','UserController@update')->name('users.update')
			->middleware('permission:users.create');

	Route::get('users/{user}','UserController@show')->name('users.show')
			->middleware('permission:users.show');

	Route::delete('users/{user}','UserController@destroy')->name('users.destroy')
			->middleware('permission:users.destroy');

	Route::get('users/{user}/edit','UserController@edit')->name('users.edit')
			->middleware('permission:users.edit');




});