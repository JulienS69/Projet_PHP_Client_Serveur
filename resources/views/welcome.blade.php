<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Accueil - Application-Client-Serveur</title>
    <link rel="stylesheet" href="../css/bootstrap4.min.css">
    <link rel="stylesheet" href="../css/mainv2.css">
    <link rel="stylesheet" href="../css/wireframe-theme.min.css">
    <script class="picturefill" async="async" src="../js/picturefill.min.js"></script>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="shortcut icon" href="../img/XEFI.png">
</head>
<body>
<div class="row nav-row">
    <div class="col-xs-12">
        <div class="container-fluid nav-container"><a href="{{ route('accueil.index') }}" id="#top" class="responsive-picture logo" title="Xefi Logo"><picture><img alt="Logo" src="../img/XEFI.png"></picture></a>
            <a class="link-text nav-link2" href="{{ url('/clients') }}" title="Projet">Accéder aux données</a>
            <a class="link-text nav-link2 current" href="{{ route('accueil.index') }}" title="Accueil">Présentation du Projet</a>
        </div>
    </div>
</div>
<div class="row wecome-row">
    <div class="col-xs-12 welcome-column">
        <h4 class="welcome-subtitle">Présentation du</h4>
        <h1>Projet</h1>
    </div>
</div>
<div class="row full-width-row">
    <div class="col-xs-12 ignition">
        <p class="paragraph intro-paragraph" style="padding-top: 15px" >A quoi consiste le projet ?</p>
        <p class="paragraph" style="color: #0b0b0b; font-weight: bold "> - Le projet consiste à réaliser une application client-serveur de recherche client</p><br>
        <p class="paragraph" style="color: #0b0b0b; font-weight: bold"> - La bdd est crée à partir d'un script SQL. Ce script récupère 500 000 clients.</p>
    </div>
</div>
<div class="row full-width-row">
    <div class="col-xs-12 ignition">
        <p class="paragraph intro-paragraph" style="padding-top: 15px">Objectif ?</p>
        <p class="paragraph" style="color:#009a62; font-weight: bold"> - Recherche dans une base de données client</p><br>
        <p class="paragraph" style="color:#009a62; font-weight: bold"> - La recherche doit être faite coté webservice</p><br>
        <p class="paragraph" style="color:#009a62; font-weight: bold"> - Affichage dans une liste coté front</p><br>
        <p class="paragraph" style="color:#009a62; font-weight: bold"> - Champs : Ref contact (ID), nom, prénom, adresse , ville, code postal.</p>
    </div>
</div>
<div class="row full-width-row">
    <div class="col-xs-12 ignition">
        <p class="paragraph intro-paragraph" style="padding-top: 15px">Architecture ?</p>
        <p class="paragraph" style="color:#009a62; font-weight: bold"> - Application Front incluant les champs de recherche et une liste affichant les résultats : Page Web</p>
        <p class="paragraph" style="color:#009a62; font-weight: bold"> - Web Service : PHP</p>
        <p class="paragraph" style="color:#009a62; font-weight: bold"> - Base de données : MariaDB</p>
    </div>
</div>
<div class="row wecome-row " style="height: 10px">
        <div class="col-xs-12">
            <div class="subgrid action-subgrid">
                <div class="row">
                    <div class="col-md-5">
                        <p class="paragraph action-paragraph"></p>
                    </div>
                    <div class="col-xs-12 col-md-6" style="color: white">© Julien SEUX | Tous droits Réservés
                    </div>
                </div>
            </div>
        </div>
</div>
<script src="../js/jquery.min.js"></script>
<script src="../js/outofview.js"></script>
<script src="../js/tether.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>

</html>
