<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all categories from database
        $categories = Category::all();
        return view("dashboard.categories.index", compact("categories"));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try
        {
            // Validate on data coming from request
            $this->validate($request, [
                "name" => ["required", "string"]
            ]);

            Category::create([
                "name" => $request->name
            ]);
            
            return redirect()->route("categories.index")->with('success', "Your category was created successfully");
            
        }catch(\Exception $e)
        {
            return redirect()->back()->with('error', $e);
        }

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
        try
        {
            // Get Setting row by id
            $category = Category::find($id);
            $category->update([
                "name" => $request->name,
            ]);
            
            return redirect()->back()->with('success', "Your category was updated successfully");
            
        }catch(\Exception $e)
        {
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
            $category = Category::find($id);
            $category->delete();
            return redirect()->back()->with('success', "Your tag was deleted successfully");
            
        }catch(\Exception $e){
            return redirect()->back()->with('error', $e);
        }

    }
}
