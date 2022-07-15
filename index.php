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
        <header class="header">
            <!-- Nav initial -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="users-form.php">Usuarios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
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

    <div class="about-pop">
        <div class="logo-about">
            Logo
        </div>
        <div class="info-about">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa provident minus facilis, animi rerum minima dolor beatae aspernatur magnam, non laborum? Sed labore nihil aspernatur aut voluptatem nulla, animi qui.</p>
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