<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="libraries/bootstrap-5/bootstrap.min.css">
    <link rel="stylesheet" href="src/css/styles.css">
    <title>Tuatara</title>
</head>
<body>
    <div class="bg-img main-img">
        <header class="header p-4">
            <!-- Nav initial -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand col-md-4 d-flex justify-content-center" href="#">
                        <img src="src/img/icons/logo.png" alt="tuatara-logo" class="img-fluid">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse col-md-8" id="navbarNav">
                        <ul class="navbar-nav col-12 d-flex justify-content-evenly">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Full Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">World Wide</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="users-form.php">
                                    <img src="src/img/icons/nido.png" alt="nido-logo" class="img-fluid">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                            <li class="nav-item d-flex">
                                <a class="btn-group nav-link" href="#">ES</a>
                                <a class="btn-group nav-link border-start badge-white" href="#">EN</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Nav end -->
        </header>
    </div>
    <div class="bg-color bg-service"></div>
    <div class="bg-img projects">
        <!-- Carousel start-->
        <div id="carousel-projects" class="carousel slide border-0" data-bs-ride="carousel">
            <div class="carousel-inner content-projects border-0">
              <div class="carousel-item active" data-bs-interval="3000">
                <img src="src/img/projects/Proyect-1.jpg" class="d-block w-100 border-0" alt="Proyect-1">
              </div>
              <div class="carousel-item" data-bs-interval="3000">
                <img src="src/img/projects/Proyect-2.jpg" class="d-block w-100 border-0" alt="Proyect-2">
              </div>
              <div class="carousel-item" data-bs-interval="3000">
                <img src="src/img/projects/Proyect-3.jpg" class="d-block w-100 border-0" alt="Proyect-3">
              </div>
            </div>
        </div>
        <!-- Carousel end-->
    </div>
    <div class="bg-color bg-brands"></div>
    <div class="bg-color bg-contact"></div>

    <div class="d-flex align-items-center p-2 bg-white about-pop">
        <div class="flex-shrink-2 about-img pe-md-5 pe-sm-0 w-45">
            <img src="src/img/about-tuatara.png" alt="About tuatara" class="img">
        </div>
        <div class="flex-grow-1 ms-2 ps-md-5 ps-sm-0 text-md-start w-55 fs-6 about-text lead">
            Tuataras, New Zealand Reptiles inspire us with ¡ts behavior to breathe what we call</br>
            Mutualism, a way of living, managing and relating with our beloved clients. Its goal is to</br>
            harvest long-term relations where transparency, trust, and communication ends in a win-win.
        </div>
    </div>

    <footer>

    </footer>

    <script src="libraries/jquery/jquery-3.6.0.min.js"></script>
    <script src="libraries/bootstrap-5/bootstrap.bundle.min.js"></script>
    <script src="libraries/bootstrap-5/bootstrap.min.js"></script>
    <!-- <script src="src/js/app.js"></script> -->
</body>
</html>