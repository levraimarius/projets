<?php
$faq = [
    1 => [
        'num_question' => 'Question 1',
        'contenu' => 'Nulla vel pellentesque dui, nec ultrices mauris. Nullam fringilla imperdiet elit ut hendrerit. Maecenas pulvinar at augue sed hendrerit. Sed augue nulla, aliquet eget malesuada non, iaculis aliquam lacus.',
        'header' => 'header1',
        'collapse' => 'collapse1',
        'id_bouton' => 'id_bouton1',
    ],
    2 =>[
        'num_question' => 'Question 2',
        'contenu' => 'Fusce rutrum convallis mi ut imperdiet. Nam elementum aliquam efficitur. Proin gravida massa a velit cursus, nec cursus ipsum ullamcorper. Phasellus sed tortor laoreet, iaculis nisi ac, commodo sem. Phasellus vel gravida erat. Sed ac sem non enim pharetra hendrerit vitae vitae felis.',
        'header' => 'header2',
        'collapse' => 'collapse2',
        'id_bouton' => 'id_bouton2',
    ],
    3 =>[
        'num_question' => 'Question 3',
        'contenu' => 'Aenean et fermentum purus. Nullam vitae fermentum massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
        'header' => 'header3',
        'collapse' => 'collapse3',
        'id_bouton' => 'id_bouton3',
    ],
    4 =>[
        'num_question' => 'Question 4',
        'contenu' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus purus nec elementum pulvinar. Nullam gravida egestas ante sit amet suscipit. Donec non tincidunt sapien, in laoreet nibh. In porttitor egestas lobortis. Integer sollicitudin justo ac condimentum consectetur.',
        'header' => 'header4',
        'collapse' => 'collapse4',
        'id_bouton' => 'id_bouton4',
    ],
    5 =>[
        'num_question' => 'Question 5',
        'contenu' => 'Praesent vestibulum enim in ipsum pharetra, pulvinar consectetur sapien condimentum. Mauris fermentum turpis non rhoncus iaculis.',
        'header' => 'header5',
        'collapse' => 'collapse5',
        'id_bouton' => 'id_bouton5',
    ],
]
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="../css/style_gen.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Fashion &#38; Beauty &#8211; FAQ</title>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="section_page">
            <div class="header">
                <a href="../../index.php">
                    <h1>Fashion &#38; Beauty</h1>
                    <div id="sous_titre">
                        <hr>
                        <p>life style &#38; fashion bloggers</p>
                        <hr>
                    </div>
                </a>
            </div>

            <div class="contenu_faq">
                <div class="col_gauche_faq">
                    <h1>Questions générales</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                    <div class="accordion" id="exempleAccordeon">
                        <div class="card">
                            <div class="card-header" id="<?php echo $faq[1]['header']; ?>">
                                <button class="btn btn-link" id="btn1" type="button" data-toggle="collapse" data-target="#<?php echo $faq[1]['collapse']; ?>" aria-expanded="true" aria-controls="<?php echo $faq[1]['collapse']; ?>"><?php echo $faq[1]['num_question']; ?> <span class="bouton_selection" id="<?php echo $faq[1]['id_bouton']; ?>">&#43;</span></button>
                            </div>
                            <div id="<?php echo $faq[1]['collapse']; ?>" class="collapse" aria-labelledby="header1">
                                <div class="card-body">
                                    <p><?php echo $faq[1]['contenu']; ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="<?php echo $faq[2]['header']; ?>">
                                <button class="btn btn-link" id="btn2" type="button" data-toggle="collapse" data-target="#<?php echo $faq[2]['collapse']; ?>" aria-expanded="true" aria-controls="<?php echo $faq[2]['collapse']; ?>"><?php echo $faq[2]['num_question']; ?> <span class="bouton_selection" id="<?php echo $faq[2]['id_bouton']; ?>">&#43;</span></button>
                            </div>
                            <div id="<?php echo $faq[2]['collapse']; ?>" class="collapse" aria-labelledby="header1">
                                <div class="card-body">
                                    <p><?php echo $faq[2]['contenu']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col_droite_faq">
                    <h1>Autres questions</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                    <div class="accordion" id="exempleAccordeon">
                        <div class="card">
                            <div class="card-header" id="<?php echo $faq[3]['header']; ?>">
                                <button class="btn btn-link" id="btn3" type="button" data-toggle="collapse" data-target="#<?php echo $faq[3]['collapse']; ?>" aria-expanded="true" aria-controls="<?php echo $faq[3]['collapse']; ?>"><?php echo $faq[3]['num_question']; ?> <span class="bouton_selection" id="<?php echo $faq[3]['id_bouton']; ?>">&#43;</span></button>
                            </div>
                            <div id="<?php echo $faq[3]['collapse']; ?>" class="collapse" aria-labelledby="header1">
                                <div class="card-body">
                                    <p><?php echo $faq[3]['contenu']; ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="<?php echo $faq[4]['header']; ?>">
                                <button class="btn btn-link" id="btn4" type="button" data-toggle="collapse" data-target="#<?php echo $faq[4]['collapse']; ?>" aria-expanded="true" aria-controls="<?php echo $faq[4]['collapse']; ?>"><?php echo $faq[4]['num_question']; ?> <span class="bouton_selection" id="<?php echo $faq[4]['id_bouton']; ?>">&#43;</span></button>
                            </div>
                            <div id="<?php echo $faq[4]['collapse']; ?>" class="collapse" aria-labelledby="header1">
                                <div class="card-body">
                                    <p><?php echo $faq[4]['contenu']; ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="<?php echo $faq[5]['header']; ?>">
                                <button class="btn btn-link" id="btn5" type="button" data-toggle="collapse" data-target="#<?php echo $faq[5]['collapse']; ?>" aria-expanded="true" aria-controls="<?php echo $faq[5]['collapse']; ?>"><?php echo $faq[5]['num_question']; ?> <span class="bouton_selection" id="<?php echo $faq[5]['id_bouton']; ?>">&#43;</span></button>
                            </div>
                            <div id="<?php echo $faq[5]['collapse']; ?>" class="collapse" aria-labelledby="header1">
                                <div class="card-body">
                                    <p><?php echo $faq[5]['contenu']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="footer_sel">
                <div class="liens"> 
                    <a href="faq.php">FAQ</a>
                </div>
                <hr>
                <div class="liens"> 
                    <a href=""><img src="../images/facebook.svg">Facebook</a>
                    <a href=""><img src="../images/twitter-snow.svg">Twitter</a>
                    <a href=""><img src="../images/instagram.png">Instagram</a>
                    <a href=""><img src="../images/pinterest.png">Pinterest</a>
                    <a href=""><img src="../images/youtube.png">Youtube</a>
                </div>
                <hr>
                <div class="mentions"> 
                    <p id="italic">&copy;2019 &#8211; Sujet pour SaintVincent. Tout droits réservés</p>
                </div>
            </div>
        </footer>

        <script>
            $(document).ready(function() {
                $("#btn1").click(function() {

                    if (this.value=="+") this.value = "-";
                    else this.value = "+";

                    if (this.value=="+") {
                        $("#id_bouton1").text("-")
                    } else {
                        $("#id_bouton1").text("+")
                    };
                });

                $("#btn2").click(function() {

                    if (this.value=="+") this.value = "-";
                    else this.value = "+";

                    if (this.value=="+") {
                        $("#id_bouton2").text("-")
                    } else {
                        $("#id_bouton2").text("+")
                    };
                });

                $("#btn3").click(function() {

                    if (this.value=="+") this.value = "-";
                    else this.value = "+";

                    if (this.value=="+") {
                        $("#id_bouton3").text("-")
                    } else {
                        $("#id_bouton3").text("+")
                    };
                });

                $("#btn4").click(function() {

                    if (this.value=="+") this.value = "-";
                    else this.value = "+";

                    if (this.value=="+") {
                        $("#id_bouton4").text("-")
                    } else {
                        $("#id_bouton4").text("+")
                    };
                });

                $("#btn5").click(function() {

                    if (this.value=="+") this.value = "-";
                    else this.value = "+";

                    if (this.value=="+") {
                        $("#id_bouton5").text("-")
                    } else {
                        $("#id_bouton5").text("+")
                    };
                });
            });
        </script>

    </body>
</html>