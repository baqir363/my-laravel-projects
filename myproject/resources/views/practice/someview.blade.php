<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .btn{
            color: #fff;
            padding: 5px;
            background-color: rgb(41, 152, 196);
            margin: 1px;
            text-decoration: none;
        }
        .btnd{
            color: #fff;
            padding: 5px;
            background-color: rgb(184, 52, 52);
            margin: 1px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <center>
        <a href="{{url('/some_view')}}">Add Some Data</a>
        <h2>View Some Data</h2>
        <table border="1" cellspacing="0" width="50%">
            <tr>
                <th>Name</th>
                <th>Some Data</th>
                <th>Image</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
            @foreach ($some as $data)
            <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->somedata}}</td>
                <td><img width="180px" src="/some/{{$data->image}}" alt=""></td>
                <td>{{$data->gender}}</td>
                <td><a class="btn" href="{{url('/edit_some',$data->id)}}">Edit</a><a class="btnd" href="{{url('/delete_some',$data->id)}}">Delete</a></td>

            </tr>
            @endforeach
        </table>
    </center>
</body>
</html>
