<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Serge Brodeur e2296529">
    <title><?php echo $title; ?></title>
<!--<link rel="stylesheet" href="resources/css/reset.css">
    <link rel="stylesheet" href="resources/css/variables.css">
    <link rel="stylesheet" href="resources/css/header.css">
    <link rel="stylesheet" href="resources/css/footer.css">
    <link rel="stylesheet" href="resources/css/main-index.css">
    <link rel="stylesheet" href="resources/css/main-produits.css"> -->
    <link rel="stylesheet" href="resources/css/main-index.css">
</head>
<body>
    <header id="entete">
        <div id="barre-de-notification">
          <div>
            <img id="icone-camion-de-livraison" src="resources/icones/icone-camion-de-livraison.svg" alt="Icône camion de livraison.">
          </div>
          <div>
             <p id="notification-texte">Livraison gratuite sur commande de $50 et plus</p>
          </div>
          <div>
            <img src="resources/icones/icone-separateur.svg" alt="Icône séparateur.">
          </div>
          <div>
            <p id="notification-texte">Livraison en 3 à 6 jours ouvrable</p>
          </div>
        </div> 

        <div id="barre-de-navigation">
          <div id="logo-retroGramingPosters">
            <img src="resources/icones/icone-logo-retro-gaming-posters.svg" alt="Icône du logo de RetroGamingPosters.ca.">
          </div>
          <div id="barre-de-recherche">
            <input id="boite-de-recherche" type="text" title="Veuillez saisir les paramètres de recherche" placeholder="Recherche">
            <a href="composants/pages-html/pages-header/barre-de-recherche.html"><img id="icone-fleche-vers-le-bas" src="resources/icones/icone-fleche-vers-le-bas.svg" alt="Icône flèche vers le bas."></a>
          </div>
          <div id="groupe-d-icones1">
            <a href="composants/pages-html/pages-header/parametres-regionaux.html"><img src="resources/icones/icone-pays-canada.svg" alt="Paramètres régionaux."></a>
            <a href="composants/pages-html/pages-header/service-a-la-clientele.html"><img src="resources/icones/icone-support.svg" alt="Service à la clientèle."></a>
            <a id="button-langue" href="composants/pages-html/pages-header/langues.html">Français</a>   
          </div>
        </div>
         
        <div id="barre-de-menu">
          <div>
            <a href="composants/pages-html/pages-header/menu-hamburger.html"><img id="icone-menu-hamburger" src="resources/icones/icone-menu-hamburger.svg" alt="Icône menu hamburger."></a>
          </div>
          <div id="groupe-de-bouttons">
            <a href="composants/pages-html/pages-header/affiches.html"><button class="button-menu btn-menu1">AFFICHES</button></a>
            <a href="composants/pages-html/pages-header/collections.html"><button class="button-menu btn-menu1">COLLECTIONS</button></a>
            <a href="composants/pages-html/pages-header/cadres.html"><button class="button-menu btn-menu1">CADRES</button></a>
            <a href="composants/pages-html/pages-header/autres-produits.html"><button class="button-menu btn-menu2">AUTRES PRODUITS</button></a>
            <a href="composants/pages-html/pages-header/inspirations-murales.html"><button class="button-menu btn-menu2">INSPIRATIONS MURALES</button></a>
          </div>
          <div id="groupe-d-icones2">
          <a href="composants/pages-html/pages-header/favoris.html"><img id="icone-favoris" src="resources/icones/icone-favoris.svg" alt="Icône favoris."></a>
          <a href="composants/pages-html/pages-header/utilisateur.html"><img id="icone-utilisateur" src="resources/icones/icone-utilisateur.svg" alt="Icône utilisateur."></a>
          <a href="composants/pages-html/pages-header/panier.html"><img id="icone-panier" src="resources/icones/icone-panier.svg" alt="Icône panier."></a>
          </div>
        </div>
    </header>