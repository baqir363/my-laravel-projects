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
    </style>
</head>
<body>
    <center>
        <a href="{{url('/someadd_view')}}">View Some Data</a>
        <h1>Some Data</h1>
    <form action="{{url('/some_add')}}" method="POST" enctype="multipart/form-data">
        @csrf
    <input type="text" name="name"><br><br>
    <select name="somedata">
        <option value="">Select some data</option>
        <option value="First Data">First Data</option>
        <option value="Second Data">Second Data</option>
        <option value="Third Data">Third Data</option>
    </select><br>
    <input type="file" name="image"><br>
    <label> Gender</label>
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female<br>
    <input type="submit" value="Add">
    </form>
    </center>
</body>
</html>
