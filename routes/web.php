<?php


$this->namespace('Panel')
     ->prefix('panel')
     ->group(function(){
    
    $this->any('brands/search', 'BrandController@search')->name('brands.search');
    $this->any('brands/{id}/planes', 'BrandController@planes')->name('brands.planes');
    $this->resource('brands', 'BrandController');


    $this->any('planes/search', 'PlaneController@search')->name('planes.search');
    $this->resource('planes', 'PlaneController');

    $this->any('states/search', 'StateController@search')->name('states.search');
    $this->get('states', 'StateController@index')->name('states.index');

    $this->any('state/{initials}/cities/search', 'CityController@search')->name('state.cities.search');
    $this->get('state/{initials}/cities', 'CityController@index')->name('state.cities');

    $this->get('/', 'PanelController@index')->name('panel');

});



$this->get('/promocoes', 'Site\SiteController@promotions')->name('promotions');
$this->get('/', 'Site\SiteController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
