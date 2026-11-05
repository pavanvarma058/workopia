<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/jobs', [JobController::class, 'index'])->name('jobs');
Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');

// Route::get('/test', function() {
//     return response("Hello World", 200);
// });

// Route::get('/not-found', function() {
//     return new Response("Hello World", 404);
// });

// Route::get('/test1', function() {
//     return response()->json(["name" => "Yeswanth"])->cookie('name', 'Yeswanth');
// });

// Route::get('/download', function() {
//     // download the file from the public folder
//     return response()->download(public_path('favicon.ico'));
// });

// Route::get('/read-cookie', function(Request $request) {
//     $cookieValue = $request->cookie('name');
//     return response()->json(['cookie' => $cookieValue]);
// });

// Route::get('/test', function(Request $request){
//     return [
//         'method' => $request->method(),
//         'url' => $request->url(),
//         'path' => $request->path(),
//         'full_url' => $request->fullUrl(),
//         'ip' => $request->ip(),
//         'user_agent' => $request->userAgent(),
//         'headers' => $request->header()
//     ];
// });

// Route::get('/users', function(Request $request){
//     // to get query parameters from the URL also we can use all() and only()
//     return $request->query('name'); 
// });

// Route::post('/submit', function(){
//     return 'Submitted';
// });

// Route::get('/posts/{id}', function(string $id){
//     return "Post ID: $id";
// })->whereNumber('id'); // for alphanumeric use whereAlphaNumeric('id') \
// // and for alphabet use whereAlpha('id')


// Route::get('/posts/{id}/comments/{comment_id}', function(string $id, string $commentId){
//     return "Post ID: $id, Comment ID: $commentId";
// });

// Route::get('/test', function(){
//     $url = route('jobs');
//     return "<a href='$url'>Click here</a>";
// });

// Route::get('/api/users', function(){
//     return [
//         "name" => "Yeswanth",
//         "email" => "yeswanth@gmail.com"
//     ];
// });
