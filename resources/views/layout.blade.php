<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SHH</title>
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Patua+One|Poiret+One|Raleway:300,400|Nunito" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light" id="hi">
            <a class="navbar-brand" href="#">SINHOCKHENG</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto" id="navar">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="row" id="header">
            @yield('header-content')
        </div>
    </div>
    <div class="row title">
        <div class="col-6">
            <h1 class="text-center">@yield('title')</h1>
        </div>
    </div>
    <div class="container main-content">
        @yield('content')
    </div>
</body>
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>



</body>

</html>
