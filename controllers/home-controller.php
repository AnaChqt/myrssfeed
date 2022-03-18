<?php

        $categories = [
            'cat1','cat2','cat3'];
        
        $arrayXML = [];
        
        foreach ($categories as $value) {
            switch ($value) {
                case 'cat1':
                    $actus = (object) [
                        'flux' => simplexml_load_file('https://www.jeuxactu.com/rss/ja.rss'),
                        'nameCategory' => 'Actus'
                    ];
                    array_push($arrayXML,$actus);
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
                    array_push($arrayXML, $xbox = [
                        'flux' => simplexml_load_file('https://www.jeuxactu.com/rss/xbox-series-x.rss'),
                        'nameCategory' => 'Xbox'
                    ]);
                    break;
                case 'cat5':
                    array_push($arrayXML, $switch = [
                        'flux' => simplexml_load_file('https://www.jeuxactu.com/rss/switch.rss'),
                        'nameCategory' => 'Switch'
                    ]);
                    break;
            }
        };

        include(dirname(__FILE__) . '/../views/templates/header.php');
        include(dirname(__FILE__) . '/../views/home.php');
        include(dirname(__FILE__) . '/../views/templates/footer.php');