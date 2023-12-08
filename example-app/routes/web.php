<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// handle router name that finish with "/test"
Route::get('/test', function(){
    echo 'Hello World';
});

Route :: get ('about', function(){
    return "I am about page!";
});

// variable, passing parameters
// Route :: get ('/post/{id}/{name}', function($id, $name){
//     return "this is post number " . $id . "with name " . $name;
// });


// puting an array in the second parameter that wrapping everything
Route :: get('admin/posts/example', array('as'=>'admin.home',function(){
    $url = route('admin.home');
    return "This url is " . $url ; // php using "." to do string connection
    // at this time, the admin.home is the same thing as "admin/posits/examples"
}));

//php artisan route:list


// Route::get('/post/{id}', [PostsController::class, 'index']);

// Route::resource('/post', 'PostsController');

// Route :: post('/post/${id}', [PostsController::class, 'show']);

Route :: get('/contact', [PostsController :: class, 'contact']);

Route :: get('/post/{name_of_var}', [PostsController::class, 'show_post']);
// need to make sure that the route is unique

Route::get('/multiple_parameter/{id}/{name}/{password}', [PostsController::class, 'multiple_parameter']);
