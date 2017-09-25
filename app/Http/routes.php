<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
*---------------------------------------------------------------------------
*  Front end 
*--------------------------------------------------------------------------- 
 * 
 */


Route::get('/', ['uses'=>'InitController@index','as'=> 'home']);

Route::get('/galerie', ['uses'=>'MagasinController@index','as'=> 'galerie']);

Route::get('/home',array('as'=>'index',function () {
			return view('front/index');
		}));
Route::get('/contact',array('as'=>'contact',function () {
    return view('front/contact');
}));

Route::get('/guestBook', ['uses'=>'AdviseController@index','as'=> 'guestBook']);

Route::get('send', ['uses'=>'MailController@send','as'=> 'send']);

Route::get('email', ['uses'=>'EmailController@getForm','as'=> 'newEmail']);

Route::post('email', ['uses' => 'EmailController@postForm', 'as' => 'storeEmail']);

Route::get('ingredients',['uses'=>'IngredientController@createInModel','as'=>'IngredientInModel']);

Route::get('test',['uses'=> 'GeneralController@generateImage', 'as'=>'test']);

Route::resource('advise', 'AdviseController');


/*
 * --------------------------------------------------------------------------
 * routes ajax
 * --------------------------------------------------------------------------
 */

Route::get('nossandwiches',['uses'=> 'SandwicheController@frontIndex', 'as'=>'NosSandwiches']);

Route::get('nosheures',['uses'=> 'WorkHourController@frontIndex', 'as'=>'nosheures']);

Route::get('nosplatsprepare',['uses'=> 'PlatPrepareController@frontIndex', 'as'=>'nosplatsprepare']);

Route::get('nosBuffets',['uses'=> 'BuffetController@frontIndex', 'as'=>'nosBuffets']);

Route::get('adviseList',['uses'=> 'AdviseController@indexForHomeSlide', 'as'=>'adviseList']);


/*
 *
 */



Route::get('upDatePhoto/{roleEtPhoto}', 'PhotoController@upDatePhoto');

Route::put('workhout/edit',['uses'=>'WorkHourController@edit', 'as'=>'workHourModify']);

/*----------------------------------------------------------
 *      Les Ressources
 * ---------------------------------------------------------
 */

/*
 | ----------------------------------------------------------------------
 * Back end
 |-----------------------------------------------------------------------
*/

Route::group(['middleware' => 'auth','prefix' => 'admin'], function () {

    Route::get('/', ['uses'=>'InitController@indexBackEnd','as'=> 'admin']);

    Route::resource('sandwiche', 'SandwicheController');

    Route::resource('photo', 'PhotoController');

    Route::resource('salade', 'SaladeController');

    Route::resource('platprepare', 'PlatPrepareController');

    Route::resource('buffet', 'BuffetController');

    Route::resource('note', 'NoteController');

    Route::get('publierPlat',['uses'=>'PlatPrepareController@publierPlat', 'as'=>'publierPlat']);

    Route::get('publierRole',['uses'=>'PhotoController@publierRole', 'as'=>'publierRole']);

    Route::get('addSlide',['uses'=>'RolePhotosController@addSlide', 'as'=>'addSlide']);

    Route::get('addGallerie',['uses'=>'RolePhotosController@addGallerie', 'as'=>'addGallerie']);


});

Route::resource('user', 'UserController');

Route::resource('ingredient', 'IngredientController');

Route::resource('RolePhoto', 'RolePhotosController');

Route::resource('FamilleSandwiche', 'FamilleSandwicheController');

Route::resource('familleplat', 'FamillePlatController');

Route::resource('unitevente', 'UniteVenteController');

Route::resource('workhour', 'WorkHourController');

Route::resource('day', 'DayController');
//
//	Route::group(['prefix'=>'admin',/*'middleware' => 'auth'*/], function(){
//
//		Route::get('/',array('as'=>'home',function () {
//			return view('welcome');
//		}));
//
//		Route::get('/new',array('as'=>'adminMain', function () {
//			return view('nouvelleVue');
//		}));
//
//	});
//


Route::auth();

//Route::get('/home', 'HomeController@index');
