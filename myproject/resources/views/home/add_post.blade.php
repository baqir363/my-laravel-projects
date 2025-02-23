<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <style>
        *{
            padding: 10px;
            margin: auto;
        }
        .container{
            width: 300px;
        }
        .btn{
            background-color: rgb(75, 75, 192);
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <center>
            <a href="{{url('view_post')}}" class="btn">View Post</a>
            <h1>Add Post</h1>
            <form action="{{url('add_post')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" name="title" placeholder="Title">
                <textarea name="description" placeholder="Description"></textarea>
                <input type="file" name="image">
                <input type="submit" value="Add Post" class="btn">
            </form>
        </center>
    </div>
</body>
</html>
