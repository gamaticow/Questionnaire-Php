<?php

session_start();
if($_SESSION["admin"] == true){
  if(empty($_GET["id"])){
    echo("ID !");
  }else{
    define('__GAMA__', true);
    require('include/config/bdd.php');

    $id = $_GET["id"];

    $groupe = $bdd->exec('DELETE FROM `groupe` WHERE `cle` = \''. $id .'\'');
    $q1 = $bdd->exec('DELETE FROM `q1` WHERE `equipe` = \''. $id .'\'');
    $q2 = $bdd->exec('DELETE FROM `q2` WHERE `equipe` = \''. $id .'\'');
    $q3 = $bdd->exec('DELETE FROM `q3` WHERE `equipe` = \''. $id .'\'');
    $q4 = $bdd->exec('DELETE FROM `q4` WHERE `equipe` = \''. $id .'\'');
    $q5 = $bdd->exec('DELETE FROM `q5` WHERE `equipe` = \''. $id .'\'');
    $q6 = $bdd->exec('DELETE FROM `q6` WHERE `equipe` = \''. $id .'\'');
    $q7 = $bdd->exec('DELETE FROM `q7` WHERE `equipe` = \''. $id .'\'');
    $q8 = $bdd->exec('DELETE FROM `q8` WHERE `equipe` = \''. $id .'\'');
    $q9 = $bdd->exec('DELETE FROM `q9` WHERE `equipe` = \''. $id .'\'');
    $q10 = $bdd->exec('DELETE FROM `q10` WHERE `equipe` = \''. $id .'\'');

    echo $id ." deleted !";
  }
}else{
  echo "Admin permission require";
}

?>
