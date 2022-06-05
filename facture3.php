<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js
">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.3/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
  <link rel="stylesheet" href="css/testfacture.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js"></script>
</head>

<body>

  <?php

  include 'include/menu.php';
  ?>


  <div class="main-content">
    <div class="client">

      <h2>Client</h2>
      <input class="input1" type="text" nom="nom" placeholder="Nom">
      <input class="input2" type="text" nom="prenom" placeholder="Prénom"> <br> <br>
      <input class="input1" type="text" nom="adresse" placeholder="N° et Rue">
      <input class="input2" type="text" nom="adresse" placeholder="Ville"><br> <br>
      <input class="input1" type="text" nom="mail" placeholder="Mail">
      <input class="input2" type="text" nom="tel" placeholder="Téléphone">
    </div>

    <br> <br> <br>

    <div class="container" ng-app="invoice">
      <h2>Facture  <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Changer statut
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Payé</a></li>
    <li><a class="dropdown-item" href="#">A payé</a></li>
    <li><a class="dropdown-item" href="#">A établir</a></li>
  </ul>
      <div class="btn-group">
  <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Action
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Envoyer</a></li>
    <li><a class="dropdown-item" href="#">Relancer</a></li>
    <li><a class="dropdown-item" href="#">Télecharger</a></li>
  </ul>
</div>
      
      </h2>
<!-- Example single danger button -->

      <section class="row" ng-controller="InvoiceController">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Nom</th>
              <th>Description</th>
              <th>Quantité</th>
              <th>Prix</th>
              <th>Total</th>
              <th>Supprimer</th>
            </tr>
          </thead>
          <tbody>
            <tr ng-repeat="item in invoice.items">
              <td><input type="text" ng-model="item.name" class="form-control" /></td>
              <td><input type="text" ng-model="item.description" class="form-control" /></td>
              <td><input type="number" ng-model="item.qty" class="form-control" /></td>
              <td><input type="number" ng-model="item.price" class="form-control" /></td>
              <td>{{item.qty * item.price}} €</td>
              <td><button type="button" class="btn btn-danger" ng-click="remove($index)">Supprimer</button></td>
            </tr>
            <tr>
              <td><button type="button" class="btn btn-primary" ng-click="add()">Ajouter</button></td>
              <td></td>
              <td></td>
              <td>Total : </td>
              <td>{{total()}} €</td>
            </tr>
            <tr>
              <td><button type="button-valider" class="btn btn-success">Valider la facture</button></td>
              <td> <button type="button-valider" class="btn btn-secondary">Enregistrer le brouillon</button></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </section>
    </div>
    <!-- <div class="valider">
    <button type="button-valider" class="btn btn-success">Valider</button>
    </div> -->
  </div>

</body>
<script>
  var invoice = angular.module('invoice', []);
  invoice.controller('InvoiceController', function($scope) {
    $scope.invoice = {
      items: [{
        name: '',
        description: '',
        qty: 0,
        price: 0
      }]
    };
    $scope.add = function() {
        $scope.invoice.items.push({
          name: '',
          description: '',
          qty: 1,
          price: 0
        });
      },
      $scope.remove = function(index) {
        $scope.invoice.items.splice(index, 1);
      },
      $scope.total = function() {
        var total = 0;
        angular.forEach($scope.invoice.items, function(item) {
          total += item.qty * item.price;
        })
        return total;
      }
  });
</script>

</html>