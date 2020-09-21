<html>
    <head>
        <title>Administration - Confirmation</title>
    </head>

    <?php
    ini_set("display_errors",0);error_reporting(0);

    require_once '../includes/bdd.php';

    $query = $con->prepare('DELETE FROM messagerie_formulaire WHERE id_messages = :id;');
    $query->bindParam(':id', $id);
    $id =$_GET['id'];
    $query->execute();

    header('Location: messages_formulaire.php');

    ?>

</html>