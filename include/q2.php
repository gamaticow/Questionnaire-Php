<?php require('../include/config/apv.php'); ?>

<h5 style="text-align: center;"><?php echo $question["q2"]; ?></h5>
<form id="q2_form">
<div class="input-field col s12" style="width:50%; margin: auto; margin-top: 10%;">
    <select id="q2_select">
      <option value="" disabled selected>Choississez la date<!-- Penser a changer ici + ajaxQ2 ---></option>
      <option value="31 mars 2019">31 mars 2019</option>
      <option value="31 mars 1989">31 mars 1989</option>
      <option value="1 avril 1979">1 avril 1979</option>
      <option value="31 mars 1979">31 mars 1979</option>
      <option value="31 mars 1889">31 mars 1889</option>
    </select>
    <label>Date de naissance</label>
  </div>
</form>
<div style="text-align: center;"><a id="q2_send" class="waves-effect waves-light btn-small"><i class="material-icons right">send</i>Valider</a></div>
<script type="text/javascript">
$(document).ready(function(){
  $("#q2_select").formSelect();
});
</script>
