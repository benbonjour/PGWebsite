<div id="mainBody">
  <div class="row">
    <h3 class="text-center">Inscription</h3>
  </div>
  <div class="row"> 
    <div class="transparency">
      <div class="row">
        <img src=<?php echo img_url("inscription.png")?> alt="phone" class="img-responsive img-centered">
      </div>
      <div class="block" "row">
        <form class = "col-md-4">
          <div id = "for_all">
            Nom: *<br>
            <input type="text" name="nom">
            <br>
            Prénom: *<br>
            <input type="text" name="prenom">
            <br>
            Courriel: *<br>
            <input type="email" name="courriel"> 
            <br>
            Téléphone:<br>
            <input type="tel" name="tel">
            <br>
          </div>
        </form>
        <form class = "col-md-4" "col-md-offset-6">
          <div id = "choice">
            <!--Liste déroulante pour le choix du type-->
            <!--Liste déroulante pour le choix de la catégorie-->
          </div>
          <div id = "type_programmer">
            Nom de l’équipe (ou/et #): * <br>
            <input type= "text" name = "matricule">
            <br>
            Matricule: *<br>
            <input type= "number" name = "matricule">
            <br>
            Demandes spéciales : <br>
            (ex. artistes son ou graphisme) <br>
            <input type= "text" name = "demande">
            <br>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>