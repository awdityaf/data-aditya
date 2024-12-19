<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
  <script src="js/jquery.js"></script>
  <script src="bootstrap4/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="js/jquery.dataTables.min.css"> -->
</head>
<style>
  .navbar-custom {
    background-color: #0d6efd;
  }

  .navbar-custom .navbar-brand,
  .navbar-custom .nav-link,
  .navbar-custom .navbar-toggler-icon,
  .navbar-custom .form-control,
  .navbar-custom .btn-outline-success {
    color: white;
  }

  .navbar-custom .nav-link.active {
    color: #d4d4d4;
  }

  .navbar-custom .btn-outline-success {
    border-color: white;
  }

  .navbar-custom .btn-outline-success:hover {
    background-color: white;
    color: black;
  }
</style>

<body>
  <!-- <nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="dasboard">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kategori">Kategori</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pembayaran">Pembayaran</a>
          </li>
          <li class="nav-item">
            <form action="/Logout" method="post">
              @csrf
              <button>logout</button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav> -->
  <header class="app-header"><a class="app-header__logo" href="index.php">GYM MS</a>
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
      <!-- User Menu-->
      <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu">Welcome : Dashboard <i class="fa fa-user fa-lg"></i></a>
        <ul class="dropdown-menu settings-menu dropdown-menu-right">
          <li><a class="dropdown-item" href="change-password"><i class="fa fa-cog fa-lg"></i> Change Password</a></li>
          <li><a class="dropdown-item" href="profile.php"><i class="fa fa-user fa-lg"></i> Profile</a></li>
          <li>
            <form action="logout.php" method="post">
              <button class="dropdown-item"> <i class="fa fa-sign-out fa-lg">Logout</i>
              </button>
              @csrf
            </form>
          </li>
        </ul>
      </li>
    </ul>
  </header>
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">

    <ul class="app-menu">
      <li><a class="app-menu__item" href="dashboard"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
      <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Kategori</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="dasboarduser"><i class="icon fa fa-circle-o"></i>Lihat Kategory</a></li>
        </ul>
      </li>
    </ul>
  </aside>
  <main class="app-content">
        @yield('admin')
  </main>

</body>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/plugins/pace.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
  $('#sampleTable').DataTable();
</script>

</html>