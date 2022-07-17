<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // Get user by id
        $user = User::find($id);
        return view("profile.show", compact("user"));
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
        // dd($request);
        // Get user by id
        $user = User::find($id);
        $request_date = $request->all();

        if($request->image && $request->image != null){

            // Delete image from uploads folder
            if($user->image && $user->image != 'default.png'){
                Storage::disk('public_uploads')->delete('/users/' . $user->image);
            }

            Image::make($request->image)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/users/' . $request->image->hashName()));

            $request_date["image"] = $request->image->hashName();

            $user->update([
                "image"         => $request->image->hashName(),
                "name" => $request->name,
                "email" => $request->email,
                "password" => Hash::make($request->password),
                "linkedin_url" => $request->linkedin_url,
                "github_url" => $request->github_url,
                "facebook_url" => $request->facebook_url,
                "twitter_url" => $request->twitter_url,
            ]);

            return redirect()->back();

        }else{
            $user->update([
                "name" => $request->name,
                "email" => $request->email,
                "password" => Hash::make($request->password),
                "linkedin_url" => $request->linkedin_url,
                "github_url" => $request->github_url,
                "facebook_url" => $request->facebook_url,
                "twitter_url" => $request->twitter_url,
            ]);

            return redirect()->back();
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
        //
    }
}
