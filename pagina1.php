<?php
session_start();


$_SESSION['nome'] = "pedro";


header("location:pagina2.php");
exit;
?>
