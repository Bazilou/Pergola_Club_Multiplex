$(function() {

    // load the modal window
    $('a.modal').click(function(){

        // scroll to top
        $('html, body').animate({scrollTop:0}, 'fast');

        // before showing the modal window, reset the form incase of previous use.
        $('.success, .error').hide();
        $('form#contactForm').show();
        
        // Reset all the default values in the form fields
        $('#name').val('Votre nom');
        $('#email').val('Votre eMail');
        $('#comment').val('Ecrivez votre demande...');

        //show the mask and contact divs
        $('#mask').show().fadeTo('', 0.7);
        $('div#contact').fadeIn();

        // stop the modal link from doing its default action
        return false;
    });

    // close the modal window is close div or mask div are clicked.
    $('div#close, div#mask').click(function() {
        $('div#contact, div#mask').stop().fadeOut('slow');

    });

    $('#contactForm input').focus(function() {
        $(this).val(' ');
    });
    
    $('#contactForm textarea').focus(function() {
        $(this).val('');
    });

    // when the Submit button is clicked...
    $('input#submit').click(function() {
    $('.error').hide().remove();
        //Inputed Strings
        var username = $('#name').val(),
            email = $('#email').val(),
            comment = $('#comment').val();
        
//		console.log('User: ' + username);
    
        //Error Count
        var error_count = 0;
        
        //Regex Strings
        var username_regex = new RegExp("[a-z]+", "i");
        var email_regex = new RegExp("[a-zA-Z0-9_-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,3}", "i");
/*		
		console.log('regexp user: ' + username_regex.test(username));
		console.log('email:' + email);
		console.log("regexp email: " + email_regex.test(email));
		
		alert("");
 */      
            //Test Username
            if(!username_regex.test(username)) {
                $('#contact_header').after('<p class=error>Nom invalide</p>');
                error_count += 1;
            }
            
            //Test Email
            if(!email_regex.test(email)) {
                $('#contact_header').after('<p class=error>eMail invalide</p>');
                error_count += 1;
            }
            
            //Blank Comment?
            if(comment == '') {
                $('#contact_header').after('<p class=error>Aucun message present...</p>');
                error_count += 1;
            }

            //No Errors?
            if(error_count === 0) {
                $.ajax({
                    type: "POST",
                    url: "send.php",
                    data: "name=" + username + "&email=" + email + "&comment=" + comment,
                    error: function() {
                        $('.error').hide();
                        $('#sendError').slideDown('slow');
                    },
                    success: function () {
                        $('.error').hide();
                        $('.success').slideDown('slow');
                        $('form#contactForm').fadeOut('slow');
                    }               
                }); 
            }
            
            else {
                $('.error').show();
            }
            
        return false;
    });
    
});