$( document ).ready(function(){
    $('#sign_in_btn').on( "click", function(event) {

      event.preventDefault();
      //On récupère les valeurs des champs email et mot de passe
        var email = $("#email").val();
        var mdp = $("#password").val();

        //Connexion en tant que RH
        if(email == 'rh' && mdp == 'rh'){
          $("#login_link").addClass("invisible");
          $("#after_login_info").removeClass("invisible").addClass("visible");
          $("#after_login_info_p").text("Connecté en tant que RH");
          $('#loginModal').modal('hide');
        //Connexion en tant que candidat
        } else if (email == 'candidat' && mdp == 'candidat') {
          $('#loginModal').modal('hide');
          $("#login_link").addClass("invisible");
          $("#after_login_info").removeClass("invisible").addClass("visible");
          $("#after_login_info_p").text("Connecté en tant que candidat");
        //Valeurs incorrectes
        }else{
          $("#warning_sign_in").removeClass("invisible").addClass("visible");
        }

    });
});
