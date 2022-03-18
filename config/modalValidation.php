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
