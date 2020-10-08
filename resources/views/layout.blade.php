<DOCTYPE html>
<html>
    <head>
        <title>ABUNDANCE</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
    </head>

    <body>
        <!-- <h2>Having Faith is Everything!</h2> -->
        <!-- NAVBAR -->
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light"> -->
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
            <a class="navbar-brand" href="/oceans">OCEAN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/oceans">Relax</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Chill List
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/chill">Action</a>
                    <a class="dropdown-item" href="/chill">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/chill">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register" tabindex="-1" aria-disabled="true">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login" tabindex="-1" aria-disabled="true">Login</a>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            </nav>
        <div class="containery" style="padding-left:5%; padding-right:5%">
            @yield('content') 
        </div>
        <br>
    </body>

    <footer>
        <h5>Copyright @Chill-Ocean</h5>
    </footer>
</html>
