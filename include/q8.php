<?php require('../include/config/apv.php'); ?>

<h5 style="text-align: center;"><?php echo $question["q8"]; ?></h5>
<form id="q8_form" style="width:50%; margin: auto; margin-top: 40vh; transform: translateY(-50%);">
<div class="input-field col s12">
    <select id="q8_select1">
      <option value="" disabled selected>Choississez un signe<!-- Penser a changer ici + ajaxQ2 ---></option>
      <option value="Cancer">Cancer</option>
      <option value="Gémeaux">Gémeaux</option>
      <option value="Taureau">Taureau</option>
      <option value="Bélier">Bélier</option>
      <option value="Scorpion">Scorpion</option>
      <option value="Balance">Balance</option>
      <option value="Vierge">Vierge</option>
      <option value="Lion">Lion</option>
      <option value="Poissons">Poissons</option>
      <option value="Verseau">Verseau</option>
      <option value="Capricorne">Capricorne</option>
      <option value="Sagittaire">Sagittaire</option>
    </select>
    <label>Signe astrologique</label>
  </div>
  <div class="row">
    <div class="input-field col s6">
        <select id="q8_select2">
          <option value="" disabled selected>Choississez un signe<!-- Penser a changer ici + ajaxQ2 ---></option>
          <option value="Rat">Rat</option>
          <option value="Buffle">Buffle</option>
          <option value="Tigre">Tigre</option>
          <option value="Lapin">Lapin</option>
          <option value="Dragon">Dragon</option>
          <option value="Serpent">Serpent</option>
          <option value="Cheval">Cheval</option>
          <option value="Chèvre">Chèvre</option>
          <option value="Singe">Singe</option>
          <option value="Coq">Coq</option>
          <option value="Chien">Chien</option>
          <option value="Cochon">Cochon</option>
        </select>
        <label>Animal chinois</label>
      </div>
      <div class="input-field col s6">
          <select id="q8_select3">
            <option value="" disabled selected>Choississez un signe<!-- Penser a changer ici + ajaxQ2 ---></option>
            <option value="Bois">Bois</option>
            <option value="Feu">Feu</option>
            <option value="Terre">Terre</option>
            <option value="Métal">Métal</option>
            <option value="Eau">Eau</option>
          </select>
          <label>Element chinois</label>
        </div>
    </div>
</form>
<div style="text-align: center;"><a id="q8_send" class="waves-effect waves-light btn-small"><i class="material-icons right">send</i>Valider</a></div>
<script type="text/javascript">
$(document).ready(function(){
  $("#q8_select1").formSelect();
  $("#q8_select2").formSelect();
  $("#q8_select3").formSelect();
});
</script>
