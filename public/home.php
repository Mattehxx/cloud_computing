<?php
  session_start();

  require_once ('../functions/islogged.php');
  require_once ('../functions/redirect.php');

  if(!islogged()) redirect('login.html');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>

    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
          <div class="container-fluid">
            <button
              class="navbar-toggler"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#navbarExample01"
              aria-controls="navbarExample01"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarExample01">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- Navbar -->
      
        <!-- Background image -->
        <div
          class="p-5 text-center bg-image"
          style="
            background-image: url('../img/pexels-scott-webb-1022928.jpg');
            height: 500px;
            margin-top: 58px;
          "
        >
          <div class="mask rounded-3" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white">
                <h1 class="mb-3">Cloud Computing</h1>
                <h4 class="mb-3">A Matteo Rovellini Project</h4>
              </div>
            </div>
          </div>
        </div>
        <!-- Background image -->
      </header>

      <hr class="hr hr-blurry"/>

      <main>
        <div class="row justify-content-around">
            <div class="col-4">
                <div class="card text-center" style="max-width: 700px;">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="../img/rendered-min-768x576-min-1.jpg" class="img-fluid rounded-1"/>
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">AWS</h5>
                        <p class="card-text">Descrizione degli AWS</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card text-center" style="max-width: 700px;">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="../img/rendered-min-768x576-min-1.jpg" class="img-fluid rounded-1"/>
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">AWS</h5>
                        <p class="card-text">Descrizione degli AWS</p>
                    </div>
                </div>
            </div>
          </div>
      </main>

      <hr class="hr hr-blurry"/>

      <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          ©
          <a class="text-dark" href="https://github.com/Mattehxx" target="_blank">Matteo Rovellini</a>
        </div>
        <!-- Copyright -->
      </footer>

      <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>