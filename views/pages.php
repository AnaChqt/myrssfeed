<?php
    $items = $arrayXML[$category]->flux->channel->item;
    for ($i=0; $i<=$articlesNumber ; $i++) { 
?>

    <div class="card">
        <h3 class="titleContent"><?=$items[$i]->title?> </h3>
        <div class="cardsContent">
            <article>
            <p class="paragContent"><?=$items[$i]->description?></p>
            </article>
            <aside>
            <img src="<?=$items[$i]->enclosure['url']?>" alt="image de l'article">
            </aside>
        </div>
        <a class="discover" href="<?=$items[$i]->link?>">En savoir plus</a>
    </div>
<?php } ?>



