<?php



/**Route::get('/etudiant','EtudiantController@index');

/**Route::resource('form','EtudiantController');*/



Route::resource('etudiant','EtudiantController');
Route::get('etudiant/{id}', 'EtudiantController@show');

Route::get('student','EtudiantController@indexe');


/**Route::get('/form', function () {
    return view('form');
});*/


Route::get('/', function () {
    return view('welcome');
});


/**Route::resource('/etudiant','EtudiantController');*/



Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');


/**
Route::GET('admin','AdminController@index')->name('admin.home');

Route::GET('admin/login','Admin\LoginController@showLoginForm')->name('admin.login');

Route::POST('admin','Admin\LoginController@login');
Route::POST('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');

Route::GET('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');

Route::POST('admin-password/email','Admin\ResetPasswordController@reset');

Route::GET('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset'); */










 Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::resource('/batiment','BatimentController');
    Route::resource('/etage','EtageController');
    Route::resource('/chambre','ChambreController');
    Route::resource('/position','PositionController');
    Route::resource('/couloir','CouloirController');
  });





















Route::get('/devis', function () {
    return view('pages.devis');
});
Route::get('/clients', function () {
    return view('pages.clients');
});
Route::get('/creerdevis', function () {
    return view('pages.creerdevis');
});
Route::get('/genererfacture', function () {
    return view('pages.genererfacture');
});
 Route::get('/batiments', function () {
    return view('pages.batiments');
});


Route::get('confirmation/resend', 'Auth\RegisterController@resend');
Route::get('confirmation/{id}/{token}', 'Auth\RegisterController@confirm');