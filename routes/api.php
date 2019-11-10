<?php

use Illuminate\Http\Request;
use App\Article;

Route::get('articles', 'ArticleController@index');
Route::get('articles/{article}', 'ArticleController@show');
Route::post('articles', 'ArticleController@store');
Route::put('articles/{article}', 'ArticleController@update');
Route::delete('articles/{article}', 'ArticleController@delete');

Route::delete('articles/{id}', function($id) {
    Article::find($id)->delete();
    return 204;
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
