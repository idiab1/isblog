<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get count of articles
        $articlesCount = Article::count();
        // Get count of admins
        $adminsCount = User::where("is_admin", 1)->count();
        // Get count of Users
        $usersCount = User::count();
        // Get count of Tags
        $tagsCount = Tag::count();
        // Get all categories from database
        $categories = DB::table('categories')->orderBy('created_at', 'desc')->take(5)->get();
        // Get all tags from database
        $tags = Tag::with("articles")
            ->orderBy('id', 'asc')
            ->take(5)
            ->get();
        // Get last Five records from articles table then send to home dashboard
        $articles = Article::with("tags")
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
        return view("dashboard.home", compact(
            "articlesCount", "adminsCount", "usersCount", "tagsCount",
            "articles", "categories", "tags"

        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
