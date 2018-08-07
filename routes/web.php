<?php


$this->namespace('Panel')
     ->prefix('panel')
     ->group(function(){
    
    $this->resource('brands', 'BrandController');
    $this->get('/', 'PanelController@index')->name('panel');

});



$this->get('/promocoes', 'Site\SiteController@promotions')->name('promotions');
$this->get('/', 'Site\SiteController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
