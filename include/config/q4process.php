<?php
$validbirthdate = "";
$e1date = "";
$e2date = "";
$e3date = "";
$e4date = "";

$e1valid = false;
$e2valid = false;
$e3valid = false;
$e4valid = false;

$req_q3 = $bdd->query("SELECT * FROM `q4`");
while($data = $req_q3->fetch()){
  if($data["equipe"] == "rep"){
    $validbirthdate = $data["date"];
  }

  if($data["answered"] == "false"){
    $allanswered = false;
  }
  //e1
  if($data["equipe"] == $e1){
    $e1date = $data["date"];
    if($data["answered"] == "true"){
      $e1answered = true;
    }
    if($data["date"] == $validbirthdate){
      $e1valid = true;
    }
  }
  //e2
  if($data["equipe"] == $e2){
    $e2date = $data["date"];
    if($data["answered"] == "true"){
      $e2answered = true;
    }
    if($data["date"] == $validbirthdate){
      $e2valid = true;
    }
  }
  //e3
  if($data["equipe"] == $e3){
    $e3date = $data["date"];
    if($data["answered"] == "true"){
      $e3answered = true;
    }
    if($data["date"] == $validbirthdate){
      $e3valid = true;
    }
  }
  //e4
  if($data["equipe"] == $e4){
    $e4date = $data["date"];
    if($data["answered"] == "true"){
      $e4answered = true;
    }
    if($data["date"] == $validbirthdate){
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
  $rendere1 = "<br/><br/><h4 style=\"text-align:center;\">Date : ".$e1date."</h4>";
  if(!$e1valid){
    $rendere1 .= "<h4 style=\"text-align:center;\">Bonne réponse : ".$validbirthdate."</h4>";
  }

  $rendere2 = "<br/><br/><h4 style=\"text-align:center;\">Date : ".$e2date."</h4>";
  if(!$e2valid){
    $rendere2 .= "<h4 style=\"text-align:center;\">Bonne réponse : ".$validbirthdate."</h4>";
  }

  $rendere3 = "<br/><br/><h4 style=\"text-align:center;\">Date : ".$e3date."</h4>";
  if(!$e3valid){
    $rendere3 .= "<h4 style=\"text-align:center;\">Bonne réponse : ".$validbirthdate."</h4>";
  }

  $rendere4 = "<br/><br/><h4 style=\"text-align:center;\">Date : ".$e4date."</h4>";
  if(!$e4valid){
    $rendere4 .= "<h4 style=\"text-align:center;\">Bonne réponse : ".$validbirthdate."</h4>";
  }
}

?>
