<p align="center" style="font-weight: bold">
Projet Client Serveur PHP
</p>

<p align="center"><img src="https://i.ibb.co/7Rk2S7f/Capture-d-cran-2021-11-24-140018.png" width="400"></p>

[comment]: <> (<p align="center"><img src="https://i.ibb.co/2K6jrdv/Capture-d-cran-2021-11-24-152754s.png" width="400"></p>)

## Installation

- Pour faire fonctionner l'application, vous devez tout d'abord créer la base de données locale via un serveur (MariaDB, PHPMyAdmin, SQLServeur...) appelé la "**Client**"
- Pour faire fonctionner l'application, il faut dès à présent remplir la base de données.
- Pour ce faire, vous devez allez dans votre bdd, copiez coller le script SQL disponible à cette adresse : http://gofile.me/4pwZa/Al7O2augO (le mot de passe est "**projet**").
- Ensuite, faire un **git clone** du projet sur votre bureau. 
- Lancer le projet via un IDE (PhpStorm, Visual Studio Code ...)
- Renommer le fichier **.env.example** par **.env**
- Completer la ligne "**DB_DATABASE**" par "**DB_DATABASE=Client**"
- Dans le terminal, tapez la commande "**php artisan key:generate**" afin de générer la clé du fichier environnement.
- Enfin, dans le terminal, tapez la commande "**php artisan serve**" afin de lancer le serveur web.

## A propos de l'application web

- Le projet consiste à réaliser une application client-serveur de recherche client.
- La bdd est créée à partir d'un script SQL. Ce script récupère 500 000 clients.
- L'objectif de celle-ci est de pouvoir effectuer la recherche de client dans la bdd via un Web Service comprenant une pagination.

## Frameworks et langage utilisés

- Les langages utilisés sont : **PHP**, **HTML**, **CSS3**
- Les frameworks utilisés pour construire l'application web sont : **Laravel** et **Livewire**.
- Laravel est un framework php qui m'a permis de construire mon architecture. Ce framework utilise le modèle **MVC** (Modèle, Vue, Controller)
- Livewire m'a permis de pouvoir filtrer ma recherche dynamiquement et ce framework est un web service qui requête la base de données.

<p align="center"><img src="https://i.ibb.co/6DNj9kx/laravel-livewire.png" width="400"></p>

## Fonctionnement de l'application

- Pour effectuer une recherche de client, vous devez vous rendre dans l'onglet "**Accéder aux données**" et effectuer la recherche.
- L'indexation des données se fait via le controller de notre vue.
- Lors de la saisie de texte dans la barre de recherche, une requête est envoyée à l'api par Livewire*, un json est retourné et notre recherche est désormais filtré. (Voir photo ci-dessous)

<p align="start"><img src="https://i.ibb.co/5FqnF81/Capture-d-cran-2021-11-24-154801.png" width="400"></p>
<p align="end"><img src="https://i.ibb.co/kybwGfW/Capture-d-cran-2021-11-24-1503.png" width="400"></p>


