<!doctype html>
<html lang="fr">
  <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/css2.css">
        <script src="https://kit.fontawesome.com/2167f205ab.js" crossorigin="anonymous"></script>
        <script src="C:\wamp64\www\allodocteur\js\monjs.js"></script>
        <title>Onyx Technologie</title>          
  </head>
  <body>
        <!--barre de navigation -->
        <nav class="navbar navbar-expand-md navbar-dark px-2" style="background-color:blueviolet">
            <button type="button" class="navbar-toggler bg-dark" data-trigger="#navbar" data-bs-toggle="collapse" data-bs-target="#nav"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse justify-content-between" id="nav">
                <ul class="navbar-nav px-5">
                
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link text-light px-2" href="#">Accueil</a></li>
                    <li class="nav-item dropdown"><a class="nav-link text-light px-2 dropdown-toggle" data-bs-toggle="dropdown" href="#">Menu</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Menu1</a>
                            <a class="dropdown-item" href="#">Menu2</a>
                            <a class="dropdown-item" href="#">Menu3</a>
                            <a class="dropdown-item" href="#">Menu4</a>
                            <a class="dropdown-item" href="#">Menu5</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link text-light px-2" href="#">A propos</a></li>
                    <li class="nav-item dropdown"><a class="nav-link text-light px-2 dropdown-toggle" data-bs-toggle="dropdown" href="#">Contacts</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><i class="bi bi-whatsapp"></i> +22896454939</a>
                            <a class="dropdown-item" href="#"><i class="bi bi-envelope"></i> sardonyxdouko@gmail.com</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link text-light px-3" href="#" id="login">Se connecter <i class="bi bi-box-arrow-in-right"></i></a></li>
                </ul>
            </div>
        </nav>
        <!-- barre de recherche-->
        <section class="search-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <form>
                            <div class="p-1 bg-light shadow-sm">
                                <div class="input-group">
                                    <input type="search" class="form-control border-0" placeholder="Rechercher">
                                    <div class="input-group-append">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-outline dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                Catégorie
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-globe2"></i> Site web</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-phone"></i> Application</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="bi bi-laptop"></i> Logiciel</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-link"><i class="bi bi-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </section>
        <!-- Carousel (defilement d'image) -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image\img11.jpg" class="d-block w-100" alt="first slide">
                </div>
                <div class="carousel-item">
                    <img src="image\img6.jpg" class="d-block w-100" alt="second slide">
                </div>
                <div class="carousel-item">
                    <img src="image\img5.jpg" class="d-block w-100" alt="third slide">
                </div>
                <div class="carousel-item">
                    <img src="image\img10.jpg" class="d-block w-100" alt="four slide">
                </div>
            </div>
            <a class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
        -->
    </body>
</html>