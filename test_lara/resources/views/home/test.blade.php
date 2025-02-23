<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style type="text/css">
    .div_deg{
        padding: 15px;
    }
    label{
        display: inline-block;
        width: 180px;
    }
    </style>
</head>
<body>
    {{-- <a href="{{url('/')}}">laravel</a> --}}
    <center>

        <a class="btn btn-secondary" href="{{url('view_post')}}">View Post</a>

        <h1>Add Post</h1>
        <form action="{{url('add_post')}}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="div_deg">
                <label>Title</label>
                <input type="text" name="title">
            </div>

            <div class="div_deg">
                <label>Description</label>
                <textarea name="description"></textarea>
            </div>
            <div class="div_deg">
                <label>Image</label>
                <input type="file" name="image">
            </div>

            <div class="div_deg">
                <input type="submit" value="Add Post" class="btn btn-primary">
            </div>
        </form>
    </center>

</body>
</html>
