<?php

if(!defined('__GAMA__')){
	header("Location: ../");
	exit();
}
try{
	$bdd = new PDO('mysql:host=localhost;dbname=quarante;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
}catch(Exception $e){
	die('Erreur : '. $e->getMessage());
}

//requete $reponse = $bdd->query('requete');

?>