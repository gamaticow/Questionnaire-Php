<?php
if(empty($_GET["ID"])){
  echo " ";
}else{
define('__GAMA__', true);
require('../include/config/bdd.php');
require('../include/config/apv.php');

$e1 = "nd";
$e2 = "nd";
$e3 = "nd";
$e4 = "nd";

$ne1 = "Equipe 1";
$ne2 = "Equipe 2";
$ne3 = "Equipe 3";
$ne4 = "Equipe 4";

$ce1 = $noColor;
$ce2 = $noColor;
$ce3 = $noColor;
$ce4 = $noColor;

$req_id = $bdd->query("SELECT * FROM `adminpanel`");

while($data = $req_id->fetch()){
  if($data["admin"] == $_GET["ID"]){
    if(isset($data["e1"]) && $e1 != ""){
      $e1 = $data["e1"];
    }
    if(isset($data["e2"]) && $e2 != ""){
      $e2 = $data["e2"];
    }
    if(isset($data["e3"]) && $e3 != ""){
      $e3 = $data["e3"];
    }
    if(isset($data["e4"]) && $e4 != ""){
      $e4 = $data["e4"];
    }
  }
}

$req_name = $bdd->query("SELECT * FROM `groupe`");

while($data = $req_name->fetch()){
  if($data["cle"] == $e1){
    $ce1 = $waitcolor;
    if($data["nom"] == "nd"){
      $ne1 = $noName;
    }else{
      $ne1 = $data["nom"];
    }
  }

  if($data["cle"] == $e2){
    $ce2 = $waitcolor;
    if($data["nom"] == "nd"){
      $ne2 = $noName;
    }else{
      $ne2 = $data["nom"];
    }
  }

  if($data["cle"] == $e3){
    $ce3 = $waitcolor;
    if($data["nom"] == "nd"){
      $ne3 = $noName;
    }else{
      $ne3 = $data["nom"];
    }
  }

  if($data["cle"] == $e4){
    $ce4 = $waitcolor;
    if($data["nom"] == "nd"){
      $ne4 = $noName;
    }else{
      $ne4 = $data["nom"];
    }
  }
}

$currentPage = "nd";

$cPage = $bdd->query("SELECT * FROM `page`");
while($data = $cPage->fetch()){
  if($data["page"] != "wait"){
    $currentPage = $data["page"];
  }
}

$rendere1 = "";
$rendere2 = "";
$rendere3 = "";
$rendere4 = "";

$allanswered = true;
$e1answered = false;
$e2answered = false;
$e3answered = false;
$e4answered = false;

if($currentPage == "q1"){
  require('../include/config/q1process.php');
}else if($currentPage == "q2"){
  require('../include/config/q2process.php');
}else if($currentPage == "q3"){
  require('../include/config/q3process.php');
}else if($currentPage == "q4"){
  require('../include/config/q4process.php');
}else if($currentPage == "q5"){
  require('../include/config/q5process.php');
}else if($currentPage == "q6"){
  require('../include/config/q6process.php');
}else if($currentPage == "q7"){
  require('../include/config/q7process.php');
}else if($currentPage == "q8"){
  require('../include/config/q8process.php');
}else if($currentPage == "q9"){
  require('../include/config/q9process.php');
}else if($currentPage == "q10"){
  require('../include/config/q10process.php');
}else if($currentPage == "erreur"){
  echo "<script>$(\"#apchangepage\").addClass(\"disabled\");</script>";
}else if($currentPage == "end"){
  require('../include/config/score.php');
}

if(preg_match("/\Aq[0-9]+\z/", $currentPage) && !$allanswered){
  echo "<h3 style=\"text-align: center;\">". $question[$currentPage] ."</h3>";
}
 ?>
<!--<link rel="stylesheet" href="css/adminpanel.css" />
<div id="adminpanel">
  <div id="c1">
    <div id="e1">
      <h1 style="text-align: center;">Equipe 1</h1>
    </div>
    <div id="e2">
      <h1 style="text-align: center;">Equipe 2</h1>
    </div>
  </div>
  <div id="c2">
    <div id="e3">
      <h1 style="text-align: center;">Equipe 3</h1>
    </div>
    <div id="e4">
      <h1 style="text-align: center;">Equipe 4</h1>
    </div>
  </div>
</div>--->

<div id="adminpanel" style="height:100vh;">
  <div id="c1" class="row" style="margin:0;padding:0;">
    <div id="e1" class="col s6" style="background-color: <?php echo $ce1; ?>; height:50vh; border: 1px solid;">
      <h1 style="text-align: center;"><?php echo $ne1; ?></h1>
      <?php
        if($e1 == "nd"){
          echo $e1input;
        }else{
          echo $rendere1;
        }
       ?>
    </div>
    <div id="e2" class="col s6" style="background-color: <?php echo $ce2; ?>; height:50vh; border: 1px solid;">
      <h1 style="text-align: center;"><?php echo $ne2; ?></h1>
      <?php
        if($e2 == "nd"){
          echo $e2input;
        }else{
          echo $rendere2;
        }
       ?>

    </div>
  </div>
  <div id="c2" class="row" style="margin:0;padding:0;">
    <div id="e3" class="col s6" style="background-color: <?php echo $ce3; ?>; height:50vh; border: 1px solid;">
      <h1 style="text-align: center;"><?php echo $ne3; ?></h1>
      <?php
        if($e3 == "nd"){
          echo $e3input;
        }else{
          echo $rendere3;
        }
       ?>

    </div>
    <div id="e4" class="col s6" style="background-color: <?php echo $ce4; ?>; height:50vh; border: 1px solid;">
      <h1 style="text-align: center;"><?php echo $ne4; ?></h1>
      <?php
        if($e4 == "nd"){
          echo $e4input;
        }else{
          echo $rendere4;
        }
       ?>

    </div>
  </div>
  <a id="apchangepage" class="btn-floating btn-large waves-effect waves-light blue" style="position: absolute !important; bottom: 1vh; right: 1vw;"><i class="material-icons">arrow_forward</i></a>
<?php } ?>
