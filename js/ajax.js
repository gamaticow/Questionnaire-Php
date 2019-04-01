$(function(){
	//connexion
	$(document).on("click", "#sendID", function(){
		connexion();
		return false;
	});

	$(document).on("submit", "#connexion", function(){
		connexion();
		return false;
	});

	//changement de nom
	$(document).on("click", "#send_newName", function(){
		changeName();
		return false;
	});

	$(document).on("submit", "#form_newName", function(){
		changeName();
		return false;
	});

	//send q1
	$(document).on("click", "#q1_send", function(){
		ajaxQ1();
		return false;
	});

	$(document).on("submit", "#q1_form", function(){
		ajaxQ1();
		return false;
	});

	//send q2
	$(document).on("click", "#q2_send", function(){
		ajaxQ2();
		return false;
	});

	$(document).on("submit", "#q2_form", function(){
		ajaxQ2();
		return false;
	});

	//send q3
	$(document).on("click", "#q3_send", function(){
		ajaxQ3();
		return false;
	});

	$(document).on("submit", "#q3_form", function(){
		ajaxQ3();
		return false;
	});

	//send q4
	$(document).on("click", "#q4_send", function(){
		ajaxQ4();
		return false;
	});

	$(document).on("submit", "#q4_form", function(){
		ajaxQ4();
		return false;
	});

	//send q5
	$(document).on("click", "#q5_send", function(){
		ajaxQ5();
		return false;
	});

	$(document).on("submit", "#q5_form", function(){
		ajaxQ5();
		return false;
	});

	//send q6
	$(document).on("click", "#q6_send", function(){
		ajaxQ6();
		return false;
	});

	$(document).on("submit", "#q6_form", function(){
		ajaxQ6();
		return false;
	});

	//send q7
	$(document).on("click", "#q7_send", function(){
		ajaxQ7();
		return false;
	});

	$(document).on("submit", "#q7_form", function(){
		ajaxQ7();
		return false;
	});

	//send q8
	$(document).on("click", "#q8_send", function(){
		ajaxQ8();
		return false;
	});

	$(document).on("submit", "#q8_form", function(){
		ajaxQ8();
		return false;
	});

	//send q9
	$(document).on("click", "#q9_send", function(){
		ajaxQ9();
		return false;
	});

	$(document).on("submit", "#q9_form", function(){
		ajaxQ9();
		return false;
	});

	//send q10
	$(document).on("click", "#q10_send", function(){
		ajaxQ10();
		return false;
	});

	$(document).on("submit", "#q10_form", function(){
		ajaxQ10();
		return false;
	});




	//adminpanel
	//changePage
	$(document).on("click", "#apchangepage", function(){
		changePage = "true";
		return false;
	});

	//select e1
	$(document).on("click", "#send_e1", function(){
		if(e1 == "nd" && $("#ie1").val() != ""){
			e1 = $("#ie1").val();
			$("#send_e1").remove();
			$("#ie1").prop('disabled', true);
		}
		return false;
	});

	$(document).on("submit", "#form_e1", function(){
		if(e1 == "nd" && $("#ie1").val() != ""){
			e1 = $("#ie1").val();
			$("#send_e1").remove();
			$("#ie1").prop('disabled', true);
		}
		return false;
	});

	//select e2
	$(document).on("click", "#send_e2", function(){
		if(e2 == "nd" && $("#ie2").val() != ""){
			e2 = $("#ie2").val();
			$("#send_e2").remove();
			$("#ie2").prop('disabled', true);
		}
		return false;
	});

	$(document).on("submit", "#form_e2", function(){
		if(e2 == "nd" && $("#ie2").val() != ""){
			e2 = $("#ie2").val();
			$("#send_e2").remove();
			$("#ie2").prop('disabled', true);
		}
		return false;
	});

	//select e3
	$(document).on("click", "#send_e3", function(){
		if(e3 == "nd" && $("#ie3").val() != ""){
			e3 = $("#ie3").val();
			$("#send_e3").remove();
			$("#ie3").prop('disabled', true);
		}
		return false;
	});

	$(document).on("submit", "#form_e3", function(){
		if(e3 == "nd" && $("#ie3").val() != ""){
			e3 = $("#ie3").val();
			$("#send_e3").remove();
			$("#ie3").prop('disabled', true);
		}
		return false;
	});

	//select e4
	$(document).on("click", "#send_e4", function(){
		if(e4 == "nd" && $("#ie14").val() != ""){
			e4 = $("#ie4").val();
			$("#send_e4").remove();
			$("#ie4").prop('disabled', true);
		}
		return false;
	});

	$(document).on("submit", "#form_e4", function(){
		if(e4 == "nd" && $("#ie4").val() != ""){
			e4 = $("#ie4").val();
			$("#send_e4").remove();
			$("#ie4").prop('disabled', true);
		}
		return false;
	});
});
