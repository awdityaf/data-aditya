<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
  <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="js/jquery.js"></script>
  <script src="bootstrap4/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="js/jquery.dataTables.min.css">
</head>
<style>
 
 body {
    background-color: black; /* Latar belakang hitam */
    color: #ffffff; /* Teks putih */
}
.navbar{
  position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
}
  .navbar-custom {
    background-color: #343a40;
}

.navbar-custom .nav-link {
    color: #ffffff !important;
    font-weight: bold;
    position: relative;
    text-decoration: none;
    transition: color 0.3s ease;
}

/* Hover effect for nav links */
.navbar-custom .nav-link:hover {
    color: #ffc107 !important;
}

/* Animated underline effect */
.navbar-custom .nav-link::after {
    content: '';
    display: block;
    width: 0;
    height: 2px;
    background: #ffc107;
    transition: width 0.3s ease;
    position: absolute;
    bottom: 0;
    left: 0;
}

.navbar-custom .nav-link:hover::after {
    width: 100%;
}
</style>

<body>
<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
        

        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/membership">Membership</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/servis">Servis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tentangkami">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/riview">Riview</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    @if(auth()->guest())
                        <a class="nav-link" href="/login">Login</a>
                    @else
                        <form action="/logout" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-link nav-link" style="border: none; padding: 0; cursor: pointer;">
                                <i class="fa fa-sign-out fa-lg"></i> Logout
                            </button>
                        </form>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>


  <div class="container">
    @yield(section: 'user')
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>