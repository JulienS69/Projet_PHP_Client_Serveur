<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Accueil - BTS SIO</title>
    <link rel="stylesheet" href="../css/bootstrap4.min.css">
    <link rel="stylesheet" href="../css/mainv2.css">
    <link rel="stylesheet" href="../css/wireframe-theme.min.css">
    <script class="picturefill" async="async" src="../js/picturefill.min.js"></script>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="shortcut icon" href="../img/XEFI.png">
</head>
<body>
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
        <p class="paragraph intro-paragraph" style="padding-top: 15px">A quoi consiste le projet ?</p>
        <p class="paragraph">Le projet consiste à ... blabla</p>
    </div>
</div>
<script src="../js/jquery.min.js"></script>
<script src="../js/outofview.js"></script>
<script src="../js/tether.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>

</html>
