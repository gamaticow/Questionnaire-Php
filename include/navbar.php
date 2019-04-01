<?php

$default_name = "nd*";
$name = $default_name;
$cle = "";
if(isset($_SESSION["ID"])){
  $req_name = $bdd->query("SELECT * FROM `groupe` WHERE `cle` = \"". $_SESSION["ID"] ."\"");

  while($data = $req_name->fetch()){
    $name = $data['nom'];
    $cle = $data["cle"];
  }
}

if($name != $default_name && $_SESSION["admin"] == false){
 ?>
 <nav id="ndt">
     <div class="nav-wrapper"><span class="brand-logo center"><?php echo $name ?></span></div>
 </nav>
 <?php
}
 ?>
