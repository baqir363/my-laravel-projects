<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>

        <h3>Edit Post</h3>
        <form action="{{url('update_post',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="title" value="{{$data->title}}"><br>
            <textarea name="description">{{$data->description}}</textarea><br>
            <label>Old Image</label> <img width="180px" src="/post/{{$data->image}}" alt=""><br>
            <input type="file" name="image"><br>
            <input type="submit" value="Update Post">
        </form>
        <br>
        <a href="{{url('/view_post')}}">Back</a>
    </center>
</body>
</html>
