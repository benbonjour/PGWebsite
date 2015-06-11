<div id="mainBody">
  <div class="row">
    <h3 class="text-center">Inscription</h3>
  </div>
  <div class="col-md-6 col-md-offset-3"> 
    <div id="upcoming" class="carousel slide transparency"> <!--data-ride="carousel"-->
      <script type="text/javascript" src=<?php echo js_url("bootstrap_inscription")?>>pause();</script>
      
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#upcoming" data-slide-to="0" class="active"S></li>
        <li data-target="#upcoming" data-slide-to="1"></li>
        <!--<li data-target="#upcoming" data-slide-to="2"></li>-->
      </ol>

     <!-- Carousel items -->
      <div class="carousel-inner">

        <div class = "item active carouselItem">
         <div id = "for_all" class = "col-md-offset-4">
            <br>
            <br>
            <br>
          <div id = "choice">
            <!--Liste déroulante pour le choix du type
            <!--Liste déroulante pour le choix de la catégorie-->
          </div>
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
          </div>
          <div>
            <img src=<?php echo img_url("inscription.png")?> alt="phone" class="img-responsive img-centered">
          </div>
        </div>

        <div class = "item carouselItem">
          <div id = "type_programmer" class = "col-md-offset-4">
            <br>
            <br>
            <br>
            Matricule: *<br>
            <input type= "number" name = "matricule">
            <br>
            Nom de l’équipe (ou/et #): * <br>
            <input type= "text" name = "equipe">
            <br>
            Demandes spéciales : <br>
            (ex. artistes son ou graphisme) <br>
            <input type= "text" name = "demande">
            <br>
          </div>
          <div>
            <img src=<?php echo img_url("inscription.png")?> alt="phone" class="img-responsive img-centered">
          </div>
        </div>

        <div class = "item carouselItem">
          <div id = "type_programmer" class = "col-md-offset-4">
            <br>
            <br>
            <br>
            Équipes qui vous intéressent(ou/et #): <br>
            <input type= "text" name = "equipe">
            <br>
          </div>
          <div>
            <img src=<?php echo img_url("inscription.png")?> alt="phone" class="img-responsive img-centered">
          </div>
        </div>
      
      </div>
      <!-- Carousel nav -->
      <button id= "prev" class="carousel-control left" href="#upcoming" data-slide="prev" disabled>
        <span class="glyphicon glyphicon-chevron-left"></span>
      </button>
      <button id= "next" class="carousel-control right" href="#upcoming" data-slide="next" disabled>
        <span class="glyphicon glyphicon-chevron-right"></span>
      </button>
    </div>
  </div>
</div>