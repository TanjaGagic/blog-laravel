<?php

use App\Http\Controllers\Auth\Request;
use Illuminate\Support\Facades\Route;

Route::get('blog', function() {
    return Blog::all();
});
 
Route::get('blog/{id}', function($id) {
    return Blog::find($id);
});

Route::post('blog', function(Request $request) {
    return Blog::create($request->all);
});

Route::put('blog/{id}', function(Request $request, $id) {
    $blog = Blog::findOrFail($id);
    $blog->update($request->all());

    return $blog;
});

Route::delete('blog/{id}', function($id) {
    Blog::find($id)->delete();

    return 204;
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
