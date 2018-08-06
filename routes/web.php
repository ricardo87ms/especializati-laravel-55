<?php

$this->get('panel', 'Panel\PanelController@index');




$this->get('/promocoes', 'Site\SiteController@promotions')->name('promotions');
$this->get('/', 'Site\SiteController@index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
