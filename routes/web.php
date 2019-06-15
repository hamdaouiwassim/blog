<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|*/
Route::get('/chart/list','ContentPageController@listChart');
Route::get('/chart/{id}/load','ContentPageController@loadChart');
Route::post('/chart/update','ContentPageController@updateChart');

Route::post('/chart/save','ContentPageController@saveChart');
Route::get('/envoi', 'AdminController@envoiForm');
Route::post('/mail/send', 'AdminController@sendEmail');
Route::get('/compagnes','AdminController@compagnes');

Route::get('/import','AdminController@importForm');
Route::post('/import/ok','AdminController@importParse');
Route::get('/statistiques', function () {
    return view('admin.statistiques');
});


Route::get('/', function () {
    return view('admin.login');
});
Route::get('/index', function () {
    return view('admin.index');
});

Route::post('/index', 'MainController@checklogin');


Route::get('/admin/clients.create', function () {
    return view('admin.clients.Create');
});
Route::get('/admin/clients/index', function () {
    return view('admin.clients.index');
});

Route::post('/chartes', 'ChartesController@store')->name('addimage');
Route::get('/admin/forms', function () {
    return view('admin.forms');
});
Route::get('/admin/clients/Create', 'ClientsController@Create');
Route::get('/admin/clients/edit', 'ClientsController@edit');
Route::get('/admin/forms', 'ClientsController@forms');
Route::get('/admin/clients/index', 'ClientsController@index');
Route::resource('clients','ClientsController');
Route::get('/admin/forms', function () {
    return view('admin.forms');
});
Route::get('/admin/morris', function () {
    return view('admin.morris');
});

Route::get('/admin/Addclients', function () {
    return view('admin.Addclients');
});

Route::get('/layout', function () {
    return view('admin/layouts.layout');
});


Route::resource('/groupes','Groupescontroller');
Route::get('/admin/groupes', function () {
    return view('admin.groupes.index');

});
Route::get('/admin/groupes/create', function () {
    return view('admin.groupes.create');

});
Route::get('/groupes/create', function () {
    return view('groupes.create');

});
Route::get('/admin/groupes/create', 'GroupesController@create');
Route::get('groupes/edit', 'GroupesController@edit');
Route::get('groupes/index', 'GroupesController@index');




Route::get('/admin/flot', function () {
    return view('admin.flot');
});
Route::get('/admin/grid', function () {
    return view('admin.grid');
});
Route::get('/admin/typography', function () {
    return view('admin.typography');
});
