<?php
use Dunfa\Route;

Route::get("/", "StaticController@index");

Route::get("/char", "StaticController@char");   //캐릭터 리스트
Route::get("/charinfo", "InfoController@charInfo");     //캐릭터 & 아이템 정보 출력

Route::post("/char", "SearchController@char");  //캐릭터 & 아이템 검색 결과 출력