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
        <h1>Update Some Data</h1>
    <form action="{{url('/update_some',$some->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
    <input type="text" name="name" value="{{$some->name}}"><br><br>

    <select name="somedata" class="form-control">
        <option value="">Select some data</option>
        @foreach($options as $option)
            <option value="{{ $option }}" {{ $some->somedata == $option ? 'selected' : '' }}>
                {{ $option }}
            </option>
        @endforeach
    </select>
    <br>
    <label>Old Image</label>
    <img width="180px" src="/some/{{$some->image}}" alt=""><br>
    <input type="file" name="image"><br>
    <label> Gender</label>

    <input type="radio" name="gender" value="Male" <?php
    if($some->gender == 'Male'){
      echo "checked";
    }
  ?>> Male
    <input type="radio" name="gender" value="Female" <?php
    if($some->gender == 'Female'){
      echo "checked";
    }
  ?>> Female<br>
    <input type="submit" value="Add">
    </form>
    </center>
</body>
</html>
