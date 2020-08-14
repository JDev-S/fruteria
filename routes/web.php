<?php

use Illuminate\Support\Facades\Route;

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
    return view('/principal/index');
});

Route::get('/registrarse', function () {
    return view('/principal/registrarse');
});

Route::get('/iniciar_sesion', function () {
    return view('/principal/iniciar_sesion');
});

Route::get('/acerca_de', function () {
    return view('/principal/acerca_de');
});

Route::get('/contacto', function () {
    return view('/principal/contacto');
});

Route::get('/contacto', function () {
    return view('/principal/contacto');
});

Route::get('/tienda', function () {
    return view('/principal/tienda');
});

Route::get('/info_producto', function () {
    return view('/principal/info_producto');
});

Route::get('/carrito', function () {
    return view('/principal/carrito');
});

Route::get('/pagar', function () {
    return view('/principal/pagar');
});


/*CONSOLA DEL ADMINISTRADOR*/
/*RUTAS PARA LOS ADMINISTRADORES*/
Route::get('/Admin_restaurante', function () {
    return view('/Administrador/index');
});
/*ADMINISTRADOR CATEGORIA*/
Route::get('/admin_categoria','CategoriaController@categorias_mostrar');
Route::post('/admin_categoria_borrar','CategoriaController@eliminar');
Route::post('/Admin_categoria_nuevo','CategoriaController@insertar');
Route::post('/Admin_categoria_editar','CategoriaController@actualizar');

/*ADMINISTRADOR DE PRODUCTOS*/
/*Administrador alimentos*/

Route::get('/admin_alimentos','ProductosController@alimentos_mostrar');

Route::post('/admin_alimentos_borrar','ProductosController@eliminar');

Route::get('/agregar_alimento','ProductosController@mostrar_insertar');

Route::post('/Admin_alimentos_nuevo','ProductosController@insertar')->name('Admin_alimentos_nuevo');


Route::get('/actualizar_alimento','ProductosController@mostrar_actualizar');
Route::post('/Admin_alimentos_editar','ProductosController@actualizar')->name('Admin_alimentos_editar');


/*ADMINISTRADOR DE USUARIOS*/
Route::get('/admin_usuario','UsuarioController@usuarios_mostrar');
Route::post('/admin_usuario_eliminar','UsuarioController@eliminar');
Route::get('/agregar_usuario','UsuarioController@mostrar_insertar');

/*ADMINISTRADOR DE DIRECCIONES*/

Route::get('/admin_direcciones/{direccion?}','DireccionController@direccion_mostrar');
Route::post('/admin_direccioneseliminar','DireccionController@eliminar')->name('admin_direccioneseliminar');
Route::post('/admin_direccionesingresar','DireccionController@insertar')->name('admin_direccionesingresar');
Route::post('/admin_direccionesactualizar','DireccionController@actualizar')->name('admin_direccionesactualizar');

//Route::post('/Admin_alimentos_nuevo','UsuarioController@insertar');
Route::post('/Admin_usuario_nuevo','UsuarioController@insertar')->name('Admin_usuario_nuevo');
Route::get('/actualizar_usuario','UsuarioController@mostrar_actualizar');
Route::post('/Admin_usuario_actualizar','UsuarioController@actualizar')->name('Admin_usuario_actualizar');

/*Administrador Metodo de pago*/
Route::get('/admin_metodo_de_pago','Metodo_pagoController@metodo_pago_mostrar');
Route::post('/admin_metodo_de_pago_eliminar','Metodo_pagoController@eliminar');
Route::post('/Admin_metodo_de_pago_insertar','Metodo_pagoController@insertar');
Route::post('/Admin_metodo_de_pago_actualizar','Metodo_pagoController@actualizar');

/*ADMINISTRADOR DE IMAGENES MUESTRA*/
Route::get('/admin_imagenes_muestra/{alimento?}','Imagenes_muestraController@imagenes_de_muestra_mostrar');
Route::post('/admin_imagenes_muestra_eliminar','Imagenes_muestraController@eliminar')->name('admin_imagenes_muestra_eliminar');
Route::post('/Admin_imagenes_muestra_insertar','Imagenes_muestraController@insertar')->name('Admin_imagenes_muestra_insertar');
