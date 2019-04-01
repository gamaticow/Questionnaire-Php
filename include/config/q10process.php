<?php

$e1m1 = "";
$e2m1 = "";
$e3m1 = "";
$e4m1 = "";

$e1m2 = "";
$e2m2 = "";
$e3m2 = "";
$e4m2 = "";

$e1m3 = "";
$e2m3 = "";
$e3m3 = "";
$e4m3 = "";

$req_q3 = $bdd->query("SELECT * FROM `q10`");
while($data = $req_q3->fetch()){

  if($data["answered"] == "false"){
    $allanswered = false;
  }

  //e1
  if($data["equipe"] == $e1){
    $e1m1 = $data["mot1"];
    $e1m2 = $data["mot2"];
    $e1m3 = $data["mot3"];
    if($data["answered"] == "true"){
      $e1answered = true;
    }
  }
  //e2
  if($data["equipe"] == $e2){
    $e2m1 = $data["mot1"];
    $e2m2 = $data["mot2"];
    $e2m3 = $data["mot3"];
    if($data["answered"] == "true"){
      $e2answered = true;
    }
  }
  //e3
  if($data["equipe"] == $e3){
    $e3m1 = $data["mot1"];
    $e3m2 = $data["mot2"];
    $e3m3 = $data["mot3"];
    if($data["answered"] == "true"){
      $e3answered = true;
    }
  }
  //e4
  if($data["equipe"] == $e4){
    $e4m1 = $data["mot1"];
    $e4m2 = $data["mot2"];
    $e4m3 = $data["mot3"];
    if($data["answered"] == "true"){
      $e4answered = true;
    }
  }
}

//couleur de fond
if($e1 == "nd"){
  $ce1 = $noColor;
}else if(!$e1answered){
  $ce1 = $waitcolor;
}else{
  $ce1 = $q10c;
}
if($e2 == "nd"){
  $ce2 = $noColor;
}else if(!$e2answered){
  $ce2 = $waitcolor;
}else{
  $ce2 = $q10c;
}
if($e3 == "nd"){
  $ce3 = $noColor;
}else if(!$e3answered){
  $ce3 = $waitcolor;
}else{
  $ce3 = $q10c;
}
if($e4 == "nd"){
  $ce4 = $noColor;
}else if(!$e4answered){
  $ce4 = $waitcolor;
}else{
  $ce4 = $q10c;
}

//render texte
if($allanswered){
  $rendere1 = "<br/><h4 style=\"text-align:center;\">Mot 1 : ".$e1m1."</h4>";
  $rendere1 .= "<h4 style=\"text-align:center;\">Mot 2 : ".$e1m2."</h4>";
  $rendere1 .= "<h4 style=\"text-align:center;\">Mot 3 : ".$e1m3."</h4>";

  $rendere2 = "<br/><h4 style=\"text-align:center;\">Mot 1 : ".$e2m1."</h4>";
  $rendere2 .= "<h4 style=\"text-align:center;\">Mot 2 : ".$e2m2."</h4>";
  $rendere2 .= "<h4 style=\"text-align:center;\">Mot 3 : ".$e2m3."</h4>";

  $rendere3 = "<br/><h4 style=\"text-align:center;\">Mot 1 : ".$e2m1."</h4>";
  $rendere3 .= "<h4 style=\"text-align:center;\">Mot 2 : ".$e3m2."</h4>";
  $rendere3 .= "<h4 style=\"text-align:center;\">Mot 3 : ".$e3m3."</h4>";

  $rendere4 = "<br/><h4 style=\"text-align:center;\">Mot 1 : ".$e4m1."</h4>";
  $rendere4 .= "<h4 style=\"text-align:center;\">Mot 2 : ".$e4m2."</h4>";
  $rendere4 .= "<h4 style=\"text-align:center;\">Mot 3 : ".$e4m3."</h4>";
}

?>
