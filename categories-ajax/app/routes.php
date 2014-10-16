<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	$categories=Category::all();

	return View::make('Home.index')->with('categories',$categories);
});

Route::get('/ajax-subcat', function()
{
	$cat_id=Input::get('cat_id');

	$subcategories=Subcategory::where('category_id','=',$cat_id)->get();
	return Response::json($subcategories);
	View::make('Home.index')->with('categories',$categories);
});
