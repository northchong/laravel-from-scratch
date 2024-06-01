<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;
use MailchimpMarketing\ApiClient;
use Illuminate\Support\Facades\Log;

Route::get('ping', function() {
    $mailchimp = new MailchimpMarketing\Configuration();

    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => config('services.mailchimp.server')
    ]);

    $response = $mailchimp->ping->get();
    print_r($response);
});

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('sessions', [SessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);



Route::get('admin/posts/create', [PostController::class, 'create'])->middleware('admin');


// peaks tähtis olema, lubab klikkida category peale ja näha kõiki poste sellega
// ei tea, miks ta välja võttis selle, ma jätan

// kui see uncommentida ning category peale klikata tuleb error, ei oska fixida - "Method Illuminate\Database\Eloquent\Collection::links does not exist."

// Route::get('categories/{category:slug}', function (Category $category) {

//     return view('posts.index', [
//         'posts' => $category->posts,
//         'currentCategory' => $category,
//         'categories' => Category::all(),
//     ]);
// })->name('category');

