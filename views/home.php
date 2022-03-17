

    <section class="homePage">
        <div class="topPage">
            <h1 class="titleTopPage">
                Bienvenue sur ManuGameWorld ! MGW: le site d'informations sur les jeux vidéos !
            </h1>
        </div>
        <div class="category">
            
                <?php
                    for ($i=0; $i <$articlesNumber ; $i++) {
                    $title= $item[$i]->title; ?>
                    <h2 id="titleCategory"> 
                        <?=$title?>
                    </h2>
                <?php 
                    }
                ?>

            <div class="lastArticle">
                <img src="" alt="" class="pictureLastArticle">
                <h3 class="titleLastArticle">

                </h3>
            </div>
        
        <div class="previewsArticle">
            <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false"
                data-bs-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active ">
                        <div class="blockSlide">
                            <div class="cardArticle">
                                <img src=" " class="pictureCardArticle" alt="...">
                                <p class="descriptionCardArticle">

                                </p>
                            </div>
                            <div class="cardArticle">
                                <img src=" " class="pictureCardArticle" alt="...">
                                <p class="descriptionCardArticle">

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="blockSlide">
                                <div class="cardArticle">
                                    <img src=" " class="pictureCardArticle" alt="...">
                                    <p class="descriptionCardArticle">

                                    </p>
                                </div>
                                <div class="cardArticle">
                                    <img src=" " class="pictureCardArticle" alt="...">
                                    <p class="descriptionCardArticle">

                                    </p>
                                </div>
                            </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="blockSlide">
                                <div class="cardArticle">
                                    <img src=" " class="pictureCardArticle" alt="...">
                                    <p class="descriptionCardArticle">

                                    </p>
                                </div>
                                <div class="cardArticle">
                                    <img src=" " class="pictureCardArticle" alt="...">
                                    <p class="descriptionCardArticle">

                                    </p>
                                </div>
                            </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        </div>
    </section>
