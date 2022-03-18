<?php

    $actusAll = simplexml_load_file('https://www.jeuxactu.com/rss/ja.rss');
    $testsAll = simplexml_load_file('https://www.jeuxactu.com/rss/tests.rss');
    $ps5All = simplexml_load_file('https://www.jeuxactu.com/rss/ps5.rss');
    $xBoxSeriesXAll = simplexml_load_file('https://www.jeuxactu.com/rss/xbox-series-x.rss');
    $switchAll = simplexml_load_file('https://www.jeuxactu.com/rss/switch.rss');

    $item = $actusAll->channel->item;
    // echo $actusTable[1]->title;
    $articlesNumber = 9;

    // for ($i=0; $i <$articlesNumber ; $i++) {
    //     $title= $actusTable[$i]->title;
    //     $img= $actusTable[$i]->enclosure['url'];
    //     $description= $actusTable[$i]->description;
    // }

    

    include(dirname(__FILE__) . '/../views/templates/header.php');
    // include(dirname(__FILE__) . '/../views/home.php');
    include(dirname(__FILE__) . '/../views/templates/footer.php');