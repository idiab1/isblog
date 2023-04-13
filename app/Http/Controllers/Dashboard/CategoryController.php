<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

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

    public function getCategoriesDatatable()
    {
        $data = Category::select("*")->get();
        return DataTables::of($data)
        ->addIndexColumn()
        ->addColumn('action', function($row) {
            return $btn = '
                <a class="btn btn-edit me-3 btn-sm" data-id="' . $row->id .'" href="' . Route("dashboard.categories.edit", ['category' => $row->id]) .'" 
                    data-bs-toggle="modal" data-bs-target="#categoryUpdate' . $row->id .'">
                    <i class="fas fa-edit"></i>
                </a>
                <a class="btn btn-delete btn-sm" id="deleteBtn" data-id="' . $row->id . '"
                    data-bs-toggle="modal" data-bs-target="#deleteModal">
                    <i class="fas fa-trash"></i>
                </a>
            ';

        })
        ->addColumn('name', function($row) {
            return $row->name;
        })

        ->rawColumns(['action', 'name'])
        ->make(true);

        // dd($data);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {

        // dd($request);
        try
        {
            // Validate on data coming from request
            $data = $request->validated();

            Category::create([
                "name" => $data['name']
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
    // public function destroy($id)
    // {
    //     try{
    //         // Get Setting row by id
    //         $category = Category::find($id);
    //         $category->delete();
    //         return redirect()->back()->with('success', "Your tag was deleted successfully");
            
    //     }catch(\Exception $e){
    //         return redirect()->back()->with('error', $e);
    //     }
    // }

    public function delete(Request $request)
    {
        try{
            if (is_numeric($request->id))
            {
                Category::where('id', $request->id)->delete();
                return redirect()->back()->with('success', "Your tag was deleted successfully");
            }
        }catch(\Exception $e){
            return redirect()->back()->with('error', $e);
        }

        
    }
}
