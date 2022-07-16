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
    <div class="projects">
        <main class="main">
            <div id="carousel" class="carousel slide" data-bs-ride="carousel" data-pause="true">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="3000">
                        <img src="src/img/projects/Proyect-1.jpg" class="d-block w-100" alt="project-1">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="src/img/projects/Proyect-2.jpg" class="d-block w-100" alt="project-2">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="src/img/projects/Proyect-3.jpg" class="d-block w-100" alt="project-3">
                    </div>
                    <div class="overlay carousel-caption">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-md-1"></div>
                                <!-- offset-md-1 -->
                                <div class="col-md-4 text-md-start">
                                    <h2 class="text-uppercase font-color-default fw-lighter mb-5"><span class="fw-bold">OUR</span> PORTAFOLIO.</h2>
                                    <div class="d-md-block mt-3" id="portafolio-content">
                                        <h6 class="text-uppercase font-color-default fw-bold mb-0 p-0">Nombre del proyecto</h6>
                                        <div class="d-flex p-0 mb-4">
                                            <a class="btn-group pe-3 text-uppercase fw-bold" href="#">Pure Design</a>
                                            <a class="btn-group ps-3 text-capitalize border-start border-dark" href="#">Branding</a>
                                        </div>
                                        <div class="p-content">
                                            <p class="d-none d-md-block p-default">
                                                Lorem ipsum vestibulum lobortis condimentum ex, magna ut
                                                eu velit lobortis Nam molestie. Justo, laoreet, nunc sit erat
                                                consequat massa elit. Ut ante. Sed, turpis diam ligula. Auctor
                                                litora Morbi.
                                            </p>
                                        </div>
                                        <div class="portafolio-next d-flex justify-content-end">
                                            <span class="pe-4 text-uppercase fw-bold">Next Project</span>
                                            <img src="src/img/row-end.png" alt="row end" class="img">
                                        </div>
                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <div class="bg-color bg-brands">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-1"></div>
                <div class="col-md-4 text-md-start">
                    <div class="container">
                        <div class="row mb-2">
                            <div class="col text-start text-uppercase">
                                <h2 class="fw-lighter"><span class="fw-bold">HAPPY</span> FRIENDS.</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-start">
                                <div id="friends-places" class="mb-3">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase font-color-default text-decoration-underline fw-bolder active" aria-current="page" href="#">Colombia</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase fw-bolder text-white" href="#">World wide</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-content">
                                    <p class="d-none d-md-block p-default">
                                        Good Relations are the base of our success. There is
                                        no better testimonial than our clients, newly friends.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="container" id="friends-img">
                        <div class="row row-cols-5 text-center">
                            <div class="col p-2">
                                <img src="src/img/happy-friends/dolex.png" alt="dolex">
                            </div>
                            <div class="col p-2">
                                <img src="src/img/happy-friends/decameron.png" alt="decameron">
                            </div>
                            <div class="col p-2">
                                <img src="src/img/happy-friends/urbansa.png" alt="urbansa">
                            </div>
                            <div class="col p-2">
                                <img src="src/img/happy-friends/cream-helado.png" alt="cream helado">
                            </div>
                            <div class="col p-2">
                                <img src="src/img/happy-friends/district.png" alt="district">
                            </div>
                            <div class="col p-2">
                                <img src="src/img/happy-friends/alier.png" alt="alier">
                            </div>
                            <div class="col p-2">
                                <img src="src/img/happy-friends/pacific.png" alt="pacific">
                            </div>
                            <div class="col p-2">
                                <img src="src/img/happy-friends/manuelita.png" alt="la manuelita">
                            </div>
                            <div class="col p-2">
                                <img src="src/img/happy-friends/toxicomano.png" alt="toxicomano">
                            </div>
                            <div class="col p-2">
                                <img src="src/img/happy-friends/tecnologies.png" alt="optimal consulting technologies">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-color bg-contact">
        <div class="container h-100">
            <div class="row h-100 d-flex align-items-center">
                <div class="col-md-6 col-sm-12 img-contact">
                    <img src="src/img/contacto-home.png" alt="contact">
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="container">
                        <div class="row mb-3">
                            <div class="col text-start text-uppercase">
                                <h2 class="fw-lighter m-0"><span class="fw-bold">CONTACT</span> US.</h2>
                                <h6 class="fw-bold m-0"><small class="contact-sub">Let's talk</small></h6>
                            </div>
                        </div>
                        <div class="row" id="contact-form">
                            <div class="col-12 text-start">
                                <form class="form text-end">
                                    <div>
                                        <input type="text" class="form-control default-input" id="contact-name" placeholder="Name">
                                        <hr class="border-select mb-3"> 
                                    </div>                               
                                    <div>
                                        <input type="email" class="form-control default-input" id="contact-email" placeholder="Email">
                                        <hr class="border-select mb-3"> 
                                    </div>
                                    <div>
                                        <input type="text" class="form-control default-input" id="contact-phone" placeholder="Phone">
                                        <hr class="border-select mb-3"> 
                                    </div>
                                    <div>
                                        <input type="text" class="form-control default-input" id="contact-opinion" placeholder="What's on your mind?">
                                        <hr class="border-select mb-3">
                                    </div>
                                    <button type="submit" class="btn btn-default rounded-pill align-self-center text-uppercase fw-bold">Contact</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="h-25 d-flex align-items-center p-2 bg-white about-pop">
        <div class="about-img pe-sm-0 w-45">
            <img src="src/img/about-tuatara.png" alt="About tuatara" class="img">
        </div>
        <div class="ms-2 ps-md-5 ps-sm-0 text-md-start w-55 p-content ">
            <p class="d-none d-md-block p-default">
                Tuataras, New Zealand Reptiles inspire us with ¡ts behavior to breathe what we call
                Mutualism, a way of living, managing and relating with our beloved clients. Its goal is to
                harvest long-term relations where transparency, trust, and communication ends in a win-win.
            </p>
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
            <input type="text" class="form-control rounded-pill border-0 input-contact input-cls-contact" placeholder="Lorem ipsum" aria-label="Lorem ipsum" aria-describedby="btn-contact">
            <button class="btn rounded-pill btn-input-contact" type="button" id="btn-contact">CONTACT</button>
        </div>
    </div>

    <footer>
        <div class="container h-100 p-5">
            <div class="row h-60 d-flex align-items-baseline" id="footer-links">
                <div class="col-md-3 font-color-default p-3">
                    <h6 class="text-uppercase fw-bold text-start mb-3">Contact</h6>
                    <ul>
                        <li><a href="#">Bogotá| Colombia</a></li>
                        <li><a href="#">hablemos@tuatara.co</a></li>
                        <li><a href="#">Cr 20+t 142 - 23</a></li>
                        <li><a href="#">(57) (1) 3002100127</a></li>
                    </ul>
                </div>
                <div class="col-md-3 font-color-default p-3">
                    <h6 class="text-uppercase fw-bold text-start mb-2">About us</h6>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Software and Tech</a></li>
                        <li><a href="#">Pure Design</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Coworking</a></li>
                    </ul>
                </div>
                <div class="col-md-2 font-color-default p-3">
                    <h6 class="text-uppercase fw-bold text-start mb-2">About us</h6>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Linkedin</a></li>
                        <li><a href="#">Behance</a></li>
                    </ul>
                </div>
                <div class="col-md-4 font-color-default p-3">
                    <img src="src/img/icons/nido-footer.png" alt="nido-logo" class="img mb-2">
                    <div class="p-content">
                        <p class="d-none d-md-block p-default">
                            Good Relations are the base of our success. There is no better testimonial than
                            our clients, newly friends.
                        </p>
                    </div>
                    <div class="input-group mb-3 w-75">
                        <input type="text" class="form-control rounded-pill border border-opacity-25 input-contact input-cls-contact" placeholder="Lorem ipsum" aria-label="Lorem ipsum" aria-describedby="btn-contact">
                        <button class="btn rounded-pill btn-input-contact" type="button" id="btn-contact">CONTACT</button>
                    </div>
                </div>
            </div>
            <hr >
            <div class="row h-30 d-flex justify-content-between" id="footer-rights">
                <div class="col-md-2">
                    <p class="letter-default">&copy 2022 by Tuatara</p>
                </div>
                <div class="col-md-2">
                    <div class="d-flex flex-row-reverse justify-content-around p-0">
                        <div class="text-center socialM"><img src="src/img/icons/social-icons/facebook.png" alt="Facebook" class="img"></div>
                        <div class="text-center socialM"><img src="src/img/icons/social-icons/instagram.png" alt="Instagram" class="img"></div>
                        <div class="text-center socialM"><img src="src/img/icons/social-icons/linkedin.png" alt="Linkedin" class="img"></div>
                        <div class="text-center socialM"><img src="src/img/icons/social-icons/whatsapp.png" alt="WhatsApp" class="img"></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="libraries/jquery/jquery-3.6.0.min.js"></script>
    <script src="libraries/bootstrap-5/bootstrap.bundle.min.js"></script>
    <script src="libraries/bootstrap-5/bootstrap.min.js"></script>
</body>
</html>