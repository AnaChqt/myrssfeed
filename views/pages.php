    <?php

    for ($i=0; $i <$articlesNumber ; $i++) { ?>
        <!-- $title= $item[$i]->title;
        echo $title.'<br><br>';
        $img= $item[$i]->enclosure['url'];
        echo '<img src='.$img.'><br><br>';
        $description= $item[$i]->description;
        echo $description.'<br><br><br>'; -->
    
        <div class="card">
            <h3 class="titleContent"><?=$item[$i]->title?> </h3>
            <div class="cardsContent">
                <article>
                <p class="paragContent"><?=$item[$i]->description?></p>
                </article>
                <aside>
                <img src="<?=$item[$i]->enclosure['url']?>" alt="image de l'article">
                </aside>
            </div>
            <a class="discover" href="<?=$item[$i]->link?>">En savoir plus</a>
        </div>


    <?php
    }
    
    ?> 
    



