<?php

$slide = [
    1 => [
        'titre' => 'Les bonnes postures pour réussir sa séance photo',
        'date' => '10 Oct. 2019',
        'nb_commentaire' => '3 commentaires',
        'categorie' => 'Soleil &diams; Style',
        'image' => 'assets/images/soleil.jpg',
        'alt_image' => 'Première slide',
        'class'=>'carousel-item active'
    ],
    2 => [
        'titre' => "Partir en randonnée a l'autre bout du monde",
        'date' => '23 Déc. 2018',
        'nb_commentaire' => '2 commentaires',
        'categorie' => 'Montagne &diams; Style',
        'image' => 'assets/images/montagne.jpg',
        'alt_image' => 'Deuxième slide',
        'class'=>'carousel-item'
    ],
    3 => [
        'titre' => 'Mon voyage au Costa Rica, coûts, prix et bonus',
        'date' => '09 Jan. 2019 ',
        'nb_commentaire' => '5 commentaires',
        'categorie' => 'noir et blanc &diams; Style',
        'image' => 'assets/images/transate.jpg',
        'alt_image' => 'Troisième slide',
        'class'=>'carousel-item'
    ],
];

$article = [
    1=>[
        'categorie'=>'yoga &#8728; life ',
        'titre'=>'La position du lotus',
        'auteur'=> 'par Elisa &#124; 10 oct.2019',
        'paragraphe'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisi lacus, tinci dunt ac efficitur vel, molestie non purus. Nam interdum vehicula diam, nec vulpu tate metus egestas iaculis. Pellentesquetate metus egestas iaculis. Pellentesque tate metus egestas iaculis.jrejhh',
        'class'=> 'article1',
        'image'=> 'assets/images/article1.jpg',
        'alt_image'=>'premier article',
    ],
    2=>[
        'categorie'=>'yoga &#8728; life ',
        'titre'=>'Recette du chocolat chaud',
        'auteur'=> 'par Elisa &#124; 10 oct.2019',
        'paragraphe'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisi lacus, tinci dunt ac efficitur vel, molestie non purus. Nam interdum vehicula diam, nec vulpu tate metus egestas iaculis. Pellentesquetate metus egestas iaculis. Pellentesque tate metus egestas iaculis.jrejhh',
        'class'=> 'article2',
        'image'=> 'assets/images/article2.jpg',
        'alt_image'=>'deuxième article',
    ],
    3=>[
        'categorie'=>'plant &#8728; leaves ',
        'titre'=>"S'ocuper de ses plantes",
        'auteur'=> 'par Elisa &#124; 10 oct.2019',
        'paragraphe'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nisi lacus, tinci dunt ac efficitur vel, molestie non purus. Nam interdum vehicula diam, nec vulpu tate metus egestas iaculis. Pellentesquetate metus egestas iaculis. Pellentesque tate metus egestas iaculis.jrejhh',
        'class'=> 'article1',  
        'image'=> 'assets/images/plant.jpeg',
        'alt_image'=>'troisième article',
    ],

]
?>

<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="assets/css/style_gen.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/responsive.css" />

        <title>Fashion &#38; Beauty &#8211; Accueil</title>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="section_page">
            <div class="header">
                <a href="index.php">
                    <h1>Fashion &#38; Beauty</h1>
                    <div id="sous_titre">
                        <hr>
                        <p>life style &#38; fashion bloggers</p>
                        <hr>
                    </div>
                </a>
            </div>

            <div class="carousel_article">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php
    foreach ($slide as $mesSlide) {
                        ?>
                        <div class="<?php echo $mesSlide['class']; ?>">
                            <div class="description_carousel">
                                <p id="italic" class="texte_carousel"><?php echo $mesSlide['categorie']; ?></p>
                                <p class="titre_carousel"><?php echo $mesSlide['titre']; ?></p>
                                <p id="italic" class="texte_carousel"><?php echo $mesSlide['date']; ?><span id="separation_carousel">&#10072;</span> <?php echo $mesSlide['nb_commentaire']; ?></p>
                            </div>
                            <img class="d-block w-100" src="<?php echo $mesSlide['image']; ?>" alt="<?php echo $mesSlide['alt_image']; ?>">
                        </div>
                        <?php
    }
                        ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>





        <div class='<?php echo $article[1]['class']; ?>'>
            <div class="half">
                <span class="fleche-gauche"></span>
                <a href="assets/php/article.php"><img src="<?php echo $article[1]['image']; ?>" alt="<?php echo $article[1]['alt_image']; ?>"></a>
            </div>
            <div class="marge-droite-gauche half">
                <div class="redimentionnement categorie">
                    <?php echo $article[1]['categorie']; ?>
                </div>
                <h3> <?php echo $article[1]['titre']; ?></h3>
                <div class="auteur-date redimentionnement">
                    <p><?php echo $article[1]['auteur']; ?></p>
                </div>
                <hr class="separation-horizontale">
                <div>
                    <p><?php echo $article[1]['paragraphe']; ?></p>
                </div>
                <div class="logos">
                    <hr class="horizontale-logo">
                    <img src="assets/images/coeur.png">
                    <img src="assets/images/facebook-black.png">
                    <img src="assets/images/twitter.png">
                    <img src="assets/images/google.svg">
                    <img src="assets/images/pinterest_noir.png">
                    <hr class="horizontale-logo">
                </div>
            </div>
        </div>



        <div class="<?php echo $article[2]['class']; ?>">
            <div class="marge-droite-gauche half">
                <div class="redimentionnement categorie">
                    <?php echo $article[2]['categorie']; ?>
                </div>
                <h3> <?php echo $article[2]['titre']; ?></h3>
                <div class="auteur-date redimentionnement">
                    <p><?php echo $article[2]['auteur']; ?></p>
                </div>
                <hr class="separation-horizontale">
                <div>
                    <p><?php echo $article[2]['paragraphe']; ?></p>
                </div>
                <div class="logos">
                    <hr class="horizontale-logo">
                    <img src="assets/images/coeur.png">
                    <img src="assets/images/facebook-black.png">
                    <img src="assets/images/twitter.png">
                    <img src="assets/images/google.svg">
                    <img src="assets/images/pinterest_noir.png">
                    <hr class="horizontale-logo">
                </div>
            </div>
            <div class="half">
                <span id="fleche-droite"></span>
                <img src="<?php echo $article[2]['image']; ?>" alt="<?php echo $article[2]['alt_image']; ?>">
            </div>
        </div>


        <div class='<?php echo $article[3]['class']; ?>'>
            <div class="half">
                <span class="fleche-gauche"></span>
                <img src="<?php echo $article[3]['image']; ?>" alt="<?php echo $article[1]['alt_image']; ?>">
            </div>
            <div class="marge-droite-gauche half">
                <div class="redimentionnement categorie">
                    <?php echo $article[3]['categorie']; ?>
                </div>
                <h3> <?php echo $article[3]['titre']; ?></h3>
                <div class="auteur-date redimentionnement">
                    <p><?php echo $article[3]['auteur']; ?></p>
                </div>
                <hr class="separation-horizontale">
                <div>
                    <p><?php echo $article[3]['paragraphe']; ?></p>
                </div>
                <div class="logos">
                    <hr class="horizontale-logo">
                    <img src="assets/images/coeur.png">
                    <img src="assets/images/facebook-black.png">
                    <img src="assets/images/twitter.png">
                    <img src="assets/images/google.svg">
                    <img src="assets/images/pinterest_noir.png">
                    <hr class="horizontale-logo">
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="footer_sel">
                <div class="liens"> 
                    <a href="assets/php/faq.php">FAQ</a>
                </div>
                <hr>
                <div class="liens"> 
                    <a href=""><img src="assets/images/facebook.svg">Facebook</a>
                    <a href=""><img src="assets/images/twitter-snow.svg">Twitter</a>
                    <a href=""><img src="assets/images/instagram.png">Instagram</a>
                    <a href=""><img src="assets/images/pinterest.png">Pinterest</a>
                    <a href=""><img src="assets/images/youtube.png">Youtube</a>
                </div>
                <hr>
                <div class="mentions"> 
                    <p id="italic">&copy;2019 &#8211; Sujet pour SaintVincent. Tout droits réservés</p>
                </div>
            </div>
        </footer>
    </body>
</html>