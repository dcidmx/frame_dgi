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

Route::any('sistemas/modal_relacionar_sistemas/{id_usuario}', 'Sistemas@modal_relacionar_sistemas');
Route::any('sistemas/vincular_sistema/{id_usuario}/{id_sistema}/{estado}', 'Sistemas@vincular_sistema');

Route::any('usuarios/upload_dropzone/{ruta}/{permisos}', 'Usuarios@upload_dropzone');
Route::post('usuarios/editar_perfil', 'Usuarios@editar_perfil');
Route::any('/usuarios/perfil', 'Usuarios@perfil');
Route::any('/usuarios', 'Usuarios@index');
Route::any('/usuarios/obtener_usuarios', 'Usuarios@obtener_usuarios');
Route::any('/usuarios/modal_add_usr', 'Usuarios@modal_add_usr');
Route::any('/usuarios/agregar_usuario', 'Usuarios@agregar_usuario');
Route::any('/usuarios/datos_usuario/{id_usuario}', 'Usuarios@datos_usuario');
Route::any('/usuarios/desbloquea_usuario/{id_usuario}', 'Usuarios@desbloquea_usuario');
Route::any('/usuarios/desbloquear_usuarios', 'Usuarios@desbloquear_usuarios');
Route::any('/usuarios/editar_usuario', 'Usuarios@editar_usuario');


Route::get('/', 'Inicio@index');
Route::get('/inicio', 'Inicio@index');
Route::get('/inicio/load_start', 'Inicio@load_start');


Route::get('/login', 'Login@index');
Route::any('/login/logear', 'Login@logear');
Route::get('/login/recuperar_datos', 'Login@recuperar_datos');
Route::get('/login/403', 'Login@error403');
Route::get('/login/tyc', 'Login@tyc');
Route::get('/login/pass_chge', 'Login@pass_chge');
Route::get('/login/lockSession', 'Login@lockSession');
Route::any('/login/salir', 'Login@salir');
Route::any('/login/verifica_session', 'Login@verifica_session');
Route::post('/login/keepAliveReset', 'Login@keepAliveReset');
Route::post('/login/keepAlive', 'Login@keepAlive');

Route::any('/site', 'Site@index');

Route::fallback('Login@error404');
