<?php
// Tableau des erreurs
$error = [];

if($_SERVER['REQUEST_METHOD']== 'POST'){ //permet de ne pas afficher les messages d'erreurs avant d'envoyer le formulaitre

    // Nettoyage et validation : checkboxes
    define('CATEGORIES',['Actualités', 'Test', 'PS5', 'XBOX X', 'SWITCH']);
    $selectedCategories = filter_input(INPUT_POST, 'categories', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY) ?? [];

    if (count(array_intersect((CATEGORIES), $selectedCategories)) != count($selectedCategories)){
        $error['categories'] = 'erreur';

    } else {
        if (count($selectedCategories) != 3) {
            $error['categories'] = '3 choix';
        } else {
            setcookie('categories', json_encode($selectedCategories), time() + 60*60*24*3); // pour 3 jours
            $test = 'coucou';
        }
    }

    // Nettoyage et validation : radio
    define('FORMAT',['6', '9', '12']);
    $selectedFormat = filter_input(INPUT_POST, 'format', FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY) ?? [];

    if (count(array_intersect((FORMAT), $selectedFormat)) != count($selectedFormat)){
        $error['format'] = 'cochez une case';
    } else {
        setcookie('format', json_encode($selectedFormat), time() + 60*60*24*3); // pour 3 jours
    }

    // cookie : mode dark
    if ($_POST['mod'] == 1) {
        $theme = 'dark mod';
    } else {
        $theme = 'light mod';
    }
    setcookie('mod', $theme, time() + 60*60*24*3); // pour 3 jours

}
?>

<!DOCTYPE html>
<html lang="fr" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- CSS Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- CSS -->
    <link rel="stylesheet" href="/public/assets/css/style.css" !important>
    <link rel="shortcut icon" href="/public/assets/img/Logo.png" type="image/x-icon">

    <title>ManuGamesWorld</title>

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
        <div class="test"><p>Ceci est un test</p></div>

    </header>


<!-- START MODAL -->
<!-- Start Search Modal Desktop Version -->
    <div class="modal fade" id="openModalDV" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" id="formUser" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">titre</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                <div class="mb-3">
                                    <label for="categories">Choisissez 3 catégories :</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="categories[]" class="form-check-input categories" type="checkbox" id="Actualités" value="Actualités">
                                    <label class="checkbox" for="inlineCheckbox">Actualités</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="categories[]" class="form-check-input categories" type="checkbox" id="Test" value="Test">
                                    <label class="checkbox" for="inlineCheckbox">Test</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="categories[]" class="form-check-input categories" type="checkbox" id="PS5" value="PS5">
                                    <label class="checkbox" for="inlineCheckbox">PS5</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="categories[]" class="form-check-input categories" type="checkbox" id="XBOX X" value="XBOX X">
                                    <label class="checkbox" for="inlineCheckbox">XBOX X</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="categories[]" class="form-check-input categories" type="checkbox" id="SWITCH" value="SWITCH">
                                    <label class="checkbox" for="inlineCheckbox">SWITCH</label>
                                </div>
                                    <p class="error"><?= $error['categories'] ?? '' ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                <div class="mb-3">
                                    <label for="format">Choisissez un format :</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="format[]" class="form-check-input format" type="radio"  required id="6" value="6">
                                    <label class="radio" for="inlineradio">6</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="format[]" class="form-check-input format" type="radio"  required id="9" value="9">
                                    <label class="radio" for="inlineradio">9</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="format[]" class="form-check-input format" type="radio"  required id="12" value="12">
                                    <label class="radio" for="inlineRadio">12</label>
                                </div>
                                
                                    <p class="error"><?= $error['format'] ?? '' ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                <div class="mb-3">
                                    <label for="mod">Choisissez votre mode :</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input name="mod"class="form-check-input" type="checkbox" id="mod" value="1">
                                    <label class="switch" for="flexSwitchCheckDefault">&#x263D;</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-lg" type="submit">Submit </button>                
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- End Search Modal Desktop Version -->

<!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- JS -->
    <script src="/public/assets/js/script.js"></script>

</body>
</html>