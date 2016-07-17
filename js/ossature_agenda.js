	//<![CDATA[

	$(document).ready(function(){
		$("#col_agenda a").mouseover(function() {
			$(this).fadeTo(300, 0.4);
		});
		$("#col_agenda a").mouseout(function() {
			$(this).fadeTo(900, 1);
		});
	});

	function AfficheFly(nom_du_blocFly)
	{
		var id_du_fly_a_ouvrir = "#fly_" + nom_du_blocFly;

		$(".bloctexte_bis:visible").hide("normal", function() {
			$(id_du_fly_a_ouvrir).show("normal");
		});
	}

	//]]>	