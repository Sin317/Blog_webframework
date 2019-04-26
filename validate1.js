$(function(){
	$("#loginForm1").on("submit", function(e){
		e.preventDefault();

		var inputEmail = $("#username");
		var inputPassword = $("#password");
		var loginButton = $("#loginBtn");
		$.ajax({
                url: 'login_submit1.php', // form action url
                type: 'POST', // form submit method get/post
                dataType: 'html', // request type html/json/xml
                data: $("#loginForm1").serialize(), // serialize form data
                beforeSend: function() {

					inputEmail.prop( "disabled", true );
					inputPassword.prop( "disabled", true );
					loginButton.text("Unlocking ...");
					loginButton.prop( "disabled", true );

                },
                success: function(data) {
                   var json = eval('(' + data + ')');
                   var status = json['status'];
                   if(status == "success")
                   {
                        loginButton.text("Yay! Redirecting...");
                        //redirect user.
                        setTimeout(function(){
                            //do what you need here
                            window.location.replace("index_logged.php");
                        }, 800);
                   }
                   else if(status=="incorrect")
                   {
                        inputEmail.removeAttr( "disabled");
                        inputPassword.removeAttr( "disabled");
                        loginButton.text("Invalid Credentials.Let's try again?");
                        loginButton.removeAttr("disabled");
                   }
                },
                error: function(e) {
                    console.log(e)
                    inputEmail.removeAttr( "disabled");
                    inputPassword.removeAttr( "disabled");
                    loginButton.text("Let's try again?");
                    loginButton.removeAttr("disabled");
                }
            });
	});
});