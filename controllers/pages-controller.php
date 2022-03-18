<?php

    $categories = $_COOKIE['categories'];
    
    $actusAll = simplexml_load_file('https://www.jeuxactu.com/rss/ja.rss');
    $testsAll = simplexml_load_file('https://www.jeuxactu.com/rss/tests.rss');
    $ps5All = simplexml_load_file('https://www.jeuxactu.com/rss/ps5.rss');
    $xBoxSeriesXAll = simplexml_load_file('https://www.jeuxactu.com/rss/xbox-series-x.rss');
    $switchAll = simplexml_load_file('https://www.jeuxactu.com/rss/switch.rss');

        switch ($categories) {
            case '0':
                $path = $actusAll;
            break;
            case '1':
                $path = $testsAll;
            break;
            case '2':
                $path = $ps5All;
            break;
            case '3':
                $path = $xBoxSeriesXAll;
            break;
            case '4':
                $path = $switchAll;
            break;
        }

    
    $item = $path->channel->item;
    $articlesNumber = 9;

    include(dirname(__FILE__) . '/../views/templates/header.php');
    include(dirname(__FILE__) . '/../views/pages.php');
    include(dirname(__FILE__) . '/../views/templates/footer.php');