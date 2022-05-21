<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Document</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.3/css/bootstrap.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="css/dashboard.css">

    
</head>

<body>

    <?php
  
  include 'include/menu.php';
  ?>


    <div class="main-content">


        <main>

            <h2 class="dash-title">Facture</h2>


            <section class="recent">
                <div class="activity-grid">
                    <div class="activity-card">
                        <h3>Activités</h3>

                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Statut</th>
                                        <th>Numéro de facture</th>
                                        <th>Date</th>
                                        <th>Nom client</th>
                                        <th>Total</th>
                                        <th>Actions</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="badge success">Payé</span></td>
                                        <td>000</td>
                                        <td>15/08/2022</td>
                                        <td class="td-team">
                                            "Nom client"
                                        </td>
                                        <td>
                                            "Somme payé"
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropbtn">Actions</button>
                                                <div class="dropdown-content">
                                                  <a href="#">Visualiser</a>
                                                  <a href="#">Modifier</a>
                                                  <a href="#">Relancer</a>
                                                </div>
                                              </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <span class="badge warning">En attente</span></td>
                                        <td>001</td>
                                        <td>15/08/2022</td>
                                        <td class="td-team">
                                            "Nom client"
                                        </td>
                                        <td>
                                            "Somme payé"
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropbtn">Actions</button>
                                                <div class="dropdown-content">
                                                  <a href="#">Visualiser</a>
                                                  <a href="#">Modifier</a>
                                                  <a href="#">Relancer</a>
                                                </div>
                                              </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <span class="badge success">Payé</span></td>
                                        <td>002</td>
                                        <td>15/08/2022</td>
                                        <td class="td-team">
                                            "Nom client"
                                        </td>
                                        <td>
                                            "Somme payé"
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropbtn">Actions</button>
                                                <div class="dropdown-content">
                                                  <a href="#">Visualiser</a>
                                                  <a href="#">Modifier</a>
                                                  <a href="#">Relancer</a>
                                                </div>
                                              </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <span class="badge warning">En attente</span></td>
                                        <td>003</td>
                                        <td>15/08/2022</td>
                                        <td class="td-team">
                                            "Nom client"
                                        </td>
                                        <td>
                                            "Somme payé"
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropbtn">Actions</button>
                                                <div class="dropdown-content">
                                                  <a href="#">Visualiser</a>
                                                  <a href="#">Modifier</a>
                                                  <a href="#">Relancer</a>
                                                </div>
                                              </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <span class="badge success">Payé</span></td>
                                        <td>004</td>
                                        <td>15/08/2022</td>
                                        <td class="td-team">
                                            "Nom client"
                                        </td>
                                        <td>
                                            "Somme payé"
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropbtn">Actions</button>
                                                <div class="dropdown-content">
                                                  <a href="#">Visualiser</a>
                                                  <a href="#">Modifier</a>
                                                  <a href="#">Relancer</a>
                                                </div>
                                              </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <span class="badge warning">En attente</span></td>
                                        <td>003</td>
                                        <td>15/08/2022</td>
                                        <td class="td-team">
                                            "Nom client"
                                        </td>
                                        <td>
                                            "Somme payé"
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropbtn">Actions</button>
                                                <div class="dropdown-content">
                                                  <a href="#">Visualiser</a>
                                                  <a href="#">Modifier</a>
                                                  <a href="#">Relancer</a>
                                                </div>
                                              </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <span class="badge success">Payé</span></td>
                                        <td>002</td>
                                        <td>15/08/2022</td>
                                        <td class="td-team">
                                            "Nom client"
                                        </td>
                                        <td>
                                            "Somme payé"
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropbtn">Actions</button>
                                                <div class="dropdown-content">
                                                  <a href="#">Visualiser</a>
                                                  <a href="#">Modifier</a>
                                                  <a href="#">Relancer</a>
                                                </div>
                                              </div>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- <div class="summary">
                        <div class="summary-card">
                            <div class="summary-single">
                                <span class="ti-id-badge"></span>
                                <div>
                                    <h5>196</h5>
                                    <small>Lorem ipsu</small>
                                </div>
                            </div>
                            <div class="summary-single">
                                <span class="ti-calendar"></span>
                                <div>
                                    <h5>16</h5>
                                    <small>Lorem ipsu</small>
                                </div>
                            </div>
                            <div class="summary-single">
                                <span class="ti-face-smile"></span>
                                <div>
                                    <h5>12</h5>
                                    <small>Lorem ipsu</small>
                                </div>
                            </div>
                        </div> -->



                    <div class="text-center">
                        <a class="navbar-brand" href="facture3.php">
                            <img src="images/plus.png" alt="" width="90" height="90">
                        </a>
                    </div>
                    
                </div>
    </div>
    </div>
    </section>

    </main>

    </div>

</body>

</html>