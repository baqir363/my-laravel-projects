<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .required label::after{
            content: " *";
            color: red;
        }
    </style>
  </head>
  <body class="bg-dark">
  <div class="container-fluid bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-sm">
                <a class="navbar-brand" href="#" style="color: white;">Malkani</a>
                <button class="navbar-toggler d-la-none" type="button" data-toggles="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/nav')}}" style="color: white;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/register')}}" style="color: white;">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/customer')}}" style="color: white;">Customer</a>
                    </li>
                </ul>
            </div>
            </nav>
        </div>
    </div>
    <form action="{{$url}}" method="post">
        @csrf
        <div class="container mt-4 card p-3 bg-white">
            <h3 class="text-center text-primary">
                {{$title}}</h3>
            <div class="row">
            <div class="form-group col-md-6 required">
                <label for="">Name:</label>
                @if(isset($customer))
    <input type="text" class="form-control" name="name" value="{{$customer->name}}">
@else
    <input type="text" class="form-control" name="name" value="">
@endif
                {{-- <input type="text" class="form-control" name="name" value="{{$customer->name ?? ''}}"> --}}
                <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </span>

            </div>
            <div class="form-group col-md-6 required">
                <label for="">Email:</label>
                <input type="email" class="form-control" name="email" value="{{$customer->email ?? ''}}">
                <span class="text-danger">
                    @error('email')
                    {{$message}}
                    @enderror
                </span>
            </div>
    </div>
    <div class="row">
            <div class="form-group col-md-6 required">
                <label for="">Password:</label>
                <input type="password" class="form-control" name="password">
                <span class="text-danger">
                    @error('password')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div class="form-group col-md-6 required">
                <label for="">Confirm Password:</label>
                <input type="password" class="form-control" name="password_confirmation">
               <span class="text-danger">
                    @error('password_confirmation')
                    {{$message}}
                    @enderror
                </span>
            </div>
            </div>
            <div class="row">
            <div class="form-group col-md-6">
                <label for="">Country:</label>
                <input type="text" class="form-control" name="country" value="{{$customer->country ?? ''}}">
               <span class="text-danger">
                    @error('country')
                    {{$message}}
                    @enderror
               </span>
            </div>
            <div class="form-group col-md-6">
                <label for="">State:</label>
                <input type="text" class="form-control" name="state" value="{{$customer->state ?? ''}}">
                <span class="text-danger">
                    @error('state')
                    {{$message}}
                    @enderror
               </span>
            </div>
            </div>
            <div class="row">
            <div class="form-group col-12">
                <label for="">Address:</label>
                <textarea name="address" id="" class="form-control">{{$customer->address ?? ''}}</textarea>
                <span class="text-danger">
                    @error('address')
                    {{$message}}
                    @enderror
               </span>
               </div>
            </div>
            <div class="row">
            <div class="form-group col-md-6">
                <label for="" >Gender</label><br>
                <div class="form-check form-check-inline">
                    {{-- @if(isset($customer)) --}}

                <input type="radio" class="form-check-input" name="gender" id="male" value="M"
                {{($customer->gender ?? '') == "M" ? "checked" : ""}}>
                <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="gender" id="female" value="F"
                {{($customer->gender ?? '') == "F" ? "checked" : ""}}>
                <label class="form-check-label" for="female">Female</label>
                </div>
                <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="gender" id="other" value="O"
                {{($customer->gender ?? '') == "O" ? "checked" : ""}} >
                <label class="form-check-label" for="other">Other</label>
                </div>
            </div>

{{-- @else --}}
    {{-- <input type="text" class="form-control" name="name" value=""> --}}
{{-- @endif --}}

            <div class="form-group col-md-6">
                <label for="">Date of birth</label>
                <input type="date" name="dob" class="form-control" value="{{$customer->dob ?? ''}}">
                <span class="text-danger">
                    @error('dob')
                    {{$message}}
                    @enderror
               </span>
            </div>
            </div>
                <button class="btn btn-primary">{{$button}}</button>
        </div>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
