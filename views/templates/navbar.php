<?php
// tableau des erreurs
$error = [];

define('CATEGORIES',['cat1', 'cat2', 'cat3', 'cat4', 'cat5']);
$selected

?>






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

    <title>Document</title>

</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg justify-content-center fixed-top">
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
                        <a href="#" class="logo"><img src="/public/assets/img/logo.png" alt=""></a>
                    </div>
                    <ul class="navbar-nav mb-2 mb-lg-0 topBotomBordersOut ml-auto text-center fw-bold">
                        <li class="nav-item">
                            <a class="nav-link " href="#">Catégorie 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Catégorie 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Catégorie 3</a>
                        </li>

                        <li class="nav-item d-none d-lg-block">
                            <a class="icon" data-bs-toggle="modal" data-bs-target="#openModalDV"><img class="logo2" src="/public/assets/img/UserWhite.png" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>



<!-- START MODAL -->
<!-- Start Search Modal Desktop Version -->
<div class="modal fade" id="openModalDV" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">titre</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="GET" id="formUser" enctype="multipart/form-data" novalidate>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                <div class="mb-3">
                                    <label for="catégories">Choix des catégories</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="catégories" class="form-check-input" type="checkbox" id="cat1" value="1">
                                    <label class="form-check-label-check" for="inlineCheckbox">Catégorie 1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="catégories" class="form-check-input" type="checkbox" id="cat2" value="2">
                                    <label class="form-check-label-check" for="inlineCheckbox">Catégorie 2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="catégories" class="form-check-input" type="checkbox" id="cat3" value="3">
                                    <label class="form-check-label-check" for="inlineCheckbox">Catégorie 3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="catégories" class="form-check-input" type="checkbox" id="cat3" value="4">
                                    <label class="form-check-label-check" for="inlineCheckbox">Catégorie 4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="catégories" class="form-check-input" type="checkbox" id="cat4" value="5">
                                    <label class="form-check-label-check" for="inlineCheckbox">Catégorie 5</label>
                                </div>
                                <!-- <p class="error"></p> -->


                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
<!-- End Search Modal Desktop Version -->



<!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- JS -->
    <script src=""></script>

</body>
</html>