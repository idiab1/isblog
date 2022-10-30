<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except("index");
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Get all articles
        $articles = Article::with("tags")->orderBy('created_at', 'desc')
            ->take(6)
            ->get();
        // Get all tags from database
        $tags = Tag::with("articles")
            ->orderBy('id', 'asc')
            ->take(5)
            ->get();
        
        // Get all categories from database
        $categories = DB::table('categories')->orderBy('created_at', 'desc')->take(5)->get();
        return view('home', compact("articles", "tags", "categories"));
    }
}
