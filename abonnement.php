<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.3/css/bootstrap.css">

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
  <link rel="stylesheet" href="css/abonnement1.css">


</head>

<body>
<?php
  
  include 'include/menu.php';
  ?>

  <div class="main-content">

  <!-- Pricing table -->
  <div class="pricing-section bg-1">
    <h2 class="pricing-section__title"></h2>
    <div class="pricing pricing--sonam">
        <div class="pricing__item">
            <h3 class="pricing__title">EPI</h3>
            <div class="pricing__price"><span class="pricing__currency">€</span>25</div>
            <!-- <p class="pricing__sentence">Small business solution</p> -->
            <ul class="pricing__feature-list">
                <li class="pricing__feature"> Mise en avant auprès de
                  toute la communauté</li> <br>
                <li class="pricing__feature">Personnalisation de votre
                  profil</li> <br>
                <li class="pricing__feature">Accès au calendrier de
                  rendez-vous</li> <br>
                  <li class="pricing__feature">Rappel de rendez-vous par
                    mail et message auprès du
                    particulier</li>
              
            </ul>
            <a class="button" href=""><strong>S'abonner</strong></a>
        </div>
        <div class="pricing__item">
            <h3 class="pricing__title">EPIK</h3>
            <div class="pricing__price"><span class="pricing__currency">€</span>35</div>
            <!-- <p class="pricing__sentence">Medium business solution</p> -->
            <ul class="pricing__feature-list">
              <li class="pricing__feature"> Offre EPI incluse</li> <br>
              <li class="pricing__feature">Edition, personnalisation et
                envoi de vos factures</li> <br>
              <li class="pricing__feature">Accès à vos données
                statistiques</li> <br>
                <li class="pricing__feature"> Gestions des relances des
                  impayés</li> <br>
                  <li class="pricing__feature">  Gestions de vos moyens de paiement</li> <br>
            </ul>
            <a class="button" href=""><strong>S'abonner</strong></a>
            <!-- <button class="pricing__action" onclick="">S'abonner</button> -->
        </div>
       
    </div>
 
  </div>
  <script src="./script.js"></script>

</body>



<!-- Option 1: Bootstrap Bundle with Popper -->


</html>