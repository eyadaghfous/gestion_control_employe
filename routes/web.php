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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

Route::get('/test', 'HomeController@test')->name('test');


Route::get('/list-of-projects', 'HomeController@list')->name('list-of-projects');


Route::get('/activities', 'HomeController@activities')->name('activities');

Route::get('/archived-projects', 'HomeController@archived')->name('archived-projects');

Route::get('/profile', 'HomeController@profile')->name('profile');

Route::get('/timesheets', 'HomeController@timesheets')->name('timesheets');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::resource('accueil','AccueilController');

Route::resource('clients','ClientController');

Route::resource('equipes','EquipeController');

Route::resource('calendar','CalenderController');

Route::resource('activities','ActivitieController');

Route::resource('factures','FactureController');

Route::resource('contrats','ContratController');

Route::resource('employees','EmployeeController');

Route::resource('factures','FactureController');

Route::resource('projets','ProjetController');

Route::resource('plannings','PlanningController');

Route::resource('reglements','ReglementController');

Route::resource('taches','TacheController');

Route::resource('settings','SettingController');

Route::resource('invoices','InvoiceController');

Auth::routes();


Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
});