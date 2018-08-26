<?php
//use App;
//use Session;
//use URL;
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
Auth::routes();
Route::get('/dashboard', 'DashboardController@index');
Route::get('/addslide/{id}', 'ApartmentController@uploadslide');
Route::post('/uploadslide/', 'ApartmentController@storeslide');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return redirect("/lt");
});
Route::get('/{lang}', 'PagesController@index');

Route::resource('/{lang}/apartment', 'ApartmentController');

Route::get('/apie-mus', 'PagesController@aboutus');
Route::get('/{lang}/privatumo-politika', 'PagesController@privacypolicy');
Route::get('/musu-ivertinimas', 'PagesController@ourscore');


//Route::get('lang/{lang}', function ($lang) {
//    session(['lang' => $lang]);
//    App::setLocale($lang);
//    return redirect("/");
//});
//
//Route::get('/lt', 'LanguageController@lt');

Route::redirect('/apartment/palanga-sea-view-90-m2', '/lt/apartment/palanga-sea-view-90-m2');
Route::redirect('/apartment/palanga-sea-view-50m2', '/lt/apartment/palanga-sea-view-50m2');
Route::redirect('/apartment/palanga-sea-view-70m2', '/lt/apartment/palanga-sea-view-70m2');
Route::redirect('/apartment/leo-sea-view-apartment', '/lt/apartment/leo-sea-view-apartment');
Route::redirect('/apartment/baltic-seaside-residence', '/lt/apartment/baltic-seaside-residence');
Route::redirect('/apartment/smilciu-apartment', '/lt/apartment/smilciu-apartment');