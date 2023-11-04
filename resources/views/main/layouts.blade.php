<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Customer Login Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #91c7ed;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav">
                    @guest

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"><button style="background-color: rgb(10, 175, 10); border-radius:5px;color:white; border:none;">Login</button></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('registration') }}"><button style="background-color: rgb(10, 175, 10); border-radius:5px; color:white; border:none;">Register</button></a>
                    </li>

                    @else

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>

                    @endguest
                </ul>

            </div>
        </div>
    </nav>
    <div class="container mt-5">

        @yield('content')

    </div>

</body>
</html>
