<?php

session_start();
if($_SESSION["admin"] == true){
  if(empty($_GET["id"])){
    echo("ID !");
  }else{
    define('__GAMA__', true);
    require('include/config/bdd.php');

    $id = $_GET["id"];

    $groupe = $bdd->prepare('INSERT INTO groupe(cle, nom, admin) VALUES(:cle, :nom, :admin)');
		$groupe->execute(array(
			'cle' => $id,
			'nom' => "nd",
			'admin' => 'false'
		));
    $q1 = $bdd->prepare('INSERT INTO q1(equipe, answered, couleur) VALUES(:cle, :answered, :rep1)');
		$q1->execute(array(
			'cle' => $id,
			'answered' => "false",
			'rep1' => 'nd'
		));
    $q2 = $bdd->prepare('INSERT INTO q2(equipe, answered, birthdate) VALUES(:cle, :answered, :rep1)');
		$q2->execute(array(
			'cle' => $id,
			'answered' => "false",
			'rep1' => 'nd'
		));
    $q3 = $bdd->prepare('INSERT INTO q3(equipe, answered, date) VALUES(:cle, :answered, :rep1)');
		$q3->execute(array(
			'cle' => $id,
			'answered' => "false",
			'rep1' => 'nd'
		));
    $q4 = $bdd->prepare('INSERT INTO q4(equipe, answered, date) VALUES(:cle, :answered, :rep1)');
		$q4->execute(array(
			'cle' => $id,
			'answered' => "false",
			'rep1' => 'nd'
		));
    $q5 = $bdd->prepare('INSERT INTO q5(equipe, answered, date) VALUES(:cle, :answered, :rep1)');
		$q5->execute(array(
			'cle' => $id,
			'answered' => "false",
			'rep1' => 'nd'
		));
    $q6 = $bdd->prepare('INSERT INTO q6(equipe, answered, date) VALUES(:cle, :answered, :rep1)');
		$q6->execute(array(
			'cle' => $id,
			'answered' => "false",
			'rep1' => 'nd'
		));
    $q7 = $bdd->prepare('INSERT INTO q7(equipe, answered, date) VALUES(:cle, :answered, :rep1)');
		$q7->execute(array(
			'cle' => $id,
			'answered' => "false",
			'rep1' => 'nd'
		));
    $q8 = $bdd->prepare('INSERT INTO q8(equipe, answered, astrologique, chinoix) VALUES(:cle, :answered, :rep1, :rep2)');
		$q8->execute(array(
			'cle' => $id,
			'answered' => "false",
			'rep1' => 'nd',
      'rep2' => "nd"
		));
    $q9 = $bdd->prepare('INSERT INTO q9(equipe, answered, fruit, legume) VALUES(:cle, :answered, :rep1, :rep2)');
		$q9->execute(array(
			'cle' => $id,
			'answered' => "false",
			'rep1' => 'nd',
      'rep2' => "nd"
		));
    $q10 = $bdd->prepare('INSERT INTO q10(equipe, answered, mot1, mot2, mot3) VALUES(:cle, :answered, :rep1, :rep2, :rep3)');
		$q10->execute(array(
			'cle' => $id,
			'answered' => "false",
			'rep1' => 'nd',
      'rep2' => "nd",
      'rep3' => "nd"
		));

    echo $id ." created";
  }
}else{
  echo "Admin permission require";
}

?>
