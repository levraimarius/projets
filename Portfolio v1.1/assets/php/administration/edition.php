<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../../css/style_backoffice.css">
    </head>

    <body>

        <?php
        ini_set("display_errors",0);error_reporting(0);
        require_once '../includes/bdd.php';
        $query = $con->prepare('select * from presentation where id=1');
        $query->execute();
        $message = $query->fetch();
        ?>
        <h1>Edition du message</h1>

        <div id="edition">
            <form method="post" action="#">
                <center><textarea class="edition" id="message" name="message" cols="120" rows="10"><?php echo $message[1];?></textarea></center>
                <button style="float: right; border-radius: 2px; margin: 120px; padding: 8px; background:#ff5252; color: white;" type="submit" name="modifier">Modifier</button>
            </form>
        </div>

        <?php
        $query = $con->prepare('UPDATE presentation SET message=:message where id=1');

        $query->bindParam(':message', $message);

        $message =$_POST['message'];
        $query->execute();
        if(isset($_POST['modifier'])){
            header('Location: modif_portfolio.php');
        }
        ?>
    </body>
</html>