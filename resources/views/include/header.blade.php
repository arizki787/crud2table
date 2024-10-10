<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script src="https://kit.fontawesome.com/a1a7a69a9f.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <style>
        .navbar-light .navbar-nav .nav-link {
            color: rgb(0, 0, 0);
            font-size: 2em;
        }
        .navbar-light .navbar-nav .nav-link:hover {
            color: #000000; /* Optional: Change color on hover */
        }
        .navbar-light .navbar-nav .nav-link i {
            color: rgb(0, 0, 0);
        }
    </style>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#app-navbar-collapse" aria-controls="app-navbar-collapse" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="app-navbar-collapse">
                <ul class="navbar-nav mr-auto justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">
                            <i class="fa fa-home"></i>&nbsp;&nbsp;Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/employee') }}">
                            <i class="fa fa-user"></i>&nbsp;&nbsp;employee
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/division') }}">
                            <i class="fa fa-university"></i>&nbsp;&nbsp;Division
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>