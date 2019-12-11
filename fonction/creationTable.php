<?php

$creationFamille =<<<EOT
CREATE TABLE IF NOT EXISTS famille (
famille TINYINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
name TEXT(500) NOT NULL
) ;
EOT ;

$creationCards =<<<CREATION
CREATE TABLE IF NOT EXISTS cards (
ID SMALLINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
question TEXT(550) NOT NULL ,
reponse TEXT(550) NOT NULL ,
famille SMALLINT UNSIGNED NOT NULL ,
niveau TINYINT UNSIGNED NOT NULL DEFAULT 1,
dateDeVue DATE NOT NULL 
) ;
CREATION ;

$Version__avec__timestamp =<<<CREATION
CREATE TABLE IF NOT EXISTS cards (
ID SMALLINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
question TEXT(550) NOT NULL ,
reponse TEXT(550) NOT NULL ,
famille SMALLINT UNSIGNED NOT NULL ,
niveau TINYINT UNSIGNED NOT NULL DEFAULT 1,
dateDeVue TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;
CREATION ;

$count = $bdd->exec($creationFamille);
$count = $bdd->exec($creationCards);