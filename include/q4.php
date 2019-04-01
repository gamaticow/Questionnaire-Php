<?php require('../include/config/apv.php'); ?>

<h5 style="text-align: center;"><?php echo $question["q4"]; ?></h5>
<form id="q4_form">
<div class="input-field col s12" style="width:50%; margin: auto; margin-top: 10%;">
    <select id="q4_select">
      <option value="" disabled selected>Choississez la date<!-- Penser a changer ici + ajaxQ2 ---></option>
      <option value="03 avril 2004">03 avril 2004</option>
      <option value="01 avril 2004">01 avril 2004</option>
      <option value="31 mars 2004">31 mars 2004</option>
    </select>
    <label>Date de naissance</label>
  </div>
</form>
<div style="text-align: center;"><a id="q4_send" class="waves-effect waves-light btn-small"><i class="material-icons right">send</i>Valider</a></div>
<script type="text/javascript">
$(document).ready(function(){
  $("#q4_select").formSelect();
});
</script>
