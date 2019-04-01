<?php require('../include/config/apv.php'); ?>

<h5 style="text-align: center;"><?php echo $question["q1"]; ?></h5>
<form id="q1_form">
<div class="input-field col s12" style="width:50%; margin: auto; margin-top: 10%;">
    <select id="q1_select">
      <option value="" disabled selected>Choississez la couleur<!-- Penser a changer ici + ajaxQ1 ---></option>
      <option data-icon="src/FF0000.png" value="Rouge">Rouge</option>
      <option data-icon="src/FFA500.png" value="Orange">Orange</option>
      <option data-icon="src/FEE7F0.png" value="Cuisse de nymphe">Cuisse de nymphe</option>
      <option data-icon="src/00FF00.png" value="Vert">Vert</option>
      <option data-icon="src/40E0D0.png" value="Turquoise">Turquoise</option>
      <option data-icon="src/0000FF.png" value="Bleu">Bleu</option>
    </select>
    <label>Couleur préférer</label>
  </div>
</form>
<div style="text-align: center;"><a id="q1_send" class="waves-effect waves-light btn-small"><i class="material-icons right">send</i>Valider</a></div>
<script type="text/javascript">
$(document).ready(function(){
  $("#q1_select").formSelect();
});
</script>
