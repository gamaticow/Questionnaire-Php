<?php require('../include/config/apv.php'); ?>

<h5 style="text-align: center;"><?php echo $question["q7"]; ?></h5>
<form id="q7_form">
<div class="input-field col s12" style="width:50%; margin: auto; margin-top: 10%;">
    <select id="q7_select">
      <option value="" disabled selected>Choississez la date<!-- Penser a changer ici + ajaxQ2 ---></option>
      <option value="1990">1990</option>
      <option value="1999">1999</option>
      <option value="2000">2000</option>
    </select>
    <label>Année</label>
  </div>
</form>
<div style="text-align: center;"><a id="q7_send" class="waves-effect waves-light btn-small"><i class="material-icons right">send</i>Valider</a></div>
<script type="text/javascript">
$(document).ready(function(){
  $("#q7_select").formSelect();
});
</script>
