<?php
if( empty($_SESSION['username']) )
   header("Location: connexion.php");
   exit;
?>