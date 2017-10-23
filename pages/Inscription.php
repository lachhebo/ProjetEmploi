<div class="tab">
  <button class="tablinks" onclick="opentab(event, 'Inscription Professionnelle')">Inscription Professionnelle</button>
  <button class="tablinks" onclick="opentab(event, 'Inscription Ressource Humaine')">Inscription Ressources Humaines</button>
</div>

<div id="Inscription Professionnelle" class="tabcontent">
  <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12">
            <h3 class="text-center"> <b>Formulaire d'inscription Professionnelle </b></h3>
          </div>
          <div class="col-xs-5">
  <form class="form" method="POST" action="" >
              <div class="form-group">
                <label for="name">Nom :</label>
                <input type="text" id="name" class="form-control" placeholder="Nom" name="name">
              </div>
              <div class="form-group">
                <label for="firstname">Prénom: </label>
                <input type="text" id="fistname" class="form-control" name="firstname" placeholder="Prénom">
              </div>
              <div class="form-group">
                <label for="mdp">Mot de passe: </label>
                <input type="password" id="mdp" class="form-control" name="mdp" placeholder="Mot de passe">
              </div>
              <div class="form-group">
                <label for="date">Date de naissance: </label>
                <input type="date" name="date" class="form-group" id="date" placeholder="Ex : 07/11/1985">
              </div>
            <!--  <div class="form-group">
                <label for="exp">Tes Expériences: </label>
                <textarea name="exp" id="exp" class="form-control"></textarea>
              </div> -->
              <div class="form-group">
                <label for="tel">Téléphone: </label>
                <input type="tel" id="tel" class="form-control" name="tel" placeholder="Téléphone">
              </div>
              <div class="form-group">
                <label for="email">Email: </label>
                <input type="text" id="email" class="form-control" name="email" placeholder="Mail">
              </div>
              <div class="form-group">
                <label for="adres">Adresse: </label>
                <input type="text" id="adres" class="form-control" name="adres" placeholder="Adresse postale">
              </div>
			<button type="connexion" class="btn btn-default">Inscription</button>
  </form>
            </div>
          <div class="col-xs-7 form">
            <h3 >Les avantages de l'inscription : </h3>
            <ul>
              <li class="liste_inscription">Des milliers d'offres d'emploi près de chez vous </li>
              <li class="liste_inscription">Une équipe à votre écoute</li>
              <li class="liste_inscription">Mettez en avant vos expériences </li>
            </ul>
          </div>

        </div>


      </div>
</div>

<div id="Inscription Ressource Humaine" class="tabcontent">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12">
            <h3 class="text-center"> <b>Formulaire d'inscription Ressources humaines </b></h3>
          </div>
          <div class="col-xs-5">
            <form class="form" style="margin:5px">
            <div class="form-group">
              <label for="name">Nom</label>
              <input type="text" id="name" class="form-control" placeholder="Nom">
            </div>
            <div class="form-group">
              <label for="firstname">Prénom</label>
              <input type="text" id="name" class="form-control" placeholder="Prénom">
            </div>
            <div class="form-group">
              <label for="mdp">Mot de passe</label>
              <input type="text" id="mdp" class="form-control" placeholder="Mot de passe">
            </div>
            <div class="form-group">
              <label for="Ent">Entreprise</label>
              <input type="Comment" id="ent" class="form-control" placeholder="L'entreprise pour laquelle vous travaillez en tant que RH">
            </div>
            <div class="form-group">
              <label for="SA">Secteur d'actvité</label>
              <input type="text" id="sa" class="form-control" placeholder="Votre secteur d'activité">
            </div>
            <div class="form-group">
              <label for="tel">Téléphone</label>
              <input type="tel" id="tel" class="form-control" placeholder="Téléphone professionnel">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" id="Email" class="form-control" placeholder="Mail d'entreprise ou personnel">
            </div>
            <div class="form-group">
              <label for="adresse">Adresse</label>
              <input type="text" id=adr class="form-control" placeholder="Votre adresse">
            </div>
            <button type="connexion" class="btn btn-default">Inscription</button>
            </form>
          </div>
          <div class="col-xs-7 form">
            <h3 >Les avantages de l'inscription : </h3>
            <ul>
              <li class="liste_inscription">Des milliers de candidat à procimité de chez votre entreprise </li>
              <li class="liste_inscription">Une équipe à votre écoute</li>
              <li class="liste_inscription">Mettez en avant votre entreprise </li>
            </ul>
          </div>

        </div>
      </div>
</div>
