<?php require('../include/config/apv.php'); ?>

<h5 style="text-align: center;"><?php echo $question["q10"]; ?></h5>
<form id="q10_form" style="width:50%; margin: auto; margin-top: 40vh; transform: translateY(-50%);">
  <div class="input-field col s12">
      <input id="q10_input1" type="text" class="validate">
      <label for="q10_input1">Premier mot</label>
  </div>
  <div class="input-field col s12">
      <input id="q10_input2" type="text" class="validate">
      <label for="q10_input2">Deuxième mot</label>
  </div>
  <div class="input-field col s12">
      <input id="q10_input3" type="text" class="validate">
      <label for="q10_input3">Troisième mot</label>
  </div>
</form>
<div style="text-align: center;"><a id="q10_send" class="waves-effect waves-light btn-small"><i class="material-icons right">send</i>Valider</a></div>
