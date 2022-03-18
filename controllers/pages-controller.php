<?php

$category = $_GET['category'];  
// if (empty($category)) {
//     header('location: /404.php');
//     die;
// }

require(dirname(__FILE__) . '/../config/init.php');

    // $items = arrayXML[$category]->flux->channel->item;
    

    include(dirname(__FILE__) . '/../views/templates/header.php');
    include(dirname(__FILE__) . '/../views/pages.php');
    include(dirname(__FILE__) . '/../views/templates/footer.php');