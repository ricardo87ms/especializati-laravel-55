<?php


$this->namespace('Panel')
     ->prefix('panel')
     ->group(function(){
    
    $this->any('brands/search', 'BrandController@search')->name('brands.search');
    $this->any('brands/{id}/planes', 'BrandController@planes')->name('brands.planes');
    $this->resource('brands', 'BrandController');


    $this->any('planes/search', 'PlaneController@search')->name('planes.search');
    $this->resource('planes', 'PlaneController');


    $this->get('/', 'PanelController@index')->name('panel');

});



$this->get('/promocoes', 'Site\SiteController@promotions')->name('promotions');
$this->get('/', 'Site\SiteController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
