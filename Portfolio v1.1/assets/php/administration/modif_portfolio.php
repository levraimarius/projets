<html>
    <head>

        <title>Administration - Modification</title>

        <link rel="stylesheet" type="text/css" href="../../css/style_backoffice.css">
    </head>
    <body>
        <div id="menu">
            <ul>
                <li style="float: left;"><a class="active" href="../menu_backoffice.php">&#10094; Retour</a></li>
            </ul>
        </div>

        <center><h1>Modifications</h1></center>
        <?php
        $ind = 0;
        require_once '../includes/bdd.php';
        $query = $con->prepare('select * from presentation');
        $query->execute();
        $articles = $query->fetchAll();
        foreach ($articles as $id => $titre){
            echo '<table id="customers"><tr><th>Présentation</th></tr><tr><td><p>'.$articles[$ind][1].'</p></td>';
            echo "<td><a href='edition.php'>&#62;&#62; Editer le message</a></td></tr></table>";
            $ind = $ind + 1;
        }
        ?>
        
        <?php
        $query = $con->prepare('select * from competence');
        $query->execute();
        $articles = $query->fetchAll();
        foreach ($articles as $id => $titre){
            echo '<table id="customers"><tr><th>Compétences</th></tr><tr><td><p>'.$articles[$ind][1].'</p></td>';
            echo "<td><a href='edition.php'>&#62;&#62; Editer le message</a></td></tr></table>";
            $ind = $ind + 1;
        }
        ?>
    </body>
</html>