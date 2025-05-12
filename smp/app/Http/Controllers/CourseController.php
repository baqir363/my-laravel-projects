<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;


class CourseController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if(Auth::user()->role!='admin'){
            abort(401);
        }
        //$courses = Course::latest()->get();
        $seconds = 60;
        $courses = Cache::remember('latestRecipe', $seconds, function () {
            return Course::latest()->limit(4)->get();
        });
        return view('course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            "title" => "required",
            "description" => "required",
            "image" => "required|image",
            "price" => "required|numeric",
            "selling_price" => "required|numeric",
            "duration" => "numeric|nullable",
        ]);
        $validated['image'] = $request->image->store('images','public');
        $validated['user_id'] = Auth::user()->id;
        $course = Course::create($validated);
        return redirect(route('course.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
        Storage::delete($course->image);
        $course->delete();
        return redirect(route('course.index'))->with('status','Course Deleted');
    }
}
