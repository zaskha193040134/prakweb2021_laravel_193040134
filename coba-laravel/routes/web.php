<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Models\Category;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Zaskha Sasmita R",
        "email" => "zaskha@unpas.ac.id",
        "image" => "jekk.png"
    ]);
});




Route::get('/blog', [PostController::class, 'index']);
Route::get('blog/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [
        'title' =>$category->name,
        'posts' =>$category->posts,
        'category' => $category->name
    ]);
});


// Route::get('/blog', function () {

//     $posts = [
//         [
//             "title" => "Judul Blog Pertama",
//             "slug" => "judul-blog-pertama", 
//             "author" => "Zaskha Sasmita",
//             "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente rerum consequuntur error eos iste, qui expedita ratione quod numquam recusandae culpa itaque laborum. Animi culpa provident sed magni odio blanditiis amet placeat quasi, voluptate, nobis rem rerum, expedita officia delectus voluptatem accusantium quam ipsa quaerat qui exercitationem esse eaque ipsam ea. Amet tempora praesentium, doloremque a voluptatibus quam quidem molestias eaque nobis similique minima placeat alias optio rerum consequuntur repudiandae impedit est eveniet quis voluptates ipsum officia id! Quod, id."
//         ] ,
//         [
//             "title" => "Judul Blog Kedua",
//             "slug" => "judul-blog-kedua",
//             "author" => "Mang Agus",
//             "body" => "Lorem ipsum dolor sit, ametsum dolor sit, amet consectetur adipsum dolor sit, amet consectetur adipsum dolor sit, amet consectetur adipsum dolor sit, amet consectetur adipsum dolor sit, amet consectetur adipsum dolor sit, amet consectetur adip consectetur adipisicing elit. Sapiente rerum consequuntur error eos iste, qui expedita ratione quod numquam recusandae culpa itaque laborum. Animi culpa provident sed magni odio blanditiis amet placeat quasi, voluptate, nobis rem rerum, expedita officia delectus voluptatem accusantium quam ipsa quaerat qui exercitationem esse eaque ipsam ea. Amet tempora praesentium, doloremque a voluptatibus quam quidem molestias eaque nobis similique minima placeat alias optio rerum consequuntur repudiandae impedit est eveniet quis voluptates ipsum officia id! Quod, id."
//         ]
//         ];

        
//     return view('posts', [
//         "title" => "Posts",
//         "posts" => $posts
//     ]);
// });