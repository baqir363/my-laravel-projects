@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h5>Courses</h5>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                @foreach ($courses as $course)
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('storage/'.$course->image)}}" alt=".." class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{ $course->title }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">
                                    <i class="fas fa-rupeee-sign"></i>{{ $course->selling_price }} <strike> {{ $course->price}} </strike></h6>
                                <p class="card-text">{{ $course->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
