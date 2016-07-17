$(function() {

    // load the modal window
    $('a.modalNews').click(function(){

        // scroll to top
        $('html, body').animate({scrollTop:0}, 'fast');

        // before showing the modal window, reset the form incase of previous use.
        $('.success, .error').hide();
        $('form#contactFormNews').show();
        
        // Reset all the default values in the form fields
        $('#nom').val('Votre Nom');
        $('#prenom').val('Votre Prenom');
		$('#ddn').val('Votre date de Naissance (JJ/MM/AAAA)');
        $('#mailNews').val('Votre eMail');

        //show the mask and contact divs
        $('#mask_news').show().fadeTo('', 0.7);
        $('div#contact_news').fadeIn();

        // stop the modal link from doing its default action
        return false;
    });

    // close the modal window is close div or mask div are clicked.
    $('div#close_news, div#mask_news').click(function() {
        $('div#contact_news, div#mask_news').stop().fadeOut('slow');

    });

    $('#contactFormNews input').focus(function() {
        $(this).val(' ');
    });
 /*   
    $('#contactForm textarea').focus(function() {
        $(this).val('');
    });
*/
    // when the Submit button is clicked...
    $('input#envoi').click(function() {
    $('.error').hide().remove();
        //Inputed Strings
        var nom = $('#nom').val(),
            prenom = $('#prenom').val();
			ddn = $('#ddn').val();
            mailNews = $('#mailNews').val();
    
        //Error Count
        var error_count = 0;
        
        //Regex Strings
        var nom_regex = new RegExp("[a-z]+", "i");
        var prenom_regex = new RegExp("[a-z]+", "i");
        var mailNews_regex = new RegExp("[a-zA-Z0-9_-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,3}", "i");
		var ddn_regex = new RegExp("[0-9]{1,2}[/][0-9]{1,2}[/][0-9]{2,4}" , "i");
    
            //Test Nom
            if(!nom_regex.test(nom) || nom == "Votre Nom") {
                $('#contact_header_news').after('<p class=error>Nom invalide</p>');
                error_count += 1;
            }

            //Test Prenom
            if(!prenom_regex.test(prenom) || prenom == "Votre Prenom" ) {
                $('#contact_header_news').after('<p class=error>Prenom invalide</p>');
                error_count += 1;
            }

			//Test Date de Naissance
			if (!ddn_regex.test(ddn)) {
				$('#contact_header_news').after('<p class=error>Format date de naissance : JJ/MM/AAAA</p>');
				error_count += 1;
			}

            //Test Email
            if(!mailNews_regex.test(mailNews)) {
                $('#contact_header_news').after('<p class=error>eMail invalide</p>');
                error_count += 1;
            }

			console.log("mail : " + mailNews);
            //No Errors?
            if(error_count === 0) {
                $.ajax({
                    type: "POST",
                    url: "newsletter_traitement.php",
                    data: "&nom=" + nom + "&prenom=" + prenom + "&ddn=" + ddn + "&mailNews=" + mailNews,
                    error: function() {
                        $('.error').hide();
                        $('#sendError').slideDown('slow');
                    },
                    success: function () {
                        $('.error').hide();
                        $('.success').slideDown('slow');
                        $('form#contactFormNews').fadeOut('slow');
                    }               
                }); 
            }
            
            else {
                $('.error').show();
            }
            
        return false;
    });
    
});