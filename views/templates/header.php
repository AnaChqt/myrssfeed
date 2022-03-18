<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- CSS Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- CSS -->
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <link rel="stylesheet" href="/public/assets/css/homePage.css">
    <link rel="stylesheet" href="/public/assets/css/pages.css">

    <link rel="shortcut icon" href="/public/assets/img/Logo.png" type="image/x-icon">

    <title>ManuGameWorld</title>
</head>

<body>
    <header >
        <nav class="navbar navbar-expand-lg justify-content-center" id="navigation">
            <div class="container-fluid navbarMobile">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <div class="navbarName">Menu</div>
                </button>
                <ul class="navbar-nav mb-2 mb-lg-0 ml-auto fw-bold navbarMobile2">
                    <li class="nav-item d-lg-none navMobile">
                        <a href="#" class="icon"><img id="" src="/public/assets/img/logo.png" alt=""></a>
                    </li>

                    <li class="nav-item d-lg-none navMobile">
                        <a class="icon" data-bs-toggle="modal" data-bs-target="#openModalDV"><img src="/public/assets/img/UserWhite.png" alt=""></a>
                    </li>
                </ul>
                <div class="collapse navbar-collapse justify-content-between w-50 navVersion" id="navbarNav">
                    <div class="logo">
                        <!--logo-->
                        <a href="http://myrssfeed.localhost/controllers/home-controller.php" class="logo"><img src="/public/assets/img/logo.png" alt=""></a>
                    </div>
                    <ul class="navbar-nav mb-2 mb-lg-0 topBotomBordersOut ml-auto text-center fw-bold">
                        <li class="nav-item">
                            <a class="nav-link " href="http://myrssfeed.localhost/controllers/pages-controller.php?category=1">Catégorie 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://myrssfeed.localhost/controllers/pages-controller.php?category=2">Catégorie 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://myrssfeed.localhost/controllers/pages-controller.php?category=3">Catégorie 3</a>
                        </li>

                        <li class="nav-item d-none d-lg-block">
                            <a class="icon" data-bs-toggle="modal" data-bs-target="#openModalDV"><img class="logo2" src="/public/assets/img/UserWhite.png" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>