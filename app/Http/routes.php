<?php

Route::get('/', ['uses' => 'ThemeController@index', 'as' => 'main']);
Route::post('message', ['uses' => 'ThemeController@PostMessage', 'as' => 'message']);
Route::post('newsletter', ['uses' => 'ThemeController@PostNewsletter', 'as' => 'newsletter']);

// image routes
Route::get('images/{filename}', function ($filename)
{
    $path = storage_path() . '/app/' . $filename;

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});
// end image routes


Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('admin/dashboard', ['uses' => 'Admin\DashboardController@index', 'as' => 'dashboard']);
    Route::resource('admin/user', 'Admin\UserController', ['names' => 'user']);
    Route::resource('admin/contact', 'Admin\ContactController', ['names' => 'contact']);
    Route::resource('admin/social', 'Admin\SocialController', ['names' => 'social']);
    Route::resource('admin/paket', 'Admin\PaketController', ['names' => 'paket']);
    Route::resource('admin/client', 'Admin\ClientController', ['names' => 'client']);
    Route::resource('admin/about/skill', 'Admin\SkillController', ['names' => 'skill']);
    Route::resource('admin/about/recrutment', 'Admin\RecrutmentController', ['names' => 'recrutment']);
    Route::get('admin/about/skillset', ['uses' => 'Admin\SkillsetController@index', 'as' => 'admin.skillset.index']);
    Route::resource('admin/about/team', 'Admin\TeamController', ['names' => 'team']);
    Route::resource('admin/portofolio', 'Admin\PortofolioController', ['names' => 'portofolio']);
    Route::resource('admin/service', 'Admin\ServiceController', ['names' => 'service']);
    Route::resource('admin/home', 'Admin\HomeController', ['names' => 'home']);
    Route::resource('admin/words', 'Admin\WordController', ['names' => 'words']);
});
