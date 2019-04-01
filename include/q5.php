<?php require('../include/config/apv.php'); ?>

<h5 style="text-align: center;"><?php echo $question["q5"]; ?></h5>
<form id="q5_form">
<div class="input-field col s12" style="width:50%; margin: auto; margin-top: 10%;">
    <select id="q5_select">
      <option value="" disabled selected>Choississez la date<!-- Penser a changer ici + ajaxQ2 ---></option>
      <option value="06 janvier 2008">06 janvier 2008</option>
      <option value="08 janvier 2008">08 janvier 2008</option>
      <option value="01 janvier 2008">01 janvier 2008</option>
    </select>
    <label>Date de naissance</label>
  </div>
</form>
<div style="text-align: center;"><a id="q5_send" class="waves-effect waves-light btn-small"><i class="material-icons right">send</i>Valider</a></div>
<script type="text/javascript">
$(document).ready(function(){
  $("#q5_select").formSelect();
});
</script>
