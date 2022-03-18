
    
<?php


    for ($i=0; $i <$articlesNumber ; $i++) { ?>
        <!-- $title= $item[$i]->title;
        echo $title.'<br><br>';
        $img= $item[$i]->enclosure['url'];
        echo '<img src='.$img.'><br><br>';
        $description= $item[$i]->description;
        echo $description.'<br><br><br>'; -->
    
        <div class="cardPage">
            <div class="cardLeft">
                <a class="discover" href="<?=$item[$i]->link?>">
                    <img src="<?=$item[$i]->enclosure['url']?>" alt="image de l'article">
                </a>
            </div>
            <div class="cardsContent">
                <p class="paragContent"><?=$item[$i]->description?></p>
                <h3 class="titleContent"><?=$item[$i]->title?> </h3>
            </div>
        </div>
    <?php
    }    
    ?> 
    



