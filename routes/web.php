<?php

$this->get('panel', 'Panel\PanelController@index');




$this->get('/promocoes', 'Site\SiteController@promotions')->name('promotions');
$this->get('/', 'Site\SiteController@index');

// Route::get('/', function () {
//     return view('welcome');
// });
