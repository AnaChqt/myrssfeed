<section class="homePage">
    <div class="topPage">
        <h1 class="titleTopPage">
            Bienvenue sur ManuGameWorld ! MGW: le site d'informations sur les jeux vidéos !
        </h1>
    </div>
    <?php
    foreach ($arrayXML as $key => $value) { ?>

    <h2 class="titleCategory"><?=$value->nameCategory?></h2>
    <div class="cartegoryArticle">
    <?php
    foreach (($value->flux->channel->item) as $key => $value) {  ?>
            <div class="cardArticle">
                <a href="<?=$value->link?>" target="_blank" rel="noopener noreferrer">
                    <img src="<?=$value->enclosure['url']?>" class="pictureCardArticle" alt="...">
                </a>
                <h5 class="descriptionCardArticle">
                    <?=$value->title?>
                </h5>
            </div>
    
    <?php
    }
    ?>
    </div>
    <?php
    }
    ?>
    
</section>
