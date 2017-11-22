$(document).ready(function(){

	// Partie Navigation
	$("#menuconnecmini").click(function(){
		$("#asideconnecmini").toggleClass("disparait");
	});
	$("#menunonconnecmini").click(function(){
		$("#asidenonconnecmini").toggleClass("disparait");
	});	
	$(".bannir").click(function(){
		if(confirm("Voulez vous vraiment bannir ce membre")){
			document.location="?page=bannir&id="+$(this).attr("data-id")+"&user="+$(this).attr("data-user")+"&email="+$(this).attr("data-mail");
	}
	});
	$(".supprart").click(function(){
		if(confirm("Voulez vous vraiment supprimé l'article?")){
			document.location="?page=supprimer&id="+$(this).attr("data-id");
	}
	});
});