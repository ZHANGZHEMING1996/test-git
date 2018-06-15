<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------dddddasfj
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
d d dsa  s 
hello world 8.09