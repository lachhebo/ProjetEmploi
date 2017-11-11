$( document ).ready(function(){
    $('#candidat_connect').on( "click", function(event) {
          $(".candidat_only").removeClass("invisible").addClass("visible");
		  $(".rh_only").removeClass("visible").addClass("invisible");
    });
	$('#rh_connect').on( "click", function(event) {
          $(".rh_only").removeClass("invisible").addClass("visible");
		  $(".candidat_only").removeClass("visible").addClass("invisible");
    });


});
