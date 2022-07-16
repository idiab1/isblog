<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all articles from database
        $articles = Article::all();
        return view("dashboard.articles.index", compact("articles"));
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
        // dd($request->image);
        // Validate on all data coming from request
        $this->validate($request, [
            "name" => ["required", "string"],
            "full_text" => ["required"],
            "category_id" => ["required"],
            "image" => ["image"]
        ]);

        $request_date = $request->all();

        if($request->image){
            Image::make($request->image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/articles/' . $request->image->hashName()));
            // save(public_path('uploads/articles/' . $request->image->hashName()));
            // save("uploads/articles/" . $request->image->hashName());

            $request_date["image"] = $request->image->hashName();
            // Save
            $article = Article::create([
                "name"          => $request->name,
                "full_text"     => $request->full_text,
                "category_id"   => $request->category_id,
                "user_id"       => Auth::user()->id,
                "image"         => $request->image->hashName(),
            ]);

            $article->tags()->attach($request->tags);
            return redirect()->route("articles.index");

        }else{
            // Save
            $article = Article::create([
                "name"          => $request->name,
                "full_text"     => $request->full_text,
                "category_id"   => $request->category_id,
                "user_id"       => Auth::user()->id,
            ]);

            $article->tags()->attach($request->tags);
            return redirect()->route("articles.index");

        }

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
        // Get Article by id
        $article = Article::find($id);
        return view("dashboard.articles.edit", compact("article"));
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
        // dd($request->all());

        // Get Article by id
        $article = Article::find($id);

        $request_date = $request->all();

        if($request->has("image")){
            if($article->image){
                Storage::disk("public_uploads")->delete('/articles/' . $article->image);
            }

            Image::make($request->image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/articles/' . $request->image->hashName()));
            // save("uploads/articles/" . $request->image->hashName());
            // save(public_path('uploads/articles/' . $request->image->hashName()));

            $request_date["image"] = $request->image->hashName();

            $article->update([
                "name"          => $request->name,
                "full_text"     => $request->full_text,
                "category_id"   => $request->category_id,
                "user_id"       => Auth::user()->id,
                "image"         => $request->image->hashName(),
            ]);

            $article->tags()->sync($request->tags);
            return redirect()->route("articles.index");

        }else{
            $article->update([
                "name"          => $request->name,
                "full_text"     => $request->full_text,
                "user_id"       => Auth::user()->id,
                "category_id"   => $request->category_id,
            ]);

            $article->tags()->sync($request->tags);
            return redirect()->route("articles.index");
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Get article by id
        $article = Article::find($id);
        if($article->image){
            Storage::disk("public_uploads")->delete('/articles/' . $article->image);
        }
        $article->delete();
        return redirect()->back();
    }
}
