@extends('layouts.admin')

@section('content')
    <a href="{{ route('course.index') }}" class="btn btn-sm btn-primary float-end">Back</a>
    <h1>Add Courses</h1>

    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" value="{{ old('title') }}">
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image">
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" name="price" value="{{ old('price') }}">
                    @error('price')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="selling_price">Selling Price</label>
                    <input type="text" class="form-control" name="selling_price" value="{{ old('selling_price') }}">
                    @error('selling_price')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="duration">Duration</label>
                    <input type="text" class="form-control" name="duration" value="{{ old('duration') }}">
                    @error('duration')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <input type="submit" value="Add" class="btn btn-primary btn-sm">
            </form>
        </div>
    </div>
@endsection
