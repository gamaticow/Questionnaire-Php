<?php

$e1score = 0;
$e2score = 0;
$e3score = 0;
$e4score = 0;

$r1 = "";
$r2 = "";

$req_q1 = $bdd->query("SELECT * FROM `q1`");
while($data = $req_q1->fetch()){
  if($data["equipe"] == "rep"){
    $r1 = $data["couleur"];
  }

  if($data["equipe"] == $e1){
    if($data["couleur"] == $r1){
      $e1score += 10;
    }
  }
  if($data["equipe"] == $e2){
    if($data["couleur"] == $r1){
      $e2score += 10;
    }
  }
  if($data["equipe"] == $e3){
    if($data["couleur"] == $r1){
      $e3score += 10;
    }
  }
  if($data["equipe"] == $e4){
    if($data["couleur"] == $r1){
      $e4score += 10;
    }
  }
}

$req_q2 = $bdd->query("SELECT * FROM `q2`");
while($data = $req_q2->fetch()){
  if($data["birthdate"] == "rep"){
    $r1 = $data["birthdate"];
  }

  if($data["equipe"] == $e1){
    if($data["birthdate"] == $r1){
      $e1score += 10;
    }
  }
  if($data["equipe"] == $e2){
    if($data["birthdate"] == $r1){
      $e2score += 10;
    }
  }
  if($data["equipe"] == $e3){
    if($data["birthdate"] == $r1){
      $e3score += 10;
    }
  }
  if($data["equipe"] == $e4){
    if($data["birthdate"] == $r1){
      $e4score += 10;
    }
  }
}

$req_q3 = $bdd->query("SELECT * FROM `q3`");
while($data = $req_q3->fetch()){
  if($data["equipe"] == "rep"){
    $r1 = $data["date"];
  }

  if($data["equipe"] == $e1){
    if($data["date"] == $r1){
      $e1score += 10;
    }
  }
  if($data["equipe"] == $e2){
    if($data["date"] == $r1){
      $e2score += 10;
    }
  }
  if($data["equipe"] == $e3){
    if($data["date"] == $r1){
      $e3score += 10;
    }
  }
  if($data["equipe"] == $e4){
    if($data["date"] == $r1){
      $e4score += 10;
    }
  }
}

$req_q4 = $bdd->query("SELECT * FROM `q4`");
while($data = $req_q4->fetch()){
  if($data["equipe"] == "rep"){
    $r1 = $data["date"];
  }

  if($data["equipe"] == $e1){
    if($data["date"] == $r1){
      $e1score += 10;
    }
  }
  if($data["equipe"] == $e2){
    if($data["date"] == $r1){
      $e2score += 10;
    }
  }
  if($data["equipe"] == $e3){
    if($data["date"] == $r1){
      $e3score += 10;
    }
  }
  if($data["equipe"] == $e4){
    if($data["date"] == $r1){
      $e4score += 10;
    }
  }
}

$req_q5 = $bdd->query("SELECT * FROM `q5`");
while($data = $req_q5->fetch()){
  if($data["equipe"] == "rep"){
    $r1 = $data["date"];
  }

  if($data["equipe"] == $e1){
    if($data["date"] == $r1){
      $e1score += 10;
    }
  }
  if($data["equipe"] == $e2){
    if($data["date"] == $r1){
      $e2score += 10;
    }
  }
  if($data["equipe"] == $e3){
    if($data["date"] == $r1){
      $e3score += 10;
    }
  }
  if($data["equipe"] == $e4){
    if($data["date"] == $r1){
      $e4score += 10;
    }
  }
}

$req_q6 = $bdd->query("SELECT * FROM `q6`");
while($data = $req_q6->fetch()){
  if($data["equipe"] == "rep"){
    $r1 = $data["date"];
  }

  if($data["equipe"] == $e1){
    if($data["date"] == $r1){
      $e1score += 10;
    }
  }
  if($data["equipe"] == $e2){
    if($data["date"] == $r1){
      $e2score += 10;
    }
  }
  if($data["equipe"] == $e3){
    if($data["date"] == $r1){
      $e3score += 10;
    }
  }
  if($data["equipe"] == $e4){
    if($data["date"] == $r1){
      $e4score += 10;
    }
  }
}

$req_q7 = $bdd->query("SELECT * FROM `q7`");
while($data = $req_q7->fetch()){
  if($data["equipe"] == "rep"){
    $r1 = $data["date"];
  }

  if($data["equipe"] == $e1){
    if($data["date"] == $r1){
      $e1score += 10;
    }
  }
  if($data["equipe"] == $e2){
    if($data["date"] == $r1){
      $e2score += 10;
    }
  }
  if($data["equipe"] == $e3){
    if($data["date"] == $r1){
      $e3score += 10;
    }
  }
  if($data["equipe"] == $e4){
    if($data["date"] == $r1){
      $e4score += 10;
    }
  }
}

$req_q8 = $bdd->query("SELECT * FROM `q8`");
while($data = $req_q8->fetch()){
  if($data["equipe"] == "rep"){
    $r1 = $data["astrologique"];
    $r2 = $data["chinoix"];
  }

  if($data["equipe"] == $e1){
    if($data["astrologique"] == $r1 && $data["chinoix"] == $r2){
      $e1score += 10;
    }
  }
  if($data["equipe"] == $e2){
    if($data["astrologique"] == $r1 && $data["chinoix"] == $r2){
      $e2score += 10;
    }
  }
  if($data["equipe"] == $e3){
    if($data["astrologique"] == $r1 && $data["chinoix"] == $r2){
      $e3score += 10;
    }
  }
  if($data["equipe"] == $e4){
    if($data["astrologique"] == $r1 && $data["chinoix"] == $r2){
      $e4score += 10;
    }
  }
}

$req_q9 = $bdd->query("SELECT * FROM `q9`");
while($data = $req_q9->fetch()){
  if($data["equipe"] == "rep"){
    $r1 = $data["legume"];
    $r2 = $data["fruit"];
  }

  if($data["equipe"] == $e1){
    if($data["legume"] == $r1 && $data["fruit"] == $r2){
      $e1score += 10;
    }
  }
  if($data["equipe"] == $e2){
    if($data["legume"] == $r1 && $data["fruit"] == $r2){
      $e2score += 10;
    }
  }
  if($data["equipe"] == $e3){
    if($data["legume"] == $r1 && $data["fruit"] == $r2){
      $e3score += 10;
    }
  }
  if($data["equipe"] == $e4){
    if($data["legume"] == $r1 && $data["fruit"] == $r2){
      $e4score += 10;
    }
  }
}

if($e1 == "nd"){
  $ce1 = $noColor;
}else if($e1score >= $e2score && $e1score >= $e3score && $e1score >= $e4score){
  $ce1 = $validColor;
}else if($e1score <= $e2score && $e1score <= $e3score && $e1score <= $e4score){
  $ce1 = $wrongColor;
}else{
  $ce1 = $q10c;
}

if($e2 == "nd"){
  $ce2 = $noColor;
}else if($e2score >= $e1score && $e2score >= $e3score && $e2score >= $e4score){
  $ce2 = $validColor;
}else if($e2score <= $e1score && $e2score <= $e3score && $e2score <= $e4score){
  $ce2 = $wrongColor;
}else{
  $ce2 = $q10c;
}

if($e3 == "nd"){
  $ce3 = $noColor;
}else if($e3score >= $e2score && $e3score >= $e1score && $e3score >= $e4score){
  $ce3 = $validColor;
}else if($e3score <= $e2score && $e3score <= $e1score && $e3score <= $e4score){
  $ce3 = $wrongColor;
}else{
  $ce3 = $q10c;
}

if($e4 == "nd"){
  $ce4 = $noColor;
}else if($e4score >= $e1score && $e4score >= $e2score && $e4score >= $e3score){
  $ce4 = $validColor;
}else if($e4score <= $e1score && $e4score <= $e2score && $e4score <= $e3score){
  $ce4 = $wrongColor;
}else{
  $ce4 = $q10c;
}

$e1score = round($e1score / 90 * 100);
$e2score = round($e2score / 90 * 100);
$e3score = round($e3score / 90 * 100);
$e4score = round($e4score / 90 * 100);

$rendere1 = "<h1 style=\"text-align:center;\">". $e1score ." %</h1>";
$rendere2 = "<h1 style=\"text-align:center;\">". $e2score ." %</h1>";
$rendere3 = "<h1 style=\"text-align:center;\">". $e3score ." %</h1>";
$rendere4 = "<h1 style=\"text-align:center;\">". $e4score ." %</h1>";

?>
