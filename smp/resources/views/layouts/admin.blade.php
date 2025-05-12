<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="bg-light border-bottom">
        <div class="container-fluid py-2">
            Admin
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 border-end">
                <ul class="nav flex-column">
                    <li class="nav-item">
                    <a class="nav-link" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('course.index')}}">Courses</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.index')}}">Users</a>
                    </li>
                </ul>
            </div>
            <div class="col py-2">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
