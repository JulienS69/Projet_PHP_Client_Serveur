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
    <link rel="stylesheet" href="../css/datatable.min.css" />
    <!-- Core -->
    <link rel="stylesheet" href="../css/datatable.css" />
    <script src="../js/datatable.js"></script>
    <!-- Local File -->
    <script src="../js/locales.js"></script>
    <link rel="shortcut icon" href="../img/XEFI.png">
</head>
<body style="font-size: 12pt;">
<div class="row nav-row">
    <div class="col-xs-12">
        <div class="container-fluid nav-container"><a href="{{ route('accueil.index') }}" id="#top" class="responsive-picture logo" title="Xefi Logo"><picture><img alt="Logo" src="../img/XEFI.png"></picture></a>
            <a class="link-text nav-link2 current" href="{{ url('/clients') }}" title="Projet">Accéder aux données</a>
            <a class="link-text nav-link2" href="{{ route('accueil.index') }}" title="Accueil">Présentation du Projet</a>
        </div>
    </div>
</div>
<div class="row wecome-row">
    <div class="col-xs-12 welcome-column">
        <h4 class="welcome-subtitle">Accès aux </h4>
        <h1>Données</h1>
    </div>
</div>
<br />

<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <b>Rechercher un utilisateur</b>
        </div>
        <div class="card-body">
            @livewire('filter')
        </div>
    </div>
</div>
</body>
@livewireScripts
</html>
