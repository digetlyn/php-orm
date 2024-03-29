<?php

use App\Http\Controllers\ArrayController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StringController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });           
Route::get('/', [ProductController::class,'index'])->name('products.index');

Route::get('/home/{name?}',[HomeController::class,'index'])->name('home.index');


// Route::get('/user', function(){
//     $name = '안녕하세요';
//     $age = 13;
//     return view('user', compact('name', 'age'));  //['name' => $name, 'age'=> $age]
// });

Route::get('/user', [UserController::class,'index']);

Route::get('/test1', function(){
    return view('test1',['name' => '<script>alert("1");</script>']);
});


// Route::get('/posts',[ClientController::class,'getAllPost'])->name('posts.getallpost');
// Route::get('/posts/{id}',[ClientController::class,'getPostById'])->name('posts.getpostbyid');

Route::get('/add-post',[ClientController::class,'addPost'])->name('posts.addpost');

Route::get('/update-post',[ClientController::class,'updatePost'])->name('posts.update');

Route::get('/delete-post/{id}',[ClientController::class,'deletePost'])->name('posts.delete');

Route::get('/string',[StringController::class,'index'])-> name('string.index');


//Route::get('/array',[ArrayController::class,'index'])-> name('array.index');
Route::get('/array',[ArrayController::class,'index'])->name('array.index');


Route::get('/login',[LoginController::class,'index']);   //보여주는 부분

Route::post('/login',[LoginController::class,'loginSubmit'])->name('login.submit');   //포스트로 액션...

Route::get('/session/get',[SessionController::class,'getSessionData'])->name('session.get');
Route::get('/session/store',[SessionController::class,'storeSessionData'])->name('session.store');
Route::get('/session/delete',[SessionController::class,'deleteSessionData'])->name('session.delete');

Route::get('/posts',[PostController::class,'getAllPost'])->name('post.getallpost');  //게시판 목록

Route::get('/add-post',[PostController::class,'addPost'])->name('post.add');  //동록 폼 글쓰기
Route::post('/add-submit',[PostController::class,'addPostSubmit'])->name('post.addsubmit');   //등록 처리


Route::get('/posts/{id}',[PostController::class,'getPostById'])->name('post.getbyid');

Route::get('/edit-post/{id}',[PostController::class,'editPost'])->name('post.edit');  //수정 from 되는 부분


Route::post('/update-post',[PostController::class,'updatePost'])->name('post.update');  //수정처리 하는 부분

Route::get('/delete-post/{id}',[PostController::class,'deletePost'])->name('post.delete');  // 삭제처리하는 부분

Route::get('/inner-join',[PostController::class,'innerJoinClause'])->name('post.innerjoin'); //join처리하는 부분

Route::get('/all-posts',[PostController::class,'gotAllPostUsingModel']);


/*
2. Route 정의

/  -> name : list                                       -> 등록된 차량 리스트 페이지

/create -> name : create                         -> 차량 등록 페이지

/show/{id} -> name : show                     -> 차량별 예약 정보 확인 페이지

/reservation -> name : reservation         -> 차량 예약 페이지

이 네 페이지를 route name으로 왔다갔다할 수 있게 정의
*/