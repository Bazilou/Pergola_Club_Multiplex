	//<![CDATA[
	$(document).ready(function(){
		$("#menu a").mouseover(function() {
			$(this).fadeTo(300, 0.4);
		});
		$("#menu a").mouseout(function() {
			$(this).fadeTo(900, 1);
		});
	});

	function AfficheTexte(nom_du_bloc)
	{
		var id_du_bloc_a_ouvrir = "#bloc_" + nom_du_bloc;

		$(".bloctexte:visible").slideUp(300, function() {
			$(id_du_bloc_a_ouvrir).slideDown(600);
		});
	}
	//]]>	