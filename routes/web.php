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
//RUTAS DEL FRONTEND
//ruta de la pagina principal

Route::get('/', ['as'=>'front.home', 'uses'=>'FrontController@index']);

Route::get('categories/{name}', ['uses'=>'FrontController@searchCategory', 'as'=>'front.search.category']);

Route::get('tags/{name}', ['uses'=>'FrontController@searchTag', 'as'=>'front.search.tag']);

Route::get('articles/{slug}', ['uses'=>'FrontController@viewArticle', 'as'=>'front.view.article']);

Route::get('/categories/', ['as'=>'front.template.partials.cursos', 'uses'=>'FrontController@all']);

Route::get('videos', ['as'=>'front.template.partials.videos', 'uses'=>'FrontController@videos']);

Route::get('sobren_osotros', ['as'=>'front.template.partials.quien', 'uses'=>'FrontController@sobreNosotros']);

Route::get('desarrollo_web', ['as'=>'front.template.partials.desarrollo', 'uses'=>'FrontController@desarrollo']);

//rutas para el contacto
Route::post('send', ['as' => 'send', 'uses' => 'MailController@send'] );
Route::get('contacto', ['as'=>'front.template.partials.contacto', 'uses'=>'FrontController@contacto']);

Route::get('politicas', ['as'=>'front.template.partials.politicas', 'uses'=>'FrontController@politicas']);


//RUTAS DE PANEL DE ADMINISTRACIÓN
//prefijo de las rutas 
Route::group(['prefix'=>'admin','middleware'=>['auth']], function(){

		//ruta de Inicio
		Route::get('/',['as'=>'admin.home', function () {
	    	return view('admin.home');
		}]);

		// grupo de rutas para acceso administradores
		Route::group(['middleware' => 'admin'], function() {

			//ruta usuario
			Route::resource('users','UsersController',['as'=>'admin']);
			//ruta para eliminar
			Route::get('users/{id}/destroy',[
				'uses'=>'UsersController@destroy',
				'as'=>'admin.users.destroy']);
		});



    	//ruta usuario
		Route::resource('users','UsersController',['as'=>'admin']);
		//ruta para eliminar
	Route::get('users/{id}/destroy',[
		'uses'=>'UsersController@destroy',
		'as'=>'admin.users.destroy']);

    //ruta categorias
	Route::resource('categories','CategoriesController',['as'=>'admin']);
	Route::get('categories/{id}/destroy',[
		'uses'=>'CategoriesController@destroy',
		'as'=>'admin.categories.destroy']);

	//ruta tags
	Route::resource('tags','TagsController',['as'=>'admin']);
	Route::get('tags/{id}/destroy',[
		'uses'=>'TagsController@destroy',
		'as'=>'admin.tags.destroy']);

	//ruta articulos
	Route::resource('articles','ArticlesController',['as'=>'admin']);
	Route::get('articles/{id}/destroy',[
		'uses'=>'ArticlesController@destroy',
		'as'=>'admin.articles.destroy']);

	// Ruta imagenes
	Route::get('images',[
		'uses'=>'ImagesController@index',
		'as'=>'admin.images.index']);
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

