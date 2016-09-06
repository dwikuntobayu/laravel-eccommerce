
//article Resources
/********************* article ***********************************************/
Route::resource('article','\App\Http\Controllers\ArticleController');
Route::post('article/{id}/update','\App\Http\Controllers\ArticleController@update');
Route::get('article/{id}/delete','\App\Http\Controllers\ArticleController@destroy');
Route::get('article/{id}/deleteMsg','\App\Http\Controllers\ArticleController@DeleteMsg');
/********************* article ***********************************************/

