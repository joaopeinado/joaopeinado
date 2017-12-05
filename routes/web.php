<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", function() {
  return Redirect::route("about");
});
 
Route::get("/about", ["as" => "about", function() {
  return View("about");
}]);

Route::get("/projects", ["as" => "projects", function() {
  return View("projects");
}]);
 
Route::get("/contact/{linkedin?}", ["as" => "contact", function($linkedin = null) {
  return View("contact")->with('text', $linkedin);
}]);

//Query Builder

Route::get('query', function(){

	// Consulting

	echo nl2br ("Tabela dos Remetentes e dos Recados\n\n");

	$recados = DB::table('recados')->get();
	$remetentes = DB::table('remetentes')->get();
	
	dd($remetentes, $recados);
	
});


