$( document ).ready(function(){
    $('#sign_in_btn').on( "click", function(event) {
		var reg = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');
		//On récupère les valeurs des champs email et mot de passe
        var email = $("#email_modal").val();
        var mdp = $("#password").val();
        //Si les champs sont vides ou que le format du mail n'est pas respecté
        if(email == '' || mdp == '' || !(reg.test(email.value))){
			event.preventDefault();
          $("#warning_sign_in").removeClass("invisible").addClass("visible");
        }

    });
});
