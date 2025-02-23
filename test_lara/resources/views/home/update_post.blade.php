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

    <center>
        <h1>Update Post</h1>
        <form action="{{url('update_post',$data->id)}}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="div_deg">
                <label>Title</label>
                <input type="text" name="title" value="{{$data->title}}">
            </div>

            <div class="div_deg">
                <label>Description</label>
                <textarea name="description">{{$data->description}}</textarea>
            </div>

            <div class="div_deg">
                <label>Old Image</label>
                <img width="150px" src="/post/{{$data->image}}" alt="">
            </div>
            <div class="div_deg">
                <label>Change Image</label>
                <input type="file" name="image">
            </div>

            <div class="div_deg">
                <input type="submit" value="Update Post" class="btn btn-secondary">
                <a class="btn btn-secondary" href="{{url('view_post')}}">Back</a>
            </div>

        </form>



    </center>
</body>
</html>
