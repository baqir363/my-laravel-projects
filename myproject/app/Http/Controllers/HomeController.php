<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('home.add_post');
    }

    public function add_post(Request $request)
    {
        // $validated = $request->validate([
        //     "title" => "required|max:40",
        //     "description" => "required",
        //     "image" => "required|image",
        // ]);
        // $validated['image'] = $request->file('image')->store('recipes','public');
        // Post::create($validated);


        $data = new Post;

        $data->title = $request->title;

        $data->description = $request->description;

        $image = $request->image;
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('post',$imagename);
            $data->image = $imagename;
        }

        $data->save();
        return redirect()->back();
    }

    public function view_post(Request $request){
        $data = Post::all();
        return view('home.view_post',compact('data'));
    }

    public function edit_post($id)
    {
        $data = Post::find($id);
        return view('home.edit_post',compact('data'));
    }

    public function update_post(Request $request,$id)
    {
        // $validated = $request->validate([
        //     "title" => "required|max:40",
        //     "description" => "required",
        // ]);
        // if($request->file('image')){
        //     $request->validate([
        //         "image" => "image",
        //     ]);
        //     $validated['image'] = $request->file('image')->store('recipes','public');
        // }
        // $recipe->update($validated);


        $post = Post::find($id);

        $post->title = $request->title;

        $post->description = $request->description;

        $image = $request->image;

        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('post',$imagename);
            $post->image = $imagename;
        }

        $post->save();

        return redirect('view_post');
    }

    public function delete_post($id)
    {
        $data = Post::find($id);

        $data->delete();

        return redirect()->back();
    }


}
