@extends('layouts.admin')

@section('content')
    <a href="{{ route('course.create') }}" class="btn btn-sm btn-primary float-end">Add Course</a>
    <h1>Courses</h1>
    @if (session('status'))
    <div class="alert alert-danger">
        {{ session('status') }}
    </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Price</th>
            <th>Duration</th>
            <th>Created At</th>
            <th>Action</th>
        </tr>
        @forelse ($courses as $course)
            <tr>
                <td> {{ $course->title }} </td>
                <td> {{ $course->selling_price }} <strike> {{ $course->price}} </strike></td>
                <td> {{ $course->duration }} </td>
                <td> {{ $course->created_at }} </td>
                <td>
                    <a onclick="document.getElementById('delete{{ $course->id }}').submit()" class="text-danger">Delete</a>
                    <form method="POST" id="delete{{ $course->id }}" action="{{ route('course.destroy',['course'=>$course->id])}}">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
        @empty
            <div class="alert alert-danger">No records found</div>
        @endforelse
    </table>

@endsection
