<?php require('../include/config/apv.php'); ?>

<h5 style="text-align: center;"><?php echo $question["q6"]; ?></h5>
<form id="q6_form">
<div class="input-field col s12" style="width:50%; margin: auto; margin-top: 10%;">
    <select id="q6_select">
      <option value="" disabled selected>Choississez la date<!-- Penser a changer ici + ajaxQ2 ---></option>
      <option value="16 juin 2007">16 juin 2007</option><!-- DATE DE MARIAGE --->
      <option value="31 mars 1995">31 mars 1995</option>
      <option value="12 juillet 1997">12 juillet 1997</option>
    </select>
    <label>Date de rencontre</label>
  </div>
</form>
<div style="text-align: center;"><a id="q6_send" class="waves-effect waves-light btn-small"><i class="material-icons right">send</i>Valider</a></div>
<script type="text/javascript">
$(document).ready(function(){
  $("#q6_select").formSelect();
});
</script>
