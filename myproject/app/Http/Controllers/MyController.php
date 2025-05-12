<?php

namespace App\Http\Controllers;

use App\Models\Ajax;
use App\Models\Post;
use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function ajax()
    {
        return view('ajax.ajaxinsert');
    }

    public function insert(Request $request)
    {
        $data = new Ajax;

        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();
        return response()->json(['success' => true, 'message'=>'Data inserted successfully']);
    }

    public function upload()
    {
        return view('ajax.uploadfile');
    }

    public function ajaxupload(Request $request)
    {
        $data = new Post;
        $data->title = $request->title;

        $image = $request->image;
        $iamgename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('filefolder',$iamgename);

        $data->image = $iamgename;
        $data->save();

        return response()->json(['success' => true, 'message'=>'Data inserted successfully']);
    }

    public function delete()
    {
        $posts = Post::all();
        return view('ajax.deletedata',compact('posts'));
    }

    public function delete_post($id)
    {
        $data = Post::find($id);
        $data->delete();


        return response()->json(['success' => true, 'message'=>'Data Deleted successfully','tr'=>'tr_'.$id]);
    }
}
