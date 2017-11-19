window.onload=function(){
	var onlyletters = /^[A-Za-z]+$/;
	var colorclass; 
	var name = document.getElementById("name");
	var name_desc = document.getElementById("name_problem");
	
	var firstname = document.getElementById("firstname");
	var firstname_desc = document.getElementById("firstname_problem");
	
	var mdp = document.getElementById("mdp");
	var mdp_desc = document.getElementById("mdp_problem");
	
	var date = document.getElementById("date");
	var date_desc = document.getElementById("date_problem");
	
	var tel = document.getElementById("tel");
	var tel_desc = document.getElementById("tel_problem");
	
	var email = document.getElementById("email_inscription");
	var email_desc = document.getElementById("email_inscription_problem");
	
	var adresse = document.getElementById("adres");
	var adresse_desc = document.getElementById("adres_problem");
	
    name.addEventListener("blur", function(event) {
		$("#name").removeClass("border-red border-green");
		$("#name_problem").removeClass("text-red text-green");
		if (name.value == "") {
			colorclass="border-red";
			$("#name_problem").text("Le champ est vide");
			name_desc.classList ? name_desc.classList.add("text-red") : name_desc.className += "text-red";
		}
		else if (!(name.value.match(onlyletters))){
			colorclass = "border-red";
			$("#name_problem").text("Le champ ne doit contenir que des lettres (majuscules ou minuscules)");
			name_desc.classList ? name_desc.classList.add("text-red") : name_desc.className += "text-red";
			
		}else if (name.value.length < 4){
			colorclass = "border-red";
			$("#name_problem").text("Nom trop petit");
			name_desc.classList ? name_desc.classList.add("text-red") : name_desc.className += "text-red";
		}else{
			$("#name_problem").text("Le champ est valide");
			name_desc.classList ? name_desc.classList.add("text-green") : name_desc.className += "text-green";
			colorclass="border-green";
		}
		name.classList ? name.classList.add(colorclass) : name.className += colorclass;
	}, true);
	
	firstname.addEventListener("blur", function(event) {
		$("#firstname").removeClass("border-red border-green");
		$("#firstname_problem").removeClass("text-red text-green");
		if (firstname.value == "") {
			colorclass="border-red";
			$("#firstname_problem").text("Le champ est vide");
			firstname_desc.classList ? firstname_desc.classList.add("text-red") : firstname_desc.className += "text-red";
		}
		else if (!(firstname.value.match(onlyletters))){
			colorclass = "border-red";
			$("#firstname_problem").text("Le champ ne doit contenir que des lettres (majuscules ou minuscules)");
			firstname_desc.classList ? firstname_desc.classList.add("text-red") : firstname_desc.className += "text-red";
			
		}else if (firstname.value.length < 3){
			colorclass = "border-red";
			$("#firstname_problem").text("Prénom trop petit");
			firstname_desc.classList ? firstname_desc.classList.add("text-red") : firstname_desc.className += "text-red";
		}else{
			$("#firstname_problem").text("Le champ est valide");
			firstname_desc.classList ? firstname_desc.classList.add("text-green") : firstname_desc.className += "text-green";
			colorclass="border-green";
		}
		firstname.classList ? firstname.classList.add(colorclass) : firstname.className += colorclass;
	}, true);
	
	mdp.addEventListener("blur", function(event) {
		$("#mdp").removeClass("border-red border-green");
		$("#mdp_problem").removeClass("text-red text-green");
		if (mdp.value == "") {
			colorclass="border-red";
			$("#mdp_problem").text("Le champ est vide");
			mdp_desc.classList ? mdp_desc.classList.add("text-red") : mdp_desc.className += "text-red";
		}else if (mdp.value.length < 8){
			colorclass = "border-red";
			$("#mdp_problem").text("Mot de passe trop petit (au moins 8 caractères)");
			mdp_desc.classList ? mdp_desc.classList.add("text-red") : mdp_desc.className += "text-red";
		}else{
			$("#mdp_problem").text("Le champ est valide");
			mdp_desc.classList ? mdp_desc.classList.add("text-green") : mdp_desc.className += "text-green";
			colorclass="border-green";
		}
		mdp.classList ? mdp.classList.add(colorclass) : mdp.className += colorclass;
	}, true);
	
	date.addEventListener("blur", function(event) {
		$("#date").removeClass("border-red border-green");
		$("#date_problem").removeClass("text-red text-green");
		if (date.validity.badInput) {
			colorclass="border-red";
			$("#date_problem").text(date.validationMessage);
			date_desc.classList ? date_desc.classList.add("text-red") : date_desc.className += "text-red";
		}else{
			$("#date_problem").text(date.validationMessage);
			date_desc.classList ? date_desc.classList.add("text-green") : date_desc.className += "text-green";
			colorclass="border-green";
		}
		date.classList ? date.classList.add(colorclass) : date.className += colorclass;
	}, true);
	
	tel.addEventListener("blur", function(event) {
		$("#tel").removeClass("border-red border-green");
		$("#tel_problem").removeClass("text-red text-green");
		if (tel.value == "") {
			colorclass="border-red";
			$("#tel_problem").text("Le champ est vide");
			tel_desc.classList ? tel_desc.classList.add("text-red") : tel_desc.className += "text-red";
		}else if (isNaN(tel.value)){
			colorclass = "border-red";
			$("#tel_problem").text("Ce champ ne doit contenir que des numéros");
			tel_desc.classList ? tel_desc.classList.add("text-red") : tel_desc.className += "text-red";
		}else if(tel.value.length != 10){
			colorclass = "border-red";
			$("#tel_problem").text("Un numéro de téléphone contient 10 numéros");
			tel_desc.classList ? tel_desc.classList.add("text-red") : tel_desc.className += "text-red";
		}else{
			$("#tel_problem").text("Le champ est valide");
			tel_desc.classList ? tel_desc.classList.add("text-green") : tel_desc.className += "text-green";
			colorclass="border-green";
		}
		tel.classList ? tel.classList.add(colorclass) : tel.className += colorclass;
	}, true);
	
	//Regex efficace trouvé sur Internet
	var reg = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');
	email.addEventListener("blur", function(event) {
		$("#email_inscription").removeClass("border-red border-green");
		$("#email_inscription_problem").removeClass("text-red text-green");
		if (email.value == "") {
			colorclass="border-red";
			$("#email_inscription_problem").text("Le champ est vide");
			email_desc.classList ? email_desc.classList.add("text-red") : email_desc.className += "text-red";
		}else if(!(reg.test(email.value))){
			colorclass = "border-red";
			$("#email_inscription_problem").text("Format de mail incorrect");
			email_desc.classList ? email_desc.classList.add("text-red") : email_desc.className += "text-red";
		}else{
			$("#email_inscription_problem").text("Le champ est valide");
			email_desc.classList ? email_desc.classList.add("text-green") : email_desc.className += "text-green";
			colorclass="border-green";
		}
		email.classList ? email.classList.add(colorclass) : email.className += colorclass;
	}, true);
	
	adresse.addEventListener("blur", function(event) {
		$("#adres").removeClass("border-red border-green");
		$("#adres_problem").removeClass("text-red text-green");
		if (adresse.value == "") {
			colorclass="border-red";
			$("#adres_problem").text("Le champ est vide");
			adresse_desc.classList ? adresse_desc.classList.add("text-red") : adresse_desc.className += "text-red";
		}else{
			$("#adres_problem").text("Le champ est valide");
			adresse_desc.classList ? adresse_desc.classList.add("text-green") : adresse_desc.className += "text-green";
			colorclass="border-green";
		}
		adresse.classList ? adresse.classList.add(colorclass) : adresse.className += colorclass;
	}, true);
	
	
}