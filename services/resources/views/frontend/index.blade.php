@extends('frontend.layouts.main')

@section('main-container')
<?php
//  require_once("hdr.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>


        body {
            /* background-image: url({{url('frontend/assets/img/dynamic\ cover\ letter\ \(opt\).jpg')}}); */
             /* Replace with your image path */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 90vh;
            margin: 0;
            font-family: Arial, sans-serif;
            color: #fff;
            /* display: flex; */
            align-items: center;
            justify-content: center;
            text-align: left;
        }
        .content {
            background: rgba(0, 0, 0, 0.5); /* Adds a semi-transparent background */
            padding: 10px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
     {{-- <div class="content">
     <h1>Welcome to Dynamic Letter Creation</h1>
        <p>Create personalized letters dynamically with ease.</p>
    </div> --}}
</body>
</html>
@endsection
