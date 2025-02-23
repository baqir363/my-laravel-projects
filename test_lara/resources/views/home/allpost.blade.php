<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style type="text/css">
    table{
        border: 1px solid black;
    }
    th{
        padding: 20px;
        text-align: center;
        color: white;
        background-color: blue;
        font-size: 15px;
    }
    td{
        text-align: center;
        font-size: 13px;
        background-color: black;
        color: white;
    }
    </style>
</head>
<body>

    <center>
        <br>
        <a class="btn btn-primary" href="{{url('/home')}}">Add Post</a>
        <h2> All Post</h2>
        <form action="{{url('my_search')}}" method="get">
        <input type="search" name="search">
        <input type="submit" value="Search">
        </form>
        <br>
        <table width="50%">
            <tr>
                <th>Post Title</th>

                <th>Description</th>

                <th>Image</th>

                <th>Action</th>
            </tr>

            @foreach($post as $post)
            <tr>
                <td>{{$post->title}}</td>

                <td>{{$post->description}}</td>

                <td> <img width="150px" src="post/{{$post->image}}" alt=""> </td>

                <td>
                    <a href="{{url('edit_post',$post->id)}}" class="btn btn-primary">Edit</a>
                    <a href="{{url('delete_post',$post->id)}}" class="btn btn-danger">Delete</a>

                </td>
            </tr>
            @endforeach
        </table>
    </center>
</body>
</html>
