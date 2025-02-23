<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
       *{
            padding: 10px;
            margin: auto;
        }
        .btn{
            background-color: rgb(75, 75, 192);
            color: #fff;
        }
        .btndanger{
            background-color: rgb(197, 67, 67);
            color: #fff;
        }
    </style>
</head>
<body>
    <center>
        <a href="{{url('/home')}}" class="btn">Add Post</a>
        <h2>View Post</h2>
        <table border="1" cellspacing="0">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            @foreach($data as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>
                <td><img width="180px" src="post/{{$post->image}}"> </td>
                <td><a href="{{url('/edit_post',$post->id)}}" class="btn">Edit</a>
                <a href="{{url('/delete_post',$post->id)}}" class="btndanger">Delete</a></td>
            </tr>
            @endforeach
        </table>
    </center>
</body>
</html>
