function ajaxQ1(){
	var q1r1 = $("#q1_select").val();
	$.post(url,{action:"sendQ1", q1r1:q1r1},function(data){
		if(data.erreur == "0"){
			$("#body").html(data.result);
			cPage(data.page);
			if(data.wait == "true"){
				startTimer();
			}
		}else if(data.erreur == "1"){
			$("#body").prepend(data.result);
		}else{
			alert("ERREUR");
		}
	},"json");
}

function ajaxQ2(){
	var q2r1 = $("#q2_select").val();
	$.post(url,{action:"sendQ2", q2r1:q2r1},function(data){
		if(data.erreur == "0"){
			$("#body").html(data.result);
			cPage(data.page);
			if(data.wait == "true"){
				startTimer();
			}
		}else if(data.erreur == "1"){
			$("#body").prepend(data.result);
		}else{
			alert("ERREUR");
		}
	},"json");
}

function ajaxQ3(){
	var q3r1 = $("#q3_select").val();
	$.post(url,{action:"sendQ3", q3r1:q3r1},function(data){
		if(data.erreur == "0"){
			$("#body").html(data.result);
			cPage(data.page);
			if(data.wait == "true"){
				startTimer();
			}
		}else if(data.erreur == "1"){
			$("#body").prepend(data.result);
		}else{
			alert("ERREUR");
		}
	},"json");
}

function ajaxQ4(){
	var q4r1 = $("#q4_select").val();
	$.post(url,{action:"sendQ4", q4r1:q4r1},function(data){
		if(data.erreur == "0"){
			$("#body").html(data.result);
			cPage(data.page);
			if(data.wait == "true"){
				startTimer();
			}
		}else if(data.erreur == "1"){
			$("#body").prepend(data.result);
		}else{
			alert("ERREUR");
		}
	},"json");
}

function ajaxQ5(){
	var q5r1 = $("#q5_select").val();
	$.post(url,{action:"sendQ5", q5r1:q5r1},function(data){
		if(data.erreur == "0"){
			$("#body").html(data.result);
			cPage(data.page);
			if(data.wait == "true"){
				startTimer();
			}
		}else if(data.erreur == "1"){
			$("#body").prepend(data.result);
		}else{
			alert("ERREUR");
		}
	},"json");
}

function ajaxQ6(){
	var q6r1 = $("#q6_select").val();
	$.post(url,{action:"sendQ6", q6r1:q6r1},function(data){
		if(data.erreur == "0"){
			$("#body").html(data.result);
			cPage(data.page);
			if(data.wait == "true"){
				startTimer();
			}
		}else if(data.erreur == "1"){
			$("#body").prepend(data.result);
		}else{
			alert("ERREUR");
		}
	},"json");
}

function ajaxQ7(){
	var q7r1 = $("#q7_select").val();
	$.post(url,{action:"sendQ7", q7r1:q7r1},function(data){
		if(data.erreur == "0"){
			$("#body").html(data.result);
			cPage(data.page);
			if(data.wait == "true"){
				startTimer();
			}
		}else if(data.erreur == "1"){
			$("#body").prepend(data.result);
		}else{
			alert("ERREUR");
		}
	},"json");
}

function ajaxQ8(){
	var q8r1 = $("#q8_select1").val();
	var q8r2 = $("#q8_select2").val() + " de " + $("#q8_select3").val();
	$.post(url,{action:"sendQ8", q8r1:q8r1, q8r2:q8r2},function(data){
		if(data.erreur == "0"){
			$("#body").html(data.result);
			cPage(data.page);
			if(data.wait == "true"){
				startTimer();
			}
		}else if(data.erreur == "1"){
			$("#body").prepend(data.result);
		}else{
			alert("ERREUR");
		}
	},"json");
}

function ajaxQ9(){
	var q9r1 = $("#q9_select1").val();
	var q9r2 = $("#q9_select2").val();
	$.post(url,{action:"sendQ9", q9r1:q9r1, q9r2:q9r2},function(data){
		if(data.erreur == "0"){
			$("#body").html(data.result);
			cPage(data.page);
			if(data.wait == "true"){
				startTimer();
			}
		}else if(data.erreur == "1"){
			$("#body").prepend(data.result);
		}else{
			alert("ERREUR");
		}
	},"json");
}

function ajaxQ10(){
	var q10r1 = $("#q10_input1").val();
	var q10r2 = $("#q10_input2").val();
	var q10r3 = $("#q10_input3").val();
	$.post(url,{action:"sendQ10", q10r1:q10r1, q10r2:q10r2, q10r3:q10r3},function(data){
		if(data.erreur == "0"){
			$("#body").html(data.result);
			cPage(data.page);
			if(data.wait == "true"){
				startTimer();
			}
		}else if(data.erreur == "1"){
			$("#body").prepend(data.result);
		}else{
			alert("ERREUR");
		}
	},"json");
}
