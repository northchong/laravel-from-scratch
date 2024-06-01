<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    public function index() {
        // $posts = Post::latest();

        return view('posts.index', [
            'posts' => Post::latest()->filter(
                request(['search', 'category', 'author']))
                ->paginate(6)->withQueryString(),
            'currentCategory' => Category::firstWhere('slug', request('category'))
        ]);
    }

    public function show(Post $post) {

        return view('posts.show', [
            'post' => $post,
            'categories' => Category::all(),
        ]);
    }

    public function create() {
        return view('posts.create');
    }
}
