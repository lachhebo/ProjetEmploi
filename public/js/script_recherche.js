$( document ).ready(function(){

    document.getElementById("Recherche").addEventListener("click", recherche);

    function recherche() {

        var mot_cle = document.getElementById("zone_recherche").value; 
        console.log(mot_cle); 
        window.location.replace("../public/index.php?p=recherche&q="+mot_cle);

    }



});
