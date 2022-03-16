<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$articlesNumber = 9;


    for ($i=0; $i <$articlesNumber ; $i++) {
        $title= $item[$i]->title;
        echo $title.'<br><br>';
        $img= $item[$i]->enclosure['url'];
        echo '<img src='.$img.'><br><br>';
        $description= $item[$i]->description;
        echo $description.'<br><br><br>';
    }
    // echo $title.'<br><br>';
    // echo '<img src='.$img.'><br><br>';
    // echo $description.'<br><br><br>';
     
    

    
?> 
    




</body>
</html>

