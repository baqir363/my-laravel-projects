<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

use App\Models\User;

use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;
use Psy\CodeCleaner\ReturnTypePass;

class HomeController extends Controller
{
    //

    public function page()
    {
        return view('admin.adminpage');
    }

    public function home()
    {
        if(Auth::user()->usertype == 'user')
        {
            return view('dashboard');
        }else{
            return view('admin.dashboard');
        }
    }


    public function admin()
    {
        return view('admin.dashboard');
    }

    public function index()
    {
        return view('home.test');
    }

    public function add_post(Request $request)
    {
        $data = new Post;

        $data->title = $request->title;

        $data->description = $request->description;

        $image = $request->image;

        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('post',$imagename);

            $data->image = $imagename;
        }

        $data->save();

        return redirect()->back();
    }

    public function view_post()
    {
        $post = Post::all();

        return view('home.allpost',compact('post'));
    }

    public function edit_post($id){
        $data = Post::find($id);
        return view('home.update_post',compact('data'));
    }

    public function update_post(Request $request,$id)
    {
        $post = Post::find($id);

        $post->title = $request->title;

        $post->description = $request->description;

        $image = $request->image;

        if($image)
        {
            $imagename = time().'.'. $image->getClientOriginalExtension();

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

    public function my_search(Request $request)
    {
        $search = $request->search;

        $post = Post::Where('title','LIKE','%'.$search.'%')->orWhere('description','LIKE','%'.$search.'%')->get();

        return view('home.allpost',compact('post'));
    }
}
