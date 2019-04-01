<?php
session_start();
define('__GAMA__', true);
require('../include/config/bdd.php');

$d = array();
$d["wait"] = "false";

/**
|*	Action : connexion
|*	Verifie l'identifiant de l'utilisateur
**/
if($_POST['action'] == "connexion"){
	if(isset($_SESSION['ID'])){
		$_SESSION['ID'] = "";
	}
	$valid = false;
	$name_define = false;
	$admin = false;

	$req_id = $bdd->query("SELECT * FROM `groupe`");

	while($data = $req_id->fetch()){
		if($data["cle"] == $_POST["ID"]){
			$valid = true;
			if($data["nom"] != "nd"){
				$name_define = true;
			}
			if($data["admin"] == "true"){
				$admin = true;
			}
		}
	}

	if($valid){

		if(!$name_define){
			$_SESSION["tempID"] = $_POST['ID'];
			$d["result"] = file_get_contents("http://localhost/include/newName.php");
			$d["erreur"] = "0";
			$d["page"] = "newName";
		}else{
			$_SESSION["ID"] = $_POST['ID'];
			$page = "erreur";

			$req_page = $bdd->query("SELECT * FROM `page` WHERE `ID` = 1");

			while($data = $req_page->fetch()){
				$page = $data['page'];
			}

			if($admin){
				$d["page"] = "admin";
				$d["result"] = file_get_contents("http://localhost/include/adminpanel.php");
				$d["admin"] = true;
				$_SESSION["admin"] = true;
			}else{
				$_SESSION["admin"] = false;
				$d["page"] = $page;

				if(preg_match("/\Aq[0-9]+\z/", $page)){
					$req_tq = $bdd->query("SELECT * FROM `".$page."`");

					while($data = $req_tq->fetch()){
						if($data["equipe"] == $_SESSION["ID"]){
							if($data["answered"] == "true"){
								$page = "wait";
							}
						}
					}
				}

				$d["result"] = file_get_contents("http://localhost/include/". $page .".php");
				if($page == "wait"){
					$d["wait"] = "true";
				}
			}

			$d["erreur"] = "0";
		}

	}else{
		$d["result"] = "<p style=\"color: red; text-align: center;\">Identifiant incorect</p>";
		$d["erreur"] = "1";
	}

	/**
	|*	Action : changeName
	|*	Definit le nom de l'équipe
	**/
}else if($_POST['action'] == "changeName"){
	if(isset($_POST['name'])){
		if(!preg_match('`^[-a-zA-Z0-9àâäéèêëïîôöùûü_ ]{4,}$`i', $_POST['name'])){
			$d["result"] = "<p style=\"color: red; text-align: center;\">Entrer un nom correct (sans caractères spéciaux et de plus de 4 caractères)</p>";
			$d["erreur"] = "1";
		}else{
			$upName = $bdd->prepare('UPDATE `groupe` SET `nom` = :name WHERE `groupe`.`cle` = :cle');
			$upName->execute(array(
				'cle' => $_SESSION['tempID'],
				'name' => $_POST['name']
			));
			$_SESSION["ID"] = $_SESSION["tempID"];
			$_SESSION["admin"] = false;
			$d["erreur"] = "3";
		}
	}else{
		$d["result"] = "<p style=\"color: red; text-align: center;\">Entrer un nom correct</p>";
		$d["erreur"] = "1";
	}

	/**
	|*	Action : refresh
	|*	Donne la nouvelle page a charger
	**/
}else if($_POST['action'] == "refresh"){
	$page = "erreur";

	$req_page = $bdd->query("SELECT * FROM `page` WHERE `ID` = 1");

	while($data = $req_page->fetch()){
		$page = $data['page'];
	}

	if(preg_match("/\Aq[0-9]+\z/", $page)){
		$req_tq = $bdd->query("SELECT * FROM `".$page."`");

		while($data = $req_tq->fetch()){
			if($data["equipe"] == $_SESSION["ID"]){
				if($data["answered"] == "true"){
					$page = "wait";
				}
			}
		}
	}

	if(/*$_POST["lastPage"] == $page || */$page == "wait"){
		$d["erreur"] = "0";
	}else{

		$d["erreur"] = "1";
		$d["page"] = $page;
		$d["result"] = file_get_contents("http://localhost/include/". $page .".php");
	}

	/**
	|*  Action : sendQ1
	|*  Réponse a la premiere question
	**/
}else if($_POST['action'] == "sendQ1"){
	if(empty($_POST['q1r1'])){
		$d["erreur"] = "1";
		$d["result"] = "<p style=\"color: red; text-align: center;\">Veuillez saisir une réponse</p>";
	}else{
		$upQ1 = $bdd->prepare('UPDATE `q1` SET `couleur` = :couleur, `answered` = "true" WHERE `q1`.`equipe` = :cle');
		$upQ1->execute(array(
			'cle' => $_SESSION['ID'],
			'couleur' => $_POST['q1r1']
		));

		$d["erreur"] = "0";
		$d["result"] = file_get_contents("http://localhost/include/wait.php");
		$d["wait"] = "true";
		$d["page"] = "wait";
	}

	/**
	|*  Action : sendQ2
	|*  Réponse a la deuxieme question
	**/
}else if($_POST['action'] == "sendQ2"){
	if(empty($_POST['q2r1'])){
		$d["erreur"] = "1";
		$d["result"] = "<p style=\"color: red; text-align: center;\">Veuillez saisir une réponse</p>";
	}else{
		$upQ1 = $bdd->prepare('UPDATE `q2` SET `birthdate` = :birthdate, `answered` = "true" WHERE `q2`.`equipe` = :cle');
		$upQ1->execute(array(
			'cle' => $_SESSION['ID'],
			'birthdate' => $_POST['q2r1']
		));

		$d["erreur"] = "0";
		$d["result"] = file_get_contents("http://localhost/include/wait.php");
		$d["wait"] = "true";
		$d["page"] = "wait";
	}

	/**
	|*  Action : sendQ3
	|*  Réponse a la troisieme question
	**/
}else if($_POST['action'] == "sendQ3"){
	if(empty($_POST['q3r1'])){
		$d["erreur"] = "1";
		$d["result"] = "<p style=\"color: red; text-align: center;\">Veuillez saisir une réponse</p>";
	}else{
		$upQ1 = $bdd->prepare('UPDATE `q3` SET `date` = :birthdate, `answered` = "true" WHERE `q3`.`equipe` = :cle');
		$upQ1->execute(array(
			'cle' => $_SESSION['ID'],
			'birthdate' => $_POST['q3r1']
		));

		$d["erreur"] = "0";
		$d["result"] = file_get_contents("http://localhost/include/wait.php");
		$d["wait"] = "true";
		$d["page"] = "wait";
	}

	/**
	|*  Action : sendQ4
	|*  Réponse a la quatrieme question
	**/
}else if($_POST['action'] == "sendQ4"){
	if(empty($_POST['q4r1'])){
		$d["erreur"] = "1";
		$d["result"] = "<p style=\"color: red; text-align: center;\">Veuillez saisir une réponse</p>";
	}else{
		$upQ1 = $bdd->prepare('UPDATE `q4` SET `date` = :birthdate, `answered` = "true" WHERE `q4`.`equipe` = :cle');
		$upQ1->execute(array(
			'cle' => $_SESSION['ID'],
			'birthdate' => $_POST['q4r1']
		));

		$d["erreur"] = "0";
		$d["result"] = file_get_contents("http://localhost/include/wait.php");
		$d["wait"] = "true";
		$d["page"] = "wait";
	}

	/**
	|*  Action : sendQ5
	|*  Réponse a la cinquieme question
	**/
}else if($_POST['action'] == "sendQ5"){
	if(empty($_POST['q5r1'])){
		$d["erreur"] = "1";
		$d["result"] = "<p style=\"color: red; text-align: center;\">Veuillez saisir une réponse</p>";
	}else{
		$upQ1 = $bdd->prepare('UPDATE `q5` SET `date` = :birthdate, `answered` = "true" WHERE `q5`.`equipe` = :cle');
		$upQ1->execute(array(
			'cle' => $_SESSION['ID'],
			'birthdate' => $_POST['q5r1']
		));

		$d["erreur"] = "0";
		$d["result"] = file_get_contents("http://localhost/include/wait.php");
		$d["wait"] = "true";
		$d["page"] = "wait";
	}
	/**
	|*  Action : sendQ6
	|*  Réponse a la sixieme question
	**/
}else if($_POST['action'] == "sendQ6"){
	if(empty($_POST['q6r1'])){
		$d["erreur"] = "1";
		$d["result"] = "<p style=\"color: red; text-align: center;\">Veuillez saisir une réponse</p>";
	}else{
		$upQ1 = $bdd->prepare('UPDATE `q6` SET `date` = :birthdate, `answered` = "true" WHERE `q6`.`equipe` = :cle');
		$upQ1->execute(array(
			'cle' => $_SESSION['ID'],
			'birthdate' => $_POST['q6r1']
		));

		$d["erreur"] = "0";
		$d["result"] = file_get_contents("http://localhost/include/wait.php");
		$d["wait"] = "true";
		$d["page"] = "wait";
	}
	/**
	|*  Action : sendQ7
	|*  Réponse a la septieme question
	**/
}else if($_POST['action'] == "sendQ7"){
	if(empty($_POST['q7r1'])){
		$d["erreur"] = "1";
		$d["result"] = "<p style=\"color: red; text-align: center;\">Veuillez saisir une réponse</p>";
	}else{
		$upQ1 = $bdd->prepare('UPDATE `q7` SET `date` = :birthdate, `answered` = "true" WHERE `q7`.`equipe` = :cle');
		$upQ1->execute(array(
			'cle' => $_SESSION['ID'],
			'birthdate' => $_POST['q7r1']
		));

		$d["erreur"] = "0";
		$d["result"] = file_get_contents("http://localhost/include/wait.php");
		$d["wait"] = "true";
		$d["page"] = "wait";
	}
	/**
	|*  Action : sendQ8
	|*  Réponse a la huitieme question
	**/
}else if($_POST['action'] == "sendQ8"){
	if(empty($_POST['q8r1']) || $_POST['q8r2'] == " de "){
		$d["erreur"] = "1";
		$d["result"] = "<p style=\"color: red; text-align: center;\">Veuillez saisir une réponse</p>";
	}else{
		$upQ1 = $bdd->prepare('UPDATE `q8` SET `astrologique` = :r1, `chinoix` = :r2, `answered` = "true" WHERE `q8`.`equipe` = :cle');
		$upQ1->execute(array(
			'cle' => $_SESSION['ID'],
			'r1' => $_POST['q8r1'],
			'r2' => $_POST['q8r2']
		));

		$d["erreur"] = "0";
		$d["result"] = file_get_contents("http://localhost/include/wait.php");
		$d["wait"] = "true";
		$d["page"] = "wait";
	}
	/**
	|*  Action : sendQ9
	|*  Réponse a la neuvieme question
	**/
}else if($_POST['action'] == "sendQ9"){
	if(empty($_POST['q9r1']) || empty($_POST['q9r2'])){
		$d["erreur"] = "1";
		$d["result"] = "<p style=\"color: red; text-align: center;\">Veuillez saisir une réponse</p>";
	}else{
		$upQ1 = $bdd->prepare('UPDATE `q9` SET `legume` = :r1, `fruit` = :r2, `answered` = "true" WHERE `q9`.`equipe` = :cle');
		$upQ1->execute(array(
			'cle' => $_SESSION['ID'],
			'r1' => $_POST['q9r1'],
			'r2' => $_POST['q9r2']
		));

		$d["erreur"] = "0";
		$d["result"] = file_get_contents("http://localhost/include/wait.php");
		$d["wait"] = "true";
		$d["page"] = "wait";
	}
	/**
	|*  Action : sendQ10
	|*  Réponse a la dixieme question
	**/
}else if($_POST['action'] == "sendQ10"){
	if(empty($_POST['q10r1']) || empty($_POST['q10r2']) || empty($_POST['q10r3'])){
		$d["erreur"] = "1";
		$d["result"] = "<p style=\"color: red; text-align: center;\">Veuillez saisir une réponse</p>";
	}else{
		$upQ1 = $bdd->prepare('UPDATE `q10` SET `mot1` = :r1, `mot2` = :r2, `mot3` = :r3, `answered` = "true" WHERE `q10`.`equipe` = :cle');
		$upQ1->execute(array(
			'cle' => $_SESSION['ID'],
			'r1' => $_POST['q10r1'],
			'r2' => $_POST['q10r2'],
			'r3' => $_POST['q10r3']
		));

		$d["erreur"] = "0";
		$d["result"] = file_get_contents("http://localhost/include/wait.php");
		$d["wait"] = "true";
		$d["page"] = "wait";
	}
}

echo json_encode($d);
?>
