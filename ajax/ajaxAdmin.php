<?php
session_start();

if($_SESSION["admin"] == true){

define('__GAMA__', true);
require('../include/config/bdd.php');
$d = array();

if($_POST["changePage"] == "true"){
  $cp = "erreur";
  $np = "erreur";
  $next = false;

  $currentPage = $bdd->query("SELECT * FROM `page`");
  while($data = $currentPage->fetch()){
    $cp = $data["page"];
  }

  $req_pages = $bdd->query("SELECT * FROM `allpages`");
  while($data = $req_pages->fetch()){
    if($next){
      $np = $data["pages"];
    }

    if($data["pages"] == $cp){
      $next = true;
    }else{
      $next = false;
    }
  }

  $upPa = $bdd->prepare('UPDATE `page` SET `page` = :newPage WHERE `page`.`ID` = 1');
  $upPa->execute(array(
    'newPage' => $np
  ));
}

$upEq = $bdd->prepare('UPDATE `adminpanel` SET `e1` = :e1, `e2` = :e2, `e3` = :e3, `e4` = :e4 WHERE `adminpanel`.`admin` = :ID');
$upEq->execute(array(
  'ID' => $_SESSION["ID"],
  'e1' => $_POST['e1'],
  'e2' => $_POST['e2'],
  'e3' => $_POST['e3'],
  'e4' => $_POST['e4']
));

$d["erreur"] = "0";

$d["result"] = file_get_contents("http://localhost/include/adminpanel.php?ID=".$_SESSION["ID"]);


if($d["result"] != $_POST["la"]){
  $d["erreur"] = "1";
}

echo json_encode($d);
}
?>
