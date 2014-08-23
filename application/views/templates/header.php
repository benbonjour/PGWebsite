<!DOCTYPE html>
<html>
  <head>
    <title>Poly Games</title>
    <meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap background =<?php echo img_url("testBackground.png")?> -->
    <link href=<?php echo css_url("bootstrap.min")?> rel="stylesheet">
    <link href=<?php echo css_url("custom")?> rel="stylesheet">

     <script type="text/JavaScript" src=<?php echo js_url("bootstrap.min")?>></script> 
     <script type="text/JavaScript" src=<?php echo js_url("bootstrap")?>></script>
     <script type="text/JavaScript" src=<?php echo js_url("custom")?>></script> 
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


  </head>
  <body >
    <nav class="navbar navbar-default navbar-fixed-top transparency" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <a class="navbar-brand" href=<?php site_url("start/home")?>>Poly Games</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href=<?php echo site_url("start/accueil") ?>>Accueil</a></li>
          <li><a href=<?php echo site_url("start/projets") ?>>Projets</a></li>
          <li><a href=<?php echo site_url("start/competitions") ?>>Compétitions</a></li>
          <li><a href=<?php echo site_url("start/documentation") ?>>Documentation</a></li>
          <li><a href=<?php echo site_url("start/executif") ?>>Éxécutif</a></li>
          <li><a href=<?php echo site_url("start/contactezNous") ?>>Contactez-nous</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>

  <div class="text-center">
    <img id="logo" src=<?php echo img_url("icon.png") ?>>
  </div>

 

  
