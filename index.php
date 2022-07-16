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
    <div class="bg-color bg-service">
        <div class="container h-100">
            <div class="row h-100 d-flex align-items-center">
                <div class="col-md-6 col-sm-12 img-services">
                    <img src="src/img/services.png" alt="services">
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="container">
                        <div class="row mb-5">
                            <div class="col text-start text-uppercase">
                                <h2 class="fw-lighter"><span class="fw-bold">FULL</span> SERVICE.</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <select class="form-select text-uppercase default-select">
                                    <option value="sld_soft" selected>Software & Tech</option>
                                    <option value="sld_comp">Computers</option>
                                    <option value="sld_ai">Artificial Intelligent</option>
                                </select>
                                <hr class="border-select mb-4">

                                <select class="form-select text-uppercase fw-bold default-select-blue">
                                    <option value="1" selected>Pure Design</option>
                                    <option value="2">Styles</option>
                                    <option value="3">Creative</option>
                                </select>
                                <p class="text-start pb-5 m-0">
                                    <small class="p-select">Design should evoke feelings, should play with our senses so we can reach a level where we can have thrilling and connected human experiences.</small>
                                </p>

                                <div class="btn-flex mb-4 d-flex flex-row justify-content-between">
                                    <button type="button" class="btn btn-default-blue rounded-pill align-self-center">Branding</button>
                                    <button type="button" class="btn btn-default-blue rounded-pill align-self-center">Animation</button>
                                    <button type="button" class="btn btn-default-blue rounded-pill align-self-center">Characters</button>
                                    <button type="button" class="btn btn-default-blue rounded-pill align-self-center">Printed</button>
                                </div>
                                <hr class="border-select mb-4">
                                <select class="form-select mb-2 text-uppercase default-select">
                                    <option value="sld_marke" selected>Marketing</option>
                                    <option value="sld_brand">Brands</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
        <div class="flex-shrink-2 about-img pe-sm-0 w-45">
            <img src="src/img/about-tuatara.png" alt="About tuatara" class="img">
        </div>
        <div class="flex-grow-1 ms-2 ps-md-5 ps-sm-0 text-md-start w-55 fs-6 about-text lead">
            Tuataras, New Zealand Reptiles inspire us with ¡ts behavior to breathe what we call</br>
            Mutualism, a way of living, managing and relating with our beloved clients. Its goal is to</br>
            harvest long-term relations where transparency, trust, and communication ends in a win-win.
        </div>
    </div>

    <div class="about-main d-flex flex-column">
        <div class="d-flex flex-column text-adjectives text-uppercase text-start fs-1 fw-normal lh-1 mt-4 mb-3">
            <span>Awesome</span>
            <span>Agency</span>
            <span>Great</span>
            <span>Clients</span>
        </div>
        <span class="fw-lighter text-start txt-span pb-4">Building innovation with your brand</span>
        
        <div class="input-group mb-3 w-75">
            <input type="text" class="form-control rounded-pill border-0 input-contact" placeholder="Lorem ipsum" aria-label="Lorem ipsum" aria-describedby="btn-contact">
            <button class="btn rounded-pill" type="button" id="btn-contact">CONTACT</button>
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