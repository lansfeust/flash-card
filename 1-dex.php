<?php

include_once('fonction/racine.php') ;

$ite = $_COOKIE["SERVEUR"] ;
$racine = $_COOKIE["racine"] ;

echo '<h1> $ite = '.$ite.'</h1>' ;
include_once("$racine/Vue/head.html") ;
include_once("$racine/Vue/menu.html") ;

include_once("$racine/fonction/bdd.php") ;// Efface - moi










?>