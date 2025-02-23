<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComposeController extends Controller
{
    public function index()
   {
    return view('frontend.composeletter');
   }

   public function upload(Request $request)
   {
    $fileName = time(). "mb". $request->file('image')->getClientOriginalExtension();
  echo $request->file('image')->storeAs('uploads', $fileName);
   }
}
