<?php

namespace App\Http\Controllers;

use App\Models\SomeAdd;
use Illuminate\Http\Request;

class SomeAddController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
            return view('practice.some');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $some = new SomeAdd;

        $some->name = $request->name;
        $some->somedata = $request->somedata;

        $image = $request->image;
        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('some',$imagename);
            $some->image = $imagename;
        }

        $some->gender = $request->gender;
        $some->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(SomeAdd $someAdd)
    {
        //
        $some = SomeAdd::all();
        return view('practice.someview',compact('some'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $some = SomeAdd::find($id);
        $options = ['First Data', 'Second Data','Third Data'];
        return view('practice.someupdate',compact('some','options'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $some = SomeAdd::find($id);

        $some->name = $request->name;
        $some->somedata = $request->somedata;

        $image = $request->image;
        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('some',$imagename);
            $some->image = $imagename;
        }

        $some->gender = $request->gender;
        $some->save();
        return redirect('/someview');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $some = SomeAdd::find($id);
        $some->delete();
        return redirect()->back();
    }
}
