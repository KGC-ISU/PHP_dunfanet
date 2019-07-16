<?php
use Dunfa\Route;

Route::get("/", "StaticController@index");
Route::get("/char", "StaticController@char");

Route::post("/char", "SearchController@char");  //검색 메소드