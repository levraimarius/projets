<html>
    <head>
        <title>Administration - Gestion</title>
        <link rel="stylesheet" type="text/css" href="../../css/style_backoffice.css">
    </head>

    <body>
        <div id="menu">
            <ul>
                <li style="float: left;"><a class="active" href="../menu_backoffice.php">&#10094; Retour</a></li>
            </ul>
        </div>

        <?php
        $ind = 0;

        require_once '../includes/bdd.php';

        $query = $con->prepare('select * from messagerie_formulaire');
        $query->execute();
        $articles = $query->fetchAll();

        echo '<h1>Messages reçu du formulaire de contact</h1><br><br>';
        echo '<table id="customers">';
        echo '<tr><th>Prénom</th>';
        echo '<th>Entreprise</th>';
        echo '<th>E-mail</th>';
        echo '<th>Message</th>';
        echo '<th></th>';
        foreach ($articles as $value){
            echo '<tr><td>'.$articles[$ind][1].'</td>';
            echo '<td>'.$articles[$ind][2].'</td>';
            echo '<td>'.$articles[$ind][3].'</td>';
            echo '<td style="text-align: left;" class="message">'.$articles[$ind][4].'</td>';
            echo '<td><a href="supp_messagerie.php?id='.$articles[$ind][0].'">Supprimer</a></td></tr>';
            $ind++;
        }
        echo "</table>";
        ?>
    </body>
</html>