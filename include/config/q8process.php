<?php
$valida = "";
$validc = "";

$e1a = "";
$e2a = "";
$e3a = "";
$e4a = "";

$e1c = "";
$e2c = "";
$e3c = "";
$e4c = "";

$e1valid = false;
$e2valid = false;
$e3valid = false;
$e4valid = false;

$req_q3 = $bdd->query("SELECT * FROM `q8`");
while($data = $req_q3->fetch()){
  if($data["equipe"] == "rep"){
    $valida = $data["astrologique"];
    $validc = $data["chinoix"];
  }

  if($data["answered"] == "false"){
    $allanswered = false;
  }

  //e1
  if($data["equipe"] == $e1){
    $e1a = $data["astrologique"];
    $e1c = $data["chinoix"];
    if($data["answered"] == "true"){
      $e1answered = true;
    }
    if($data["astrologique"] == $valida && $data["chinoix"] == $validc){
      $e1valid = true;
    }
  }
  //e2
  if($data["equipe"] == $e2){
    $e2a= $data["astrologique"];
    $e2c = $data["chinoix"];
    if($data["answered"] == "true"){
      $e2answered = true;
    }
    if($data["astrologique"] == $valida && $data["chinoix"] == $validc){
      $e2valid = true;
    }
  }
  //e3
  if($data["equipe"] == $e3){
    $e3a = $data["astrologique"];
    $e3c = $data["chinoix"];
    if($data["answered"] == "true"){
      $e3answered = true;
    }
    if($data["astrologique"] == $valida && $data["chinoix"] == $validc){
      $e3valid = true;
    }
  }
  //e4
  if($data["equipe"] == $e4){
    $e4a = $data["astrologique"];
    $e4c = $data["chinoix"];
    if($data["answered"] == "true"){
      $e4answered = true;
    }
    if($data["astrologique"] == $valida && $data["chinoix"] == $validc){
      $e4valid = true;
    }
  }
}

//couleur de fond
if($e1 == "nd"){
  $ce1 = $noColor;
}else if(!$e1answered){
  $ce1 = $waitcolor;
}else if($e1valid){
  $ce1 = $validColor;
}else{
  $ce1 = $wrongColor;
}
if($e2 == "nd"){
  $ce2 = $noColor;
}else if(!$e2answered){
  $ce2 = $waitcolor;
}else if($e2valid){
  $ce2 = $validColor;
}else{
  $ce2 = $wrongColor;
}
if($e3 == "nd"){
  $ce3 = $noColor;
}else if(!$e3answered){
  $ce3 = $waitcolor;
}else if($e3valid){
  $ce3 = $validColor;
}else{
  $ce3 = $wrongColor;
}
if($e4 == "nd"){
  $ce4 = $noColor;
}else if(!$e4answered){
  $ce4 = $waitcolor;
}else if($e4valid){
  $ce4 = $validColor;
}else{
  $ce4 = $wrongColor;
}

//render texte
if($allanswered){
  $rendere1 = "<br/><h4 style=\"text-align:center;\">Astrologique : ".$e1a."</h4>";
  $rendere1 .= "<h4 style=\"text-align:center;\">Chinoix : ".$e1c."</h4>";
  if(!$e1valid){
    $rendere1 .= "<h4 style=\"text-align:center;\">Bonne réponse : ".$valida."</h4>";
    $rendere1 .= "<h4 style=\"text-align:center;\">Bonne réponse : ".$validc."</h4>";
  }

  $rendere2 = "<br/><h4 style=\"text-align:center;\">Astrologique : ".$e2a."</h4>";
  $rendere2 .= "<h4 style=\"text-align:center;\">Chinoix : ".$e2c."</h4>";
  if(!$e2valid){
    $rendere2 .= "<h4 style=\"text-align:center;\">Bonne réponse : ".$valida."</h4>";
    $rendere2 .= "<h4 style=\"text-align:center;\">Bonne réponse : ".$validc."</h4>";
  }

  $rendere3 = "<br/><h4 style=\"text-align:center;\">Astrologique : ".$e3a."</h4>";
  $rendere3 .= "<h4 style=\"text-align:center;\">Chinoix : ".$e3c."</h4>";
  if(!$e3valid){
    $rendere3 .= "<h4 style=\"text-align:center;\">Bonne réponse : ".$valida."</h4>";
    $rendere3 .= "<h4 style=\"text-align:center;\">Bonne réponse : ".$validc."</h4>";
  }

  $rendere4 = "<br/><h4 style=\"text-align:center;\">Astrologique : ".$e4a."</h4>";
  $rendere4 .= "<h4 style=\"text-align:center;\">Chinoix : ".$e4c."</h4>";
  if(!$e4valid){
    $rendere4 .= "<h4 style=\"text-align:center;\">Bonne réponse : ".$valida."</h4>";
    $rendere4 .= "<h4 style=\"text-align:center;\">Bonne réponse : ".$validc."</h4>";
  }
}

?>
