<?php session_start(); ?>

<html>
    <head>
        <title>Connexion - Administration</title>
        <link rel="icon" type="image/png" href="../images/icon.png">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" type="text/css" href="../css/style_backoffice.css">
        <link rel="stylesheet" type="text/css" href="../css/responsive_backoffice.css">
    </head>

    <body>
        <div class="container">
            <div id="login-box">

                <?php
                require_once 'includes/bdd.php';

                $usernameNonValide = false;
                $passwordNonValide = false;
                $identifiantsIncorrects = false;

                if (!empty($_POST["username"]) && !empty($_POST["password"])) {
                    $requete = $con->prepare('SELECT id_compte FROM compte_administration WHERE username = :username AND password = :password');
                    $requete->bindParam(':username', $username);
                    $requete->bindParam(':password', $password);

                    $username = $_POST['username'];
                    $password = hash('sha256', $_POST['password']);

                    $requete->execute();
                    $resultat = $requete->fetch();

                    if ($resultat === false) {
                        $identifiantsIncorrects = 'Les identifiants sont invalides.';
                    }else{
                        header('Location: menu_backoffice.php');
                    }
                } elseif (isset($_POST["submit"])) {
                    // Si nom d'utilisateur vide : afficher message d'erreur
                    if (empty($_POST["username"])) {
                        $usernameNonValide = 'Veuillez saisir un nom d\'utilisateur.';
                    }

                    // Si mot de passe vide : afficher message d'erreur
                    if (empty($_POST["password"])) {
                        $passwordNonValide = 'Veuillez saisir un mot de passe.';
                    }
                }
                ?>

                <div class="logo">
                    <img src="../images/icon.png" alt="Logo ICON" class="img img-responsive img-circle center-block"/>
                    <h1 class="logo-caption"><span class="tweak">Back</span>office</h1>
                </div>

                <div class="controls">
                    <form action="" method="post">
                        <label for="username"></label>
                        <input type="text" name="username" id="username" placeholder="Nom d'utilisateur" class="form-control" />
                        <?php
                        if ($usernameNonValide !== false) {
                            echo '<span style="color: #ff5252;">'.$usernameNonValide.'</span><p></p>';
                        }
                        ?>

                        <label for="password"></label>
                        <input type="password" name="password" id="password" placeholder="Mot de passe" class="form-control" />
                        <?php
                        if ($passwordNonValide !== false) {
                            echo '<span style="color: #ff5252;">'.$passwordNonValide.'</span><p></p>';
                        }

                        if ($identifiantsIncorrects !== false) {
                            echo '<p></p>';
                            echo '<span style="color: #ff5252; padding: 3px;">'.$identifiantsIncorrects.'</span>';
                        }
                        ?>
                        <button type="submit" name="submit" class="btn btn-default btn-block btn-custom">Connexion</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>