<!DOCTYPE html>
<html lang="fr">
    <!-- HEAD -->
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="assets/images/icon.png">

        <title>Portfolio | Marius THIESSET</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head> <!-- FIN HEAD -->

    <!-- BODY -->
    <body data-spy="scroll" data-target=".navbar" data-offset="60">
        <!-- NAVBAR -->
        <nav class="navbar navbar-default navbar-fixed-top" id="menu">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="#presentation"><i class="fa fa-male"></i> Moi</a></li>
                        <li><a href="#competences"><i class="fa fa-code"></i> Compétences</a></li>
                        <li><a id="resp_experience_professionelle" href="#experience_professionelle"><i class="fa fa-briefcase"></i> Expérience</a></li>
                        <li><a id="resp_education" href="#education"><i class="fa fa-child"></i> Education</a></li>
                        <li><a href="#projets"><i class="fa fa-check-square-o"></i> Projets</a></li>
                        <li><a href="#contact"><i class="fa fa-envelope"></i> Contact</a></li>
                    </ul>
                </div>
            </div> <!-- FIN SECTION CONTAINER -->
        </nav> <!-- FIN NAVBAR -->

        <!-- SECTION PRÉSENTATION -->
        <section id="presentation" class="container-fluid">
            <!-- FIN RESPONSIVE MOBILE -->
            <div class="resp_mobile">
                <div class="col-xs-8 col-md-4 profile-picture">
                    <img src="assets/images/photomoi.jpg" alt="Marius" class="img-circle">
                </div>
                <div class="heading">
                    <h1>Marius Thiesset</h1>
                    <h3>Développeur Front-End</h3>
                    <a href="assets/docs/CV.pdf" target="_blank" class="bouton_cv" download>Télécharger mon CV</a>
                </div>
                <div class="heading">
                    <p>Âgé de 19 ans, je suis en première année de BTS SIO (Services Informatiques aux Organisations) Option SLAM (Solution Logiciels et Applications Métiers) au lycée privée Saint-Vincent à Senlis.</p>
                </div>
            </div> <!-- FIN RESPONSIVE MOBILE -->

            <!-- RESPONSIVE PC -->
            <div class="resp_pc">
                <div class="heading">
                    <h1>Marius Thiesset</h1>
                    <h3>Développeur Front-End</h3>
                    <div class="main-menu">
                        <a class="bouton_presentation">Présentation</a>
                    </div>
                </div>

                <div class="main-menu">
                    <ul>
                        <li>
                            <div id="part1" class="images">
                                <div class="bw"></div>
                                <div class="color"></div>
                            </div>
                            <div class="description">
                                <p>Âgé de 19 ans, je suis en première année de BTS SIO (Services Informatiques aux Organisations) Option SLAM (Solution Logiciels et Applications Métiers) au lycée privée Saint-Vincent à Senlis.</p>
                                <a href="assets/docs/CV.pdf" target="_blank" class="bouton_cv_description" download>Télécharger mon CV</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div> <!-- FIN RESPONSIVE PC -->
        </section> <!-- FIN SECTION PRÉSENTATION -->

        <!-- SECTION COMPÉTENCES -->
        <section id="competences">
            <div class="diviseur_noir"></div>
            <div class="heading">
                <h2>Compétences</h2>
            </div>
            <!-- CAROUSEL -->
            <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li> 
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                    <li data-target="#myCarousel" data-slide-to="5"></li> 
                    <li data-target="#myCarousel" data-slide-to="6"></li>
                    <li data-target="#myCarousel" data-slide-to="7"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="competences">
                            <li><img src="assets/images/logohtml.png" alt="Logo HTML"><p><span id="on"></span></p></li>
                        </div>
                    </div>
                    <div class="item">
                        <div class="competences">
                            <li><img src="assets/images/logocss.svg" alt="Logo HTML"><p><span id="on"></span></p></li>
                        </div>      
                    </div>
                    <div class="item">
                        <div class="competences">
                            <li><img src="assets/images/logojquery.png" alt="Logo HTML"><p><span id="on"></span></p></li>
                        </div>      
                    </div>
                    <div class="item">
                        <div class="competences">
                            <li><img src="assets/images/logobootstrap.png" alt="Logo HTML"><p><span id="on"></span></p></li>
                        </div>      
                    </div>
                    <div class="item">
                        <div class="competences">
                            <li><img src="assets/images/logojavascript.png" alt="Logo HTML"><p><span id="on"></span></p></li>
                        </div>      
                    </div>
                    <div class="item">
                        <div class="competences">
                            <li><img src="assets/images/logophp.png" alt="Logo HTML"><p><span id="on"></span></p></li>
                        </div>      
                    </div>
                    <div class="item">
                        <div class="competences">
                            <li><img src="assets/images/logosql.png" alt="Logo HTML"><p><span id="on"></span></p></li>
                        </div>      
                    </div>
                    <div class="item">
                        <div class="competences">
                            <li><img src="assets/images/logowordpress.png" alt="Logo HTML"><p><span id="on"></span></p></li>
                        </div>      
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev" role="button">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next" role="button">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div> <!-- FIN CAROUSEL -->
        </section> <!-- FIN SECTION COMPÉTENCES -->

        <!-- SECTION EXPÉRIENCE PROFESSIONELLE -->
        <section id="experience_professionelle">
            <div class="container">
                <div class="diviseur_blanc"></div>
                <div class="heading">
                    <h2>Expérience Professionelle</h2>
                </div>
                <!-- LISTE TIMELINE -->
                <ul class="timeline">
                    <li>
                        <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                        <div class="timeline-panel-container">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Introduction au Développement Web / Mise en place</h3>
                                    <h4>Première année de BTS</h4>
                                    <p class="text-muted"><small class="fas fa-clock"></small>12/09/2019</p>
                                    <hr>
                                </div>
                                <p></p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                        <div class="timeline-panel-container-inverted">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>HTML / CSS et Bootstrap</h3>
                                    <h4>Première année de BTS</h4>
                                    <p class="text-muted"><small class="fas fa-clock"></small>19/09/2019 - 12/12/2019</p>
                                    <hr>
                                </div>
                                <p>Apprendre HTML et CSS et créer un site Web.</p>
                                <p>Créer une page Web interactive.</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                        <div class="timeline-panel-container">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>jQuery, PHP et MySQL</h3>
                                    <h4>Première année de BTS</h4>
                                    <p class="text-muted"><small class="fas fa-clock"></small>09/01/2020 - 16/04/2020</p>
                                    <hr>
                                </div>
                                <p>Apprendre jQuery.</p>
                                <p>Apprendre à utiliser PHP et les base de données SQL.</p>
                            </div>
                        </div>
                    </li>
                </ul> <!-- FIN LISTE TIMELINE -->
            </div> <!-- FIN SECTION CONTAINER -->
        </section> <!-- FIN SECTION EXPÉRIENCE PROFESSIONELLE -->

        <!-- SECTION ÉDUCATION -->
        <section id="education">
            <div class="container">
                <div class="diviseur_noir"></div>
                <div class="heading">
                    <h2>Education</h2>
                </div>
                <!-- DIV ÉTABLISSEMENTS SCOLAIRE -->
                <div class="zone_texte" id="scolaire">
                    <h2>Établissements scolaire</h2>
                    <div class="etablissements_scolaire">
                        <p>&rarr; <a href="https://www.education.gouv.fr/annuaire/60-oise/lassigny/college/college-abel-lefranc.html" target="_blank" title="Redirection">Collège Abel Lefranc - Lassigny - 2011 / 2015 <img src="assets/images/exterior_link_black.png" alt="Image de redirection" /></a></p>
                        <p>&rarr; <a href="http://rimbaud.lyc.ac-amiens.fr/" target="_blank" title="Redirection">Lycée Professionnel Arthur Rimbaud - Ribécourt - BAC Professionnel SEN Option AVM - 2015 / 2018 <img src="assets/images/exterior_link_black.png" alt="Image de redirection" /></a></p>
                        <p>&rarr; <a href="http://www.lycee-stvincent.fr/" target="_blank" title="Redirection">Lycée Privé Saint-Vincent - Senlis - BTS SIO Option SLAM - 2018 / 2019 <img src="assets/images/exterior_link_black.png" alt="Image de redirection" /></a></p>
                    </div>
                </div> <!-- FIN DIV ÉTABLISSEMENTS SCOLAIRE -->
            </div> <!-- FIN SECTION CONTAINER -->
        </section> <!-- FIN SECTION ÉDUCATION -->

        <!-- SECTION PROJETS -->
        <section id="projets">
            <div class="container">
                <div class="diviseur_blanc"></div>
                <div class="heading">
                    <h2>Projets</h2>
                </div>

                <!-- SECTION ROW -->
                <div class="row">
                    <!-- PROJET PORTFOLIO V.1.1 -->
                    <div class="col-sm-4">
                        <a class="thumbnail myBtn_multi" title="Portfolio v1.1"><img class="image_projet" src="assets/images/portfolio_v1.1.PNG" alt="Portfolio v1.1"></a>
                        <div class="modal modal_multi">
                            <div class="modal-content">
                                <span class="close close_multi">&#935;</span>
                                <h2>Portfolio v1.1</h2>
                                <hr>
                                <div class="lien_projet">
                                    <a href="index.php" title="Jeu du serpent">Lien vers le projet<img src="assets/images/exterior_link.png" alt="Image de redirection" /></a>
                                </div>
                                <hr>
                                <div class="description_projet">
                                    <h3>Informations</h3>
                                    <p>Date de conception : 05/09/2019</p>
                                    <p>J'ai réalisé ce portfolio dans le cadre de mes études, il me permet de présenter les divers projets sur lesquels j'ai pu travailler et mes compétences.</p>
                                </div>
                                <hr>
                                <div class="images_projets">
                                    <h3>Technologies</h3>
                                    <img src="assets/images/logohtml.png" alt="Logo HTML">
                                    <img src="assets/images/logocss.svg" alt="Logo CSS">
                                </div>
                                <hr>
                                <div class="captures_projets">
                                    <h3>Captures d'écran</h3>
                                    <img src="assets/images/capture_portfolio.jpg" alt="Capture d'écran du portfolio">
                                    <img src="assets/images/capture2_portfolio.jpg" alt="Capture d'écran du portfolio">
                                    <img src="assets/images/capture3_portfolio.jpg" alt="Capture d'écran du portfolio">
                                </div>
                                <hr>
                                <div class="description_projet">
                                    <h3>Bilan</h3>
                                    <p>Ce projet ma permit de comprendre comment fonctionne le HTML et le CSS, apprendre à utiliser ces technologies correctement.</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- FIN PROJET PORTFOLIO V.1.1 -->

                    <!-- PROJET PORTFOLIO V.1.2 -->
                    <div class="col-sm-4">
                        <a class="thumbnail myBtn_multi" title="Portfolio v1.2"><img class="image_projet" src="assets/images/portfolio_v1.2.PNG" alt="Portfolio v1.2"></a>
                        <div  class="modal modal_multi">
                            <div class="modal-content">
                                <span class="close close_multi">&#935;</span>
                                <h2>Portfolio v1.2</h2>
                                <hr>
                                <div class="lien_projet">
                                    <a href="index.php" title="Jeu du serpent">Lien vers le projet<img src="assets/images/exterior_link.png" alt="Image de redirection" /></a>
                                </div>
                                <hr>
                                <div class="description_projet">
                                    <h3>Informations</h3>
                                    <p>Date de conception : --/--/2019</p>
                                    <p>J'ai réalisé ce portfolio dans le cadre de mes études, il me permet de présenter les divers projets sur lesquels j'ai pu travailler et mes compétences.</p>
                                </div>
                                <hr>
                                <div class="images_projets">
                                    <h3>Technologies</h3>
                                    <img src="assets/images/logohtml.png" alt="Logo HTML">
                                    <img src="assets/images/logocss.svg" alt="Logo CSS">
                                    <img src="assets/images/logojquery.png" alt="Logo jQuery">
                                    <img src="assets/images/logobootstrap.png" alt="Logo Bootstrap">
                                </div>
                                <hr>
                                <div class="captures_projets">
                                    <h3>Captures d'écran</h3>
                                    <img src="assets/images/capture_portfolio.jpg" alt="Capture d'écran du portfolio">
                                    <img src="assets/images/capture2_portfolio.jpg" alt="Capture d'écran du portfolio">
                                    <img src="assets/images/capture3_portfolio.jpg" alt="Capture d'écran du portfolio">
                                </div>
                                <hr>
                                <div class="description_projet">
                                    <h3>Bilan</h3>
                                    <p>Ce projet ma permit de comprendre comment fonctionne le HTML et le CSS, apprendre à utiliser ces technologies correctement. Mais également jQuery pour l'animation de mon site et Bootstrap.</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- FIN PROJET PORTFOLIO V.1.2 -->
                    
                    <!-- PROJET JEU DU SERPENT -->
                    <div class="col-sm-4">
                        <a class="thumbnail myBtn_multi" title="Jeu du serpent"><img class="image_projet" src="assets/images/jeu_du_serpent.PNG" alt="Le jeu du serpent" /></a>
                        <div  class="modal modal_multi">
                            <div class="modal-content">
                                <span class="close close_multi">&#935;</span>
                                <h2>Jeu du serpent</h2>
                                <hr>
                                <div class="lien_projet">
                                    <a href="assets/projets/jeu_du_serpent/index.html" title="Jeu du serpent" target="_blank">Lien vers le projet<img src="assets/images/exterior_link.png" alt="Image de redirection" /></a>
                                </div>
                                <hr>
                                <div class="description_projet">
                                    <h3>Informations</h3>
                                    <p>Date de conception : 24/04/2019</p>
                                    <p>C'est un projet de classe qui ma permis de m'exercer au JavaScript.</p>
                                </div>
                                <hr>
                                <div class="images_projets">
                                    <h3>Technologies</h3>
                                    <img src="assets/images/logohtml.png" alt="Logo HTML">
                                    <img src="assets/images/logocss.svg" alt="Logo CSS">
                                    <img src="assets/images/logojavascript.png" alt="Logo JavaScript">
                                </div>
                                <hr>
                                <div class="captures_projets">
                                    <h3>Captures d'écran</h3>
                                    <img src="assets/images/jeu_du_serpent.PNG" alt="Capture d'écran du jeu du serpent">
                                    <img src="assets/images/menu_jeu_du_serpent.jpg" alt="Capture d'écran du jeu du serpent">
                                    <img src="assets/images/niveau_jeu_du_serpent.jpg" alt="Capture d'écran du jeu du serpent">
                                </div>
                                <hr>
                                <div class="description_projet">
                                    <h3>Bilan</h3>
                                    <p>Ce projet ma permit d'utiliser JavaScript, pour réaliser le Jeu du serpent.</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- FIN PROJET JEU DU SERPENT -->
                </div> <!-- FIN SECTION ROW -->

                <!-- SECTION ROW -->
                <div class="row">
                    <!-- PROJET PISCINE - FASHION & BEAUTY -->
                    <div class="col-sm-4">
                        <a class="thumbnail myBtn_multi" title="Projet piscine - Fashion &#38; Beauty"><img class="image_projet" src="assets/images/page_principale_projet_piscine.jpg" alt="Projet piscine - Fashion &#38; Beauty" /></a>
                        <div  class="modal modal_multi">
                            <div class="modal-content">
                                <span class="close close_multi">&#935;</span>
                                <h2>Projet piscine - Fashion &#38; Beauty</h2>
                                <hr>
                                <div class="lien_projet">
                                    <a href="assets/projets/projet_piscine/index.php" title="Projet piscine - Fashion &#38; Beauty" target="_blank">Lien vers le projet<img src="assets/images/exterior_link.png" alt="Image de redirection" /></a>
                                </div>
                                <hr>
                                <div class="description_projet">
                                    <h3>Informations</h3>
                                    <p>Date de conception : 18/10/2019 au 23/10/2019</p>
                                    <p>C'est un projet de classe qui ma permis de m'exercer au HTML, CSS, Bootstrap mais également au jQuery.</p>
                                </div>
                                <hr>
                                <div class="images_projets">
                                    <h3>Technologies</h3>
                                    <img src="assets/images/logohtml.png" alt="Logo HTML">
                                    <img src="assets/images/logocss.svg" alt="Logo CSS">
                                    <img src="assets/images/logojquery.png" alt="Logo jQuery">
                                    <img src="assets/images/logobootstrap.png" alt="Logo Bootstrap">
                                    <img src="assets/images/logophp.png" alt="Logo PHP">

                                </div>
                                <hr>
                                <div class="captures_projets">
                                    <h3>Captures d'écran</h3>
                                    <img src="assets/images/page_principale_projet_piscine.jpg" alt="Capture d'écran du portfolio">
                                    <img src="assets/images/page_principale_articles_projet_piscine.jpg" alt="Capture d'écran du portfolio">
                                    <img src="assets/images/page_faq_projet_piscine.jpg" alt="Capture d'écran du portfolio">
                                    <img src="assets/images/articles_projet_piscine.jpg" alt="Capture d'écran du portfolio">
                                </div>
                                <hr>
                                <div class="description_projet">
                                    <h3>Bilan</h3>
                                    <p>Ce projet ma permit d'approfondir mes connaissances dans le développement front et back.</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- FIN PROJET PISCINE - FASHION & BEAUTY -->
                </div> <!-- SECTION ROW -->
            </div> <!-- FIN SECTION CONTAINER -->
        </section> <!-- FIN SECTION ÉDUCATION -->

        <!-- SECTION CONTACT -->
        <section id="contact">
            <!-- SECTION CONTAINER -->
            <div class="container">
                <div class="diviseur_noir"></div>
                <div class="heading">
                    <h2>Contact</h2>
                </div>
                <!-- FORMULAIRE DE CONTACT -->
                <form class="container my-5">
                    <div class="row">
                        <fieldset class="col-sm-6 form-group">
                            <div class="form-group">
                                <label class="form-control-label" for="nom">Nom</label>
                                <input class="form-control" id="nom" placeholder="Votre nom de famille" type="text" required>
                            </div>
                            <!-- form-group -->

                            <div class="form-group">
                                <label class="form-control-label" for="prenom">Prénom</label>
                                <input class="form-control" id="prenom" placeholder="Votre prénom" type="text" required>
                            </div>
                            <!-- form-group -->
                        </fieldset>
                        <!-- fieldset -->

                        <fieldset class="form-group col-sm-6">
                            <div class="form-group">
                                <label class="form-control-label" for="email">Adresse mail</label>
                                <input class="form-control" id="email" placeholder="Votre adresse mail" type="email" required>
                            </div>
                            <!-- form-group -->

                            <div class="form-group">
                                <label class="form-control-label" for="type_entreprise">Type d'entreprise</label>
                                <select class="form-control" id="type_entreprise">
                                    <option>
                                        Entreprise individuelle
                                    </option>
                                    <option value="eirl">
                                        EIRL
                                    </option>
                                    <option value="sarl">
                                        SARL
                                    </option>
                                    <option value="eurl">
                                        EURL
                                    </option>
                                    <option value="sas">
                                        SAS
                                    </option>
                                    <option value="sasu">
                                        SASU
                                    </option>
                                    <option value="sa">
                                        SA
                                    </option>
                                    <option value="snc">
                                        SNC
                                    </option>
                                </select>
                            </div>
                            <!-- form-group -->
                        </fieldset>
                        <div class="form-group col-12">
                            <label class="form-control-label" for="message">Votre message</label> 
                            <textarea class="form-control" id="message" style="resize: none;" placeholder="Écrivez ici votre message (280 caractères max.)" maxlength="280" rows="3" required></textarea>
                        </div>
                        <!-- form-group -->
                        <!-- fieldset -->
                    </div>
                    <button class="btn btn-primary" type="submit">Envoyer</button>
                </form>
                <!-- COORDONNÉES -->
                <div class="coordonnee">
                    <p>Marius THIESSET</p>
                    <p>36 rue du Parc Saint-Jean, Beaulieu-les-Fontaines 60310</p>
                    <p>E-mail : <a href="mailto:mariusthiesset@gmail.com" target="_blank" title="Redirection">mariusthiesset@gmail.com<img src="assets/images/exterior_link_black.png" alt="Image de redirection" /></a></p>
                </div> <!-- FIN COORDONNÉES -->
            </div> <!-- FIN SECTION CONTAINER -->
        </section> <!-- FIN SECTION CONTACT -->

        <!-- FOOTER -->
        <footer class="text-center">
            <a href="#presentation">
                <span class="fas glyphicon glyphicon-menu-up"></span>
            </a>
            <h5>Marius THIESSET &copy; 2019</h5>
        </footer> <!-- FIN FOOTER -->

        <!-- JAVASCRIPT -->
        <script src="assets/js/script.js"></script>
        <!-- FIN JAVASCRIPT -->

    </body> <!-- FIN BODY -->
</html> <!-- Portfolio de Marius THIESSET - Première année de BTS SIO Option SLAM - 2019 / 2020 -->