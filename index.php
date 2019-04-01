<?php
session_start();
define('__GAMA__', true);
require('include/config/bdd.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Anniversaire 40 ans</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0">
	<script src="js/jquery.min.js"></script>
	<link rel="stylesheet" href="css/jquerymobile.min.css" />
	<link href="css/MaterialIcon.css" rel="stylesheet">
	<link rel="stylesheet" href="css/materialize.min.css">
	<script src="js/materialize.min.js"></script>
	<script src="js/function.js"></script>
	<script src="js/ajaxQ.js"></script>
	<script src="js/ajax.js"></script>
	<style>
		.select-wrapper input.select-dropdown{
			-webkit-user-select:none;
			-moz-user-select:none;
			-ms-user-select:none;
			-o-user-select:none; // latest Opera versions support -webkit-
			user-select:none;
		}
	</style>
</head>
<body>
	<?php include "include/navbar.php" ?>
<div id="body">
	<div style="width:50%; margin: auto; margin-top: 50vh; transform: translateY(-50%);">
		<form id="connexion" class="col s12">
			<div class="row">
				<div class="input-field col s10">
					<i class="material-icons prefix">lock</i>
					<input id="id" type="text" class="validate" autocomplete="off" value="<?php echo $cle ?>">
					<label for="id">Identifiant</label>
				</div>
				<div class="input-field col s2">
					<a id="sendID" class="btn-floating waves-effect waves-light blue"><i class="material-icons">send</i></a>
				</div>
			</div>
		</form>
	</div>
	<?php if($name != $default_name){ ?>
		<script type="text/javascript">
			connexion();
		</script>
	<?php } ?>
</div>
</body>
</html>
