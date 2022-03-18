<?php

if (issets($_COOKIE['categories'])) {
    $categories = $_COOKIE['categories'];
};


// print_r($categories);

if(empty($categories)) {
    $categories = [
        'cat1','cat2','cat3'];
} else {
    $arrayXML = [];
    
        foreach ($categories as $value) {
            switch ($value) {
                case 'cat1':
                    array_push($arrayXML, (object) [
                        'flux' => simplexml_load_file('https://www.jeuxactu.com/rss/ja.rss'),
                        'nameCategory' => 'Actus'
                    ]);
                    break;
                case 'cat2':
                    array_push($arrayXML, (object) [
                        'flux' => simplexml_load_file('https://www.jeuxactu.com/rss/tests.rss'),
                        'nameCategory' => 'Tests'
                    ]);
                    break;
                case 'cat3':
                    array_push($arrayXML, (object) [
                        'flux' => simplexml_load_file('https://www.jeuxactu.com/rss/ps5.rss'),
                        'nameCategory' => 'PS5'
                    ]);
                    break;
                case 'cat4':
                    array_push($arrayXML, (object) [
                        'flux' => simplexml_load_file('https://www.jeuxactu.com/rss/xbox-series-x.rss'),
                        'nameCategory' => 'Xbox'
                    ]);
                    break;
                case 'cat5':
                    array_push($arrayXML, (object)  [
                        'flux' => simplexml_load_file('https://www.jeuxactu.com/rss/switch.rss'),
                        'nameCategory' => 'Switch'
                    ]);
                    break;
            }
        }
};
    
    
