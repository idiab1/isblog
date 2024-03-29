<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\TagRequest;
use App\Models\Tag;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all Tags
        $tags = Tag::all();
        return view("dashboard.tags.index", compact("tags"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request)
    {
        // Validate on data coming from request
        $data = $request->validated();

        try
        {
            Tag::create([
                "name" => $data['name']
            ]);
  
            return redirect()->back()->with('success', "Your tag was published successfully");
        }catch(\Exception $e)
        {
            return redirect()->back()->with('error', $e);
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
        // Get data of tag from database
        $tag = Tag::find($id);
        // Get all categories from database
        $categories = DB::table('categories')->orderBy('created_at', 'desc')->take(5)->get();
        // Get all tags from database
        $tags = Tag::with("articles")
            ->orderBy('id', 'asc')
            ->take(5)
            ->get();
        return view("dashboard.tags.show", compact("tag", "categories", "tags"));
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
        try{
            // Get Setting row by id
            $tag = Tag::find($id);
            $tag->update([
                "name" => $request->name,
            ]);
    
            return redirect()->back()->with('success', "Your tag was updated successfully");
            
        }catch(\Exception $e){
            return redirect()->back()->with('error', $e);
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
        try{
            // Get Setting row by id
            $tag = Tag::find($id);
            $tag->delete();
            return redirect()->back()->with('success', "Your tag was deleted successfully");
        }catch(\Exception $e){
            return redirect()->back()->with('error', $e);
        }
    }
}
