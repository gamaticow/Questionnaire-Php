<?php require('../include/config/apv.php'); ?>

<h5 style="text-align: center;"><?php echo $question["q3"]; ?></h5>
<form id="q3_form">
<div class="input-field col s12" style="width:50%; margin: auto; margin-top: 10%;">
    <select id="q3_select">
      <option value="" disabled selected>Choississez la date<!-- Penser a changer ici + ajaxQ2 ---></option>
      <option value="26 aout 2000">26 aout 2000</option>
      <option value="28 aout 2000">28 aout 2000</option>
      <option value="8 janvier 2000">8 janvier 2000</option>
    </select>
    <label>Date de naissance</label>
  </div>
</form>
<div style="text-align: center;"><a id="q3_send" class="waves-effect waves-light btn-small"><i class="material-icons right">send</i>Valider</a></div>
<script type="text/javascript">
$(document).ready(function(){
  $("#q3_select").formSelect();
});
</script>
