var url = "./ajax/ajax.php";
var urlAdmin = "./ajax/ajaxAdmin.php";
var timer_refresh;
var lastPage = "connexion";
var currentPage = "connexion";

var admin = false;
var timer_admin;
var changePage = "false";
var e1 = "nd";
var e2 = "nd";
var e3 = "nd";
var e4 = "nd";
var la = "";

function refresh(){
	$.post(url,{action:"refresh", lastPage:lastPage},function(data){
		if(data.erreur == "0"){
		}else if(data.erreur == "1"){
			$("#body").html(data.result);
			cPage(data.page);
			clearInterval(timer_refresh);
			if(data.wait == "true"){
				startTimer();
			}
		}else{
			alert("ERREUR");
		}
	},"json");
}

function connexion(){
	var id = $("#id").val();
		if(id != null){
			$.post(url,{action:"connexion", ID:id},function(data){
	      if(data.erreur == "0"){
					admin = data.admin;
					if($("#ndt").length >= 1 || data.page == "newName" || admin){
						$("#body").html(data.result);
						cPage(data.page);
						if(admin){
							la = data.result;
							timer_admin = setInterval(refreshAdmin, 2000);
						}
						if(data.wait == "true" && !admin){
							startTimer();
						}
					}else{
						location.reload();
					}
				}else if(data.erreur == "1"){
					$("#body").prepend(data.result);
				}else{
	      	alert("ERREUR");
	      }
      },"json");
		}else{
			location.reload();
		}
}

function changeName(){
	var name = $("#newName").val();
		if(name != null){
			$.post(url,{action:"changeName", name:name},function(data){
	      if(data.erreur == "3"){
          location.reload();
				}else if(data.erreur == "1"){
					$("#body").prepend(data.result);
				}else{
	      	alert("ERREUR");
	      }
      },"json");
		}else{
			location.reload();
		}
}

function cPage(page){
	lastPage = currentPage;
	currentPage = page;
}

function startTimer(){
	timer_refresh = setInterval(refresh, 5000);
}

/*
$.post(url,{action:"", :},function(data){
	if(data.erreur == "1"){

	}else if(data.erreur == "2"){

	}else{
		alert("ERREUR");
	}
},"json");
*/

function refreshAdmin(){
	$.post(urlAdmin,{e1:e1, e2:e2, e3:e3, e4:e4, la:la, changePage:changePage},function(data){
		if(data.erreur == "0"){

		}else if(data.erreur == "1"){
			$("#body").html(data.result);
			la = data.result;
		}else{
			alert("ERREUR");
		}
	},"json");
	changePage = "false";
}
