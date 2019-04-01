<?php require('../include/config/apv.php'); ?>

<h5 style="text-align: center;"><?php echo $question["q9"]; ?></h5>
<form id="q9_form" style="width:50%; margin: auto; margin-top: 40vh; transform: translateY(-50%);">
<div class="input-field col s12">
    <select id="q9_select1">
      <option value="" disabled selected>Choississez un légume<!-- Penser a changer ici + ajaxQ2 ---></option>
      <option value="Petit Pois">Petit Pois</option>
      <option value="Carotte">Carotte</option>
      <option value="Poireau">Poireau</option>
      <option value="Epinard">Epinard</option>
      <option value="Choux">Choux</option>
    </select>
    <label>Légume</label>
  </div>

    <div class="input-field col s12">
        <select id="q9_select2">
          <option value="" disabled selected>Choississez un fruit<!-- Penser a changer ici + ajaxQ2 ---></option>
          <option value="Cerise">Cerise</option>
          <option value="Ananas">Ananas</option>
          <option value="Fruit de la passion">Fruit de la passion</option>
          <option value="Banane">Banane</option>
          <option value="Pomme">Pomme</option>
        </select>
        <label>Fruit</label>
      </div>
</form>
<div style="text-align: center;"><a id="q9_send" class="waves-effect waves-light btn-small"><i class="material-icons right">send</i>Valider</a></div>
<script type="text/javascript">
$(document).ready(function(){
  $("#q9_select1").formSelect();
  $("#q9_select2").formSelect();
});
</script>
