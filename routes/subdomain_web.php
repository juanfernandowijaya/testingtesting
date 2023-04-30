<? 

use Illuminate\Support\Facades\Route;
// subdomain routes

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('welcome');
});