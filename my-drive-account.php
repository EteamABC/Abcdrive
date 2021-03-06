<!DOCTYPE html>
<html class="wide wow-animation smoothscroll scrollTo" lang="en">
  <?php include('header.php'); ?>
  <body>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
      <header class="page-head">
        <!-- RD Navbar Transparent-->
        <div class="rd-navbar-wrap">
          <?php include 'menu.php'; ?>
          <?php //require('bat/includes/config.php'); 

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); } 

?>
        </div>
      </header>
      <!-- Classic Breadcrumbs-->
      <section class="breadcrumb-classic">
        <div class="shell section-34 section-sm-50">
          <div class="range range-lg-middle">
            <div class="cell-lg-2 veil reveal-sm-block cell-lg-push-2"><span class="mdi mdi-account-convert icon icon-white"></span></div>
            <div class="cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
              <h2><span class="big">My Drive Account</span></h2>
            </div>
            <div class="offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
              <ul class="list-inline list-inline-dashed p">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">My Account</a></li>
                <li>My Drive Account
                </li>
              </ul>
            </div>
          </div>
        </div>
        <svg class="svg-triangle-bottom" xmlns="http://www.w3.org/2000/svg" version="1.1">
          <defs>
            <lineargradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
              <stop offset="0%" style="stop-color:#{startColor};stop-opacity:1;"></stop>
              <stop offset="100%" style="stop-color:#{endColor};stop-opacity:1;"></stop>
            </lineargradient>
          </defs>
          <polyline points="0,0 60,0 29,29" fill="url(##{id})"></polyline>
        </svg>
      </section>
      <!-- Page Content-->
      <main class="page-content">

      <?php

        $mysqli = new mysqli('localhost', 'root', '', 'abcdrive_wp662');
          $sql = 'SELECT * FROM wp9o_users WHERE user_login = '.$_SESSION['username'].'';
          $result = mysqli_query ($mysqli, $sql) or die (mysqli_error ());
          while ($row = mysqli_fetch_array ($result)){

      ?>
        <!-- Who i Am-->
        <section class="section-98 section-sm-110">
          <div class="shell">
            <h1>Welcome to your DRIVE account</h1>
            <hr class="divider bg-mantis">
            <div class="range range-xs-center offset-top-20">
              <div class="cell-sm-9 cell-md-6">
                        <!-- Member Block Type-2-->
                        <div class="center-block"><img class="img-circle" src="images/users/user-eugene-newman-140x140.jpg" alt=""></div>
                        <h4><?php echo $row['user_nicename']; ?></h4>
                        <p>I am a jack of all trades when it comes to web design, app development and content marketing. With 12 years of experience I am proud to be called a web designer.</p>
                <ul class="list-inline list-inline-lg list-inline-dashed list-inline-dashed-wide list-inline-picton-blue">
                  <li class="big"><a class="text-bold text-uppercase" href="#"><span class="veil reveal-md-inline-block">Change my password</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </section>

        <!-- Who i Am-->
        <section class="section-98 section-sm-110">
          <div class="shell">
            <h1>My Infos</h1>
            <hr class="divider bg-mantis">
            <div class="range range-xs-center offset-top-20">
              <div class="cell-sm-9 cell-md-10">
                <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="update-data" method="post" action="bat/rd-update-data-form.php">
                    <div class="range range-xs-center">
                      <div class="cell-sm-6 offset-md-top-20">
                        <div class="form-group">
                          <label class="form-label form-label-outside" for="git-3-mailform-first-name">Card Number:</label>
                          <input class="form-control bg-white" id="git-3-mailform-first-name" type="text" name="cardnumber">
                        </div>
                      </div>
                      <div class="cell-sm-12 offset-md-top-20">
                        <div class="form-group">
                          <h3>Contact Details</h3>
                        </div>
                        <div class="text-subline offset-top-10"></div>
                      </div>
                      <div class="cell-sm-12">
                        <div class="form-group offset-sm-top-20">
                          <label class="form-label form-label-outside" for="git-3-mailform-email">E-mail * :</label>
                          <input class="form-control bg-white" id="git-3-mailform-email" type="text" name="memberemail" data-constraints="@Required @Email" value="<?php echo $row['user_email']; ?>">
                        </div>
                      </div>
                      <div class="cell-sm-6 offset-md-top-20">
                        <div class="form-group">
                          <label class="form-label form-label-outside" for="git-3-mailform-first-name">Mobile Phone No. *:</label>
                          <input class="form-control bg-white" id="git-3-mailform-first-name" type="text" name="mobilephone" data-constraints="@Required">
                        </div>
                      </div>
                      <div class="cell-sm-6 offset-md-top-20">
                        <div class="form-group">
                          <label class="form-label form-label-outside" for="git-3-mailform-last-name">Home Phone No. :</label>
                          <input class="form-control bg-white" id="git-3-mailform-last-name" type="text" name="homephone">
                        </div>
                      </div>
                      <div class="cell-sm-12 offset-md-top-50">
                        <div class="form-group">
                          <h3>Residential Address</h3>
                        </div>
                        <div class="text-subline offset-top-10"></div>
                      </div>
                      <div class="cell-sm-12">
                        <div class="form-group offset-sm-top-20">
                          <label class="form-label form-label-outside" for="git-3-mailform-phone">Address (Line 1)* :</label>
                          <input class="form-control bg-white" id="git-3-mailform-phone" type="text" name="address" data-constraints="@Required">
                        </div>
                      </div>
                      <div class="cell-sm-12">
                        <div class="form-group offset-sm-top-20">
                          <label class="form-label form-label-outside" for="git-3-mailform-phone">Address (Line 2)* :</label>
                          <input class="form-control bg-white" id="git-3-mailform-phone" type="text" name="address2">
                        </div>
                      </div>
                      <div class="cell-sm-6">
                        <div class="form-group offset-sm-top-20">
                          <label class="form-label form-label-outside" for="git-3-mailform-phone">Area :</label>
                          <input class="form-control bg-white" id="git-3-mailform-phone" type="text" name="area">
                        </div>
                      </div>
                      <div class="cell-sm-6">
                        <div class="form-group offset-sm-top-20">
                          <label class="form-label form-label-outside" for="git-3-mailform-last-name">Village/Town/City *:</label>
                          <select class="form-control select2-hidden-accessible" name="menucity" id="rd-mailform-select" data-placeholder="Select an option" data-minimum-results-for-search="Infinity" tabindex="-1" aria-hidden="true">
                            <option value="">---</option>
                            <option value="Abercrombie">Abercrombie</option>
                            <option value="Albion">Albion</option>
                            <option value="Alma">Alma</option>
                            <option value="Amaury">Amaury</option>
                            <option value="Anse aux Anglais">Anse aux Anglais</option>
                            <option value="Anse Jonchee">Anse Jonchee</option>
                            <option value="Antoinette">Antoinette</option>
                            <option value="Argy">Argy</option>
                            <option value="Arsenal">Arsenal</option>
                            <option value="Bagatelle">Bagatelle</option>
                            <option value="Baie aux Huitres">Baie aux Huitres</option>
                            <option value="Baie du Cap">Baie du Cap</option>
                            <option value="Baie du Tombeau">Baie du Tombeau</option>
                            <option value="Baie Manioc">Baie Manioc</option>
                            <option value="Baie Topaze">Baie Topaze</option>
                            <option value="Bain des Dames">Bain des Dames</option>
                            <option value="Balisson">Balisson</option>
                            <option value="Bambous">Bambous</option>
                            <option value="Bambous Virieux">Bambous Virieux</option>
                            <option value="Bananes">Bananes</option>
                            <option value="Bar le Duc">Bar le Duc</option>
                            <option value="Barlow">Barlow</option>
                            <option value="Bassin Cabri">Bassin Cabri</option>
                            <option value="Bassin Loulou">Bassin Loulou</option>
                            <option value="Batimarais">Batimarais</option>
                            <option value="Beau Bassin" selected="selected">Beau Bassin</option>
                            <option value="Beau Bois">Beau Bois</option>
                            <option value="Beau Champs">Beau Champs</option>
                            <option value="Beau Fond">Beau Fond</option>
                            <option value="Beau Mangue">Beau Mangue</option>
                            <option value="Beau Manguier">Beau Manguier</option>
                            <option value="Beau Plan">Beau Plan</option>
                            <option value="Beau Sejour">Beau Sejour</option>
                            <option value="Beau Site">Beau Site</option>
                            <option value="Beau Vallon">Beau Vallon</option>
                            <option value="Beaux Songes">Beaux Songes</option>
                            <option value="Bel Air">Bel Air</option>
                            <option value="Bel Air Riviere Seche">Bel Air Riviere Seche</option>
                            <option value="Bel Etang">Bel Etang</option>
                            <option value="Bel Ombre">Bel Ombre</option>
                            <option value="Bell Village">Bell Village</option>
                            <option value="Belle Etoile">Belle Etoile</option>
                            <option value="Belle Isle">Belle Isle</option>
                            <option value="Belle Mare">Belle Mare</option>
                            <option value="Belle Rive">Belle Rive</option>
                            <option value="Belle Rose">Belle Rose</option>
                            <option value="Belle Terre">Belle Terre</option>
                            <option value="Belle Vue">Belle Vue</option>
                            <option value="Belle Vue Allendy">Belle Vue Allendy</option>
                            <option value="Belle Vue Harel">Belle Vue Harel</option>
                            <option value="Belle Vue Maurel">Belle Vue Maurel</option>
                            <option value="Belle Vue Pilot">Belle Vue Pilot</option>
                            <option value="Belmont">Belmont</option>
                            <option value="Belvedere">Belvedere</option>
                            <option value="Bemanique">Bemanique</option>
                            <option value="Benares">Benares</option>
                            <option value="Bestel">Bestel</option>
                            <option value="Bety">Bety</option>
                            <option value="Bois Cheri">Bois Cheri</option>
                            <option value="Bois d’Oiseaux">Bois d’Oiseaux</option>
                            <option value="Bois des Amourettes">Bois des Amourettes</option>
                            <option value="Bois Jacot">Bois Jacot</option>
                            <option value="Bois Mangue">Bois Mangue</option>
                            <option value="Bois Marchand">Bois Marchand</option>
                            <option value="Bois Pignolet">Bois Pignolet</option>
                            <option value="Bois Pougnet">Bois Pougnet</option>
                            <option value="Bois Rouge">Bois Rouge</option>
                            <option value="Bois Sec">Bois Sec</option>
                            <option value="Bon Accueil">Bon Accueil</option>
                            <option value="Bon Air">Bon Air</option>
                            <option value="Bon Courage">Bon Courage</option>
                            <option value="Bon Espoir">Bon Espoir</option>
                            <option value="Bon Manioc">Bon Manioc</option>
                            <option value="Bonne Mere">Bonne Mere</option>
                            <option value="Bonne Terre">Bonne Terre</option>
                            <option value="Bonne Veine">Bonne Veine</option>
                            <option value="Bouchon">Bouchon</option>
                            <option value="Bramsthan">Bramsthan</option>
                            <option value="Bras d’Eau">Bras d’Eau</option>
                            <option value="Brisee Verdiere">Brisee Verdiere</option>
                            <option value="Britannia">Britannia</option>
                            <option value="Brule">Brule</option>
                            <option value="Cachette">Cachette</option>
                            <option value="Calebasses">Calebasses</option>
                            <option value="Camp Accacia">Camp Accacia</option>
                            <option value="Camp Auguste">Camp Auguste</option>
                            <option value="Camp Benoit">Camp Benoit</option>
                            <option value="Camp Berthaud">Camp Berthaud</option>
                            <option value="Camp Bestel">Camp Bestel</option>
                            <option value="Camp Bonnemere">Camp Bonnemere</option>
                            <option value="Camp Bouillon">Camp Bouillon</option>
                            <option value="Camp Carol">Camp Carol</option>
                            <option value="Camp Cassia">Camp Cassia</option>
                            <option value="Camp Caval">Camp Caval</option>
                            <option value="Camp Creole">Camp Creole</option>
                            <option value="Camp de Masque">Camp de Masque</option>
                            <option value="Camp de Masque Pave">Camp de Masque Pave</option>
                            <option value="Camp des Embrevades">Camp des Embrevades</option>
                            <option value="Camp Diable">Camp Diable</option>
                            <option value="Camp du Roi">Camp du Roi</option>
                            <option value="Camp Fouquereaux">Camp Fouquereaux</option>
                            <option value="Camp Garreau">Camp Garreau</option>
                            <option value="Camp Ithier">Camp Ithier</option>
                            <option value="Camp Jardin">Camp Jardin</option>
                            <option value="Camp La Savanne">Camp La Savanne</option>
                            <option value="Camp Malgache">Camp Malgache</option>
                            <option value="Camp Mapou">Camp Mapou</option>
                            <option value="Camp Marcelin">Camp Marcelin</option>
                            <option value="Camp Poorun">Camp Poorun</option>
                            <option value="Camp Roches">Camp Roches</option>
                            <option value="Camp Sonah">Camp Sonah</option>
                            <option value="Camp Thorel">Camp Thorel</option>
                            <option value="Camp Thoret">Camp Thoret</option>
                            <option value="Camp Yoloff">Camp Yoloff</option>
                            <option value="Campbell">Campbell</option>
                            <option value="Candos">Candos</option>
                            <option value="Canot">Canot</option>
                            <option value="Cap Malheureux">Cap Malheureux</option>
                            <option value="Caroline">Caroline</option>
                            <option value="Carreau La Liane">Carreau La Liane</option>
                            <option value="Carreau Lalo">Carreau Lalo</option>
                            <option value="Cascavelle">Cascavelle</option>
                            <option value="Case Noyale">Case Noyale</option>
                            <option value="Casela">Casela</option>
                            <option value="Cassis">Cassis</option>
                            <option value="Cent Gaulettes">Cent Gaulettes</option>
                            <option value="Centre de Flacq">Centre de Flacq</option>
                            <option value="Chamarel">Chamarel</option>
                            <option value="Chamouny">Chamouny</option>
                            <option value="Chantenay">Chantenay</option>
                            <option value="Chebel">Chebel</option>
                            <option value="Chemin Grenier">Chemin Grenier</option>
                            <option value="Choisy">Choisy</option>
                            <option value="Cinq Arpents">Cinq Arpents</option>
                            <option value="Circonstance">Circonstance</option>
                            <option value="Cite La Cure">Cite La Cure</option>
                            <option value="Cite Valijee">Cite Valijee</option>
                            <option value="Citron Donis">Citron Donis</option>
                            <option value="Citronelle">Citronelle</option>
                            <option value="Clarence">Clarence</option>
                            <option value="Clavet">Clavet</option>
                            <option value="Clemencia">Clemencia</option>
                            <option value="Cluny">Cluny</option>
                            <option value="Congomah">Congomah</option>
                            <option value="Constance">Constance</option>
                            <option value="Coquinbourg">Coquinbourg</option>
                            <option value="Coromandel">Coromandel</option>
                            <option value="Cote d’Or">Cote d’Or</option>
                            <option value="Coteau Raffin">Coteau Raffin</option>
                            <option value="Cottage">Cottage</option>
                            <option value="Creve Coeur">Creve Coeur</option>
                            <option value="Curepipe">Curepipe</option>
                            <option value="D’Epinay">D’Epinay</option>
                            <option value="Dagotiere">Dagotiere</option>
                            <option value="Dalais">Dalais</option>
                            <option value="Deep River">Deep River</option>
                            <option value="Deux Bras">Deux Bras</option>
                            <option value="Deux Freres">Deux Freres</option>
                            <option value="Dubreuil">Dubreuil</option>
                            <option value="Eau Bleue">Eau Bleue</option>
                            <option value="Eau Bonne">Eau Bonne</option>
                            <option value="Eau Vannee">Eau Vannee</option>
                            <option value="Eaux Coulee">Eaux Coulee</option>
                            <option value="Ebene CyberCity">Ebene CyberCity</option>
                            <option value="Ecroignard">Ecroignard</option>
                            <option value="Engrais Cathan">Engrais Cathan</option>
                            <option value="Engrais Martial">Engrais Martial</option>
                            <option value="Ernest Florent">Ernest Florent</option>
                            <option value="Ferney">Ferney</option>
                            <option value="Ferney Mill">Ferney Mill</option>
                            <option value="Flacq">Flacq</option>
                            <option value="Flic en Flac">Flic en Flac</option>
                            <option value="Floreal">Floreal</option>
                            <option value="Fond du Sac">Fond du Sac</option>
                            <option value="Fontenelle">Fontenelle</option>
                            <option value="Forbach">Forbach</option>
                            <option value="Forest Side">Forest Side</option>
                            <option value="Frederica">Frederica</option>
                            <option value="Germain">Germain</option>
                            <option value="Glen Park">Glen Park</option>
                            <option value="Gokoola">Gokoola</option>
                            <option value="Goodlands">Goodlands</option>
                            <option value="Grand Baie">Grand Baie</option>
                            <option value="Grand Bel Air">Grand Bel Air</option>
                            <option value="Grand Bois">Grand Bois</option>
                            <option value="Grand dans Fond">Grand dans Fond</option>
                            <option value="Grand Gaube">Grand Gaube</option>
                            <option value="Grand Riviere Nord Ouest">Grand Riviere Nord Ouest</option>
                            <option value="Grand Riviere Noire">Grand Riviere Noire</option>
                            <option value="Grand Sable">Grand Sable</option>
                            <option value="Grande Montagne">Grande Montagne</option>
                            <option value="Grande Retraite">Grande Retraite</option>
                            <option value="Grande Rivere">Grande Rivere</option>
                            <option value="Grande Riviere Sud Est">Grande Riviere Sud Est</option>
                            <option value="Grande Rosalie">Grande Rosalie</option>
                            <option value="Gros Billot">Gros Billot</option>
                            <option value="Gros Bois">Gros Bois</option>
                            <option value="Gros Cailloux">Gros Cailloux</option>
                            <option value="Haute Rive">Haute Rive</option>
                            <option value="Helvetia">Helvetia</option>
                            <option value="Henrietta">Henrietta</option>
                            <option value="Hermitage">Hermitage</option>
                            <option value="Herve">Herve</option>
                            <option value="Highlands">Highlands</option>
                            <option value="Hollywood">Hollywood</option>
                            <option value="Ilot">Ilot</option>
                            <option value="Isidore Rose">Isidore Rose</option>
                            <option value="Joli Bois">Joli Bois</option>
                            <option value="Khoyratty">Khoyratty</option>
                            <option value="L’Agrement">L’Agrement</option>
                            <option value="L’Amitie">L’Amitie</option>
                            <option value="L’Assurance">L’Assurance</option>
                            <option value="L’Avenir">L’Avenir</option>
                            <option value="L’Embrasure">L’Embrasure</option>
                            <option value="L’Escalier">L’Escalier</option>
                            <option value="L’Esperance">L’Esperance</option>
                            <option value="Union">Union</option>
                            <option value="L’Unite">L’Unite</option>
                            <option value="La Baraque">La Baraque</option>
                            <option value="La Bergerie">La Bergerie</option>
                            <option value="La Caroline">La Caroline</option>
                            <option value="La Caverne">La Caverne</option>
                            <option value="La Chaumiere">La Chaumiere</option>
                            <option value="La Clemence">La Clemence</option>
                            <option value="La Commune">La Commune</option>
                            <option value="La Coterie">La Coterie</option>
                            <option value="La Crete">La Crete</option>
                            <option value="La Ferme">La Ferme</option>
                            <option value="La Flora">La Flora</option>
                            <option value="La Fouche">La Fouche</option>
                            <option value="La Gaiete">La Gaiete</option>
                            <option value="La Gaulette">La Gaulette</option>
                            <option value="La Laura">La Laura</option>
                            <option value="La Louise">La Louise</option>
                            <option value="La Lucia">La Lucia</option>
                            <option value="La Lucie">La Lucie</option>
                            <option value="La Marie">La Marie</option>
                            <option value="La Mecque">La Mecque</option>
                            <option value="La Mivoie">La Mivoie</option>
                            <option value="La Morue">La Morue</option>
                            <option value="La Nourrice">La Nourrice</option>
                            <option value="La Rampe">La Rampe</option>
                            <option value="La Rampe - Le Moirt">La Rampe - Le Moirt</option>
                            <option value="La Rosa">La Rosa</option>
                            <option value="La Source">La Source</option>
                            <option value="La Sourdine">La Sourdine</option>
                            <option value="Labonte">Labonte</option>
                            <option value="Labourdonnais">Labourdonnais</option>
                            <option value="Lagesse">Lagesse</option>
                            <option value="L'Agrement">L'Agrement</option>
                            <option value="Lallmatie">Lallmatie</option>
                            <option value="Lapeyre">Lapeyre</option>
                            <option value="Latanier">Latanier</option>
                            <option value="Laventure">Laventure</option>
                            <option value="Lavilleon">Lavilleon</option>
                            <option value="Le Bouchon">Le Bouchon</option>
                            <option value="Le Chaland">Le Chaland</option>
                            <option value="Le Goulet">Le Goulet</option>
                            <option value="Le Hochet">Le Hochet</option>
                            <option value="Le Marres">Le Marres</option>
                            <option value="Le Morne">Le Morne</option>
                            <option value="Le Petrin">Le Petrin</option>
                            <option value="Le Plessis">Le Plessis</option>
                            <option value="Le Ravin">Le Ravin</option>
                            <option value="Le Reduit">Le Reduit</option>
                            <option value="Le Val">Le Val</option>
                            <option value="Le Vallon">Le Vallon</option>
                            <option value="Leonbourg">Leonbourg</option>
                            <option value="Les Guibies">Les Guibies</option>
                            <option value="Les Mariannes">Les Mariannes</option>
                            <option value="Les Marres">Les Marres</option>
                            <option value="Les Salines">Les Salines</option>
                            <option value="L'Esperance Trebuchet">L'Esperance Trebuchet</option>
                            <option value="L'Espoir">L'Espoir</option>
                            <option value="Lesur">Lesur</option>
                            <option value="Ligne Barrin">Ligne Barrin</option>
                            <option value="Luchon">Luchon</option>
                            <option value="Luçon">Luçon</option>
                            <option value="L'Union">L'Union</option>
                            <option value="Madame Azor">Madame Azor</option>
                            <option value="Madame Cayeux">Madame Cayeux</option>
                            <option value="Magenta">Magenta</option>
                            <option value="Mahebourg">Mahebourg</option>
                            <option value="Maison Blanche">Maison Blanche</option>
                            <option value="Malherbes">Malherbes</option>
                            <option value="Mangues">Mangues</option>
                            <option value="Mapou">Mapou</option>
                            <option value="Mare Carree">Mare Carree</option>
                            <option value="Mare Chicose">Mare Chicose</option>
                            <option value="Mare d’Albert">Mare d’Albert</option>
                            <option value="Mare d’Australia">Mare d’Australia</option>
                            <option value="Mare Jacot">Mare Jacot</option>
                            <option value="Mare Jocquot">Mare Jocquot</option>
                            <option value="Mare La Chaux">Mare La Chaux</option>
                            <option value="Mare Saint-Amand">Mare Saint-Amand</option>
                            <option value="Mare Samson">Mare Samson</option>
                            <option value="Mare Tabac">Mare Tabac</option>
                            <option value="Marechal">Marechal</option>
                            <option value="Marie Jeanne">Marie Jeanne</option>
                            <option value="Medine">Medine</option>
                            <option value="Medine Anna">Medine Anna</option>
                            <option value="Melotte">Melotte</option>
                            <option value="Melrose">Melrose</option>
                            <option value="Melville">Melville</option>
                            <option value="Mesnil">Mesnil</option>
                            <option value="Metheline">Metheline</option>
                            <option value="Midlands">Midlands</option>
                            <option value="Minissy">Minissy</option>
                            <option value="Moka">Moka</option>
                            <option value="Mon Desert">Mon Desert</option>
                            <option value="Mon Goût">Mon Goût</option>
                            <option value="Mon Loisir">Mon Loisir</option>
                            <option value="Mon Piton">Mon Piton</option>
                            <option value="Mon Repos">Mon Repos</option>
                            <option value="Mon Rocher">Mon Rocher</option>
                            <option value="Mon Songe">Mon Songe</option>
                            <option value="Mon Tresor">Mon Tresor</option>
                            <option value="Mon Tresor - Mon Desert">Mon Tresor - Mon Desert</option>
                            <option value="Mont Blanc">Mont Blanc</option>
                            <option value="Mont Choisy">Mont Choisy</option>
                            <option value="Mont Fleury">Mont Fleury</option>
                            <option value="Mont Ida">Mont Ida</option>
                            <option value="Mont Lubin">Mont Lubin</option>
                            <option value="Montagne Blanche">Montagne Blanche</option>
                            <option value="Montagne Longue">Montagne Longue</option>
                            <option value="Montagne Ory">Montagne Ory</option>
                            <option value="Montebello">Montebello</option>
                            <option value="Morcellement Saint Andre">Morcellement Saint Andre</option>
                            <option value="Mount">Mount</option>
                            <option value="New Grove">New Grove</option>
                            <option value="Notre Dame">Notre Dame</option>
                            <option value="Nouvelle Decouverte">Nouvelle Decouverte</option>
                            <option value="Nouvelle France">Nouvelle France</option>
                            <option value="Olivia">Olivia</option>
                            <option value="Pailles">Pailles</option>
                            <option value="Palissade Ternel">Palissade Ternel</option>
                            <option value="Palma">Palma</option>
                            <option value="Palmar">Palmar</option>
                            <option value="Palmyre">Palmyre</option>
                            <option value="Pamplemousses">Pamplemousses</option>
                            <option value="Patate Theophile">Patate Theophile</option>
                            <option value="Paves">Paves</option>
                            <option value="Pavillon">Pavillon</option>
                            <option value="Pelissis">Pelissis</option>
                            <option value="Pellegrin">Pellegrin</option>
                            <option value="Pereybere">Pereybere</option>
                            <option value="Petit Bel Air">Petit Bel Air</option>
                            <option value="Petit Bois">Petit Bois</option>
                            <option value="Petit Brule">Petit Brule</option>
                            <option value="Petit Camp">Petit Camp</option>
                            <option value="Petit Gabriel">Petit Gabriel</option>
                            <option value="Petit Gamin">Petit Gamin</option>
                            <option value="Petit Gravier">Petit Gravier</option>
                            <option value="Petit Paquet">Petit Paquet</option>
                            <option value="Petit Raffray">Petit Raffray</option>
                            <option value="Petit Sable">Petit Sable</option>
                            <option value="Petit Verger">Petit Verger</option>
                            <option value="Petite Butte">Petite Butte</option>
                            <option value="Petite Cabane">Petite Cabane</option>
                            <option value="Petite Case Noyale">Petite Case Noyale</option>
                            <option value="Petite Julie">Petite Julie</option>
                            <option value="Petite Riviere">Petite Riviere</option>
                            <option value="Petite Riviere Noire">Petite Riviere Noire</option>
                            <option value="Petite Rosalie">Petite Rosalie</option>
                            <option value="Phoenix">Phoenix</option>
                            <option value="Piton">Piton</option>
                            <option value="Piton village">Piton village</option>
                            <option value="Plaine Corail">Plaine Corail</option>
                            <option value="Plaine des Papayes">Plaine des Papayes</option>
                            <option value="Plaine des Roches">Plaine des Roches</option>
                            <option value="Plaine Magnien">Plaine Magnien</option>
                            <option value="Plaine Noel">Plaine Noel</option>
                            <option value="Plaine Sophie">Plaine Sophie</option>
                            <option value="Plaine Verte">Plaine Verte</option>
                            <option value="Plaisance">Plaisance</option>
                            <option value="Plein Bois">Plein Bois</option>
                            <option value="Pointe aux Canonniers">Pointe aux Canonniers</option>
                            <option value="Pointe aux Feuilles">Pointe aux Feuilles</option>
                            <option value="Pointe aux Piments">Pointe aux Piments</option>
                            <option value="Pointe aux Roches">Pointe aux Roches</option>
                            <option value="Pointe aux Sables">Pointe aux Sables</option>
                            <option value="Pointe d’Esny">Pointe d’Esny</option>
                            <option value="Pomponnette">Pomponnette</option>
                            <option value="Pont Blanc">Pont Blanc</option>
                            <option value="Pont Praslin">Pont Praslin</option>
                            <option value="Port Louis">Port Louis</option>
                            <option value="Port Mathurin">Port Mathurin</option>
                            <option value="Port Sud-Est">Port Sud-Est</option>
                            <option value="Poste de Flacq">Poste de Flacq</option>
                            <option value="Poudre d’Or">Poudre d’Or</option>
                            <option value="Poudre d’Or Hamlet">Poudre d’Or Hamlet</option>
                            <option value="Poudre D’Or Village">Poudre D’Or Village</option>
                            <option value="Providence">Providence</option>
                            <option value="Quartier Militaire">Quartier Militaire</option>
                            <option value="Quatre Bornes">Quatre Bornes</option>
                            <option value="Quatre Cocos">Quatre Cocos</option>
                            <option value="Quatre Soeurs">Quatre Soeurs</option>
                            <option value="Quatre Vents">Quatre Vents</option>
                            <option value="Queen Victoria">Queen Victoria</option>
                            <option value="Quinze Cantons">Quinze Cantons</option>
                            <option value="Ravin">Ravin</option>
                            <option value="Reduit">Reduit</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Reunion Maurel">Reunion Maurel</option>
                            <option value="Riambel">Riambel</option>
                            <option value="Riche Bois">Riche Bois</option>
                            <option value="Riche en Eau">Riche en Eau</option>
                            <option value="Riche Terre">Riche Terre</option>
                            <option value="Ripailles">Ripailles</option>
                            <option value="River Side">River Side</option>
                            <option value="Riviere Baptiste">Riviere Baptiste</option>
                            <option value="Riviere Cocos">Riviere Cocos</option>
                            <option value="Riviere des Anguilles">Riviere des Anguilles</option>
                            <option value="Riviere des Creoles">Riviere des Creoles</option>
                            <option value="Riviere Dragon">Riviere Dragon</option>
                            <option value="Riviere du Poste">Riviere du Poste</option>
                            <option value="Riviere du Rempart">Riviere du Rempart</option>
                            <option value="Riviere Noire">Riviere Noire</option>
                            <option value="Riviere Profonde">Riviere Profonde</option>
                            <option value="Riviere Seche">Riviere Seche</option>
                            <option value="Robinson">Robinson</option>
                            <option value="Roche Bois">Roche Bois</option>
                            <option value="Roche Bon Dieu">Roche Bon Dieu</option>
                            <option value="Roche Terre">Roche Terre</option>
                            <option value="Roches Brunes">Roches Brunes</option>
                            <option value="Roches Noires">Roches Noires</option>
                            <option value="Rose Belle">Rose Belle</option>
                            <option value="Rose Hill">Rose Hill</option>
                            <option value="Roselyn Cottage">Roselyn Cottage</option>
                            <option value="Ruisseau Copeaux">Ruisseau Copeaux</option>
                            <option value="Ruisseau des Creoles">Ruisseau des Creoles</option>
                            <option value="Ruisseau Rose">Ruisseau Rose</option>
                            <option value="Saint Antoine">Saint Antoine</option>
                            <option value="Saint Aubin">Saint Aubin</option>
                            <option value="Saint Avold">Saint Avold</option>
                            <option value="Saint Cloud">Saint Cloud</option>
                            <option value="Saint Felix">Saint Felix</option>
                            <option value="Saint Francois">Saint Francois</option>
                            <option value="Saint Gabriel">Saint Gabriel</option>
                            <option value="Saint Hilaire">Saint Hilaire</option>
                            <option value="Saint Hubert">Saint Hubert</option>
                            <option value="Saint Jean">Saint Jean</option>
                            <option value="Saint Julien">Saint Julien</option>
                            <option value="Saint Julien Village">Saint Julien Village</option>
                            <option value="Saint Louis">Saint Louis</option>
                            <option value="Saint Martin">Saint Martin</option>
                            <option value="Saint Paul">Saint Paul</option>
                            <option value="Saint Pierre">Saint Pierre</option>
                            <option value="Saint Remy">Saint Remy</option>
                            <option value="Saint-Andre">Saint-Andre</option>
                            <option value="Sainte Croix">Sainte Croix</option>
                            <option value="Sainte Madeleine">Sainte Madeleine</option>
                            <option value="Sainte Philomene">Sainte Philomene</option>
                            <option value="Sainte Rita">Sainte Rita</option>
                            <option value="Sainte-Marie">Sainte-Marie</option>
                            <option value="Saint-Joseph">Saint-Joseph</option>
                            <option value="Salazie">Salazie</option>
                            <option value="Sans Souci">Sans Souci</option>
                            <option value="Savannah">Savannah</option>
                            <option value="Savinia">Savinia</option>
                            <option value="Schoenfeld">Schoenfeld</option>
                            <option value="Sebastopol">Sebastopol</option>
                            <option value="Seizieme Mille">Seizieme Mille</option>
                            <option value="Senneville">Senneville</option>
                            <option value="Solferino">Solferino</option>
                            <option value="Solitude">Solitude</option>
                            <option value="Sottise">Sottise</option>
                            <option value="Souillac">Souillac</option>
                            <option value="Soupir">Soupir</option>
                            <option value="Stanley">Stanley</option>
                            <option value="Suase">Suase</option>
                            <option value="Sujakas">Sujakas</option>
                            <option value="Surinam">Surinam</option>
                            <option value="Tamarin">Tamarin</option>
                            <option value="Telfair">Telfair</option>
                            <option value="Terracine">Terracine</option>
                            <option value="Terre Rouge">Terre Rouge</option>
                            <option value="The Mount">The Mount</option>
                            <option value="The Vale">The Vale</option>
                            <option value="Tranquebar">Tranquebar</option>
                            <option value="Trefles">Trefles</option>
                            <option value="Trianon">Trianon</option>
                            <option value="Trio">Trio</option>
                            <option value="Triolet">Triolet</option>
                            <option value="Trois Boutiques">Trois Boutiques</option>
                            <option value="Trois Cavernes">Trois Cavernes</option>
                            <option value="Trois Ilots">Trois Ilots</option>
                            <option value="Trou aux Biches">Trou aux Biches</option>
                            <option value="Trou Chenilles">Trou Chenilles</option>
                            <option value="Trou d’Eau Douce">Trou d’Eau Douce</option>
                            <option value="Trublet">Trublet</option>
                            <option value="Tyack">Tyack</option>
                            <option value="Union Flacq">Union Flacq</option>
                            <option value="Union Maurel">Union Maurel</option>
                            <option value="Union Park">Union Park</option>
                            <option value="Union Saint Aubin">Union Saint Aubin</option>
                            <option value="Union Vale">Union Vale</option>
                            <option value="Vacoas">Vacoas</option>
                            <option value="Vainqueur">Vainqueur</option>
                            <option value="Valentina">Valentina</option>
                            <option value="Valetta">Valetta</option>
                            <option value="Vallee des Pretres">Vallee des Pretres</option>
                            <option value="Vallee Pitot">Vallee Pitot</option>
                            <option value="Valriche">Valriche</option>
                            <option value="Valton">Valton</option>
                            <option value="Verdun">Verdun</option>
                            <option value="Vieux Grand Port">Vieux Grand Port</option>
                            <option value="Ville Bague">Ville Bague</option>
                            <option value="Ville d’Avray">Ville d’Avray</option>
                            <option value="Ville Noire">Ville Noire</option>
                            <option value="Ville Valio">Ville Valio</option>
                            <option value="Virginia">Virginia</option>
                            <option value="Vuillemin">Vuillemin</option>
                            <option value="Wolmar">Wolmar</option>
                            <option value="Yemen">Yemen</option>
                          </select>
                        </div>
                      </div>

                      <div class="cell-sm-12 offset-md-top-50">
                        <div class="form-group">
                          <h3>Professional Details</h3>
                        </div>
                        <div class="text-subline offset-top-10"></div>
                      </div>

                      <div class="cell-sm-6">
                        <div class="form-group offset-sm-top-20">
                          <label class="form-label form-label-outside" for="git-3-mailform-phone">Profession* :</label>
                          <input class="form-control bg-white" id="git-3-mailform-phone" type="text" name="profession" data-constraints="@Required">
                        </div>
                      </div>
                      <div class="cell-sm-6">
                        <div class="form-group offset-sm-top-20">
                          <label class="form-label form-label-outside" for="git-3-mailform-phone"> Company Name :</label>
                          <input class="form-control bg-white" id="git-3-mailform-phone" type="text" name="companyname">
                        </div>
                      </div>

                      <div class="cell-sm-7">
                        <div class="form-group offset-sm-top-20">
                          <label class="form-label form-label-outside" for="git-3-mailform-phone">Industry :</label>
                          <select class="form-control select2-hidden-accessible" name="industry" id="rd-mailform-select" data-placeholder="Select an option" data-minimum-results-for-search="Infinity" tabindex="-1" aria-hidden="true">
                            <option value="Other">Other</option>
                            <option value="Accommodation and Food Services">Accommodation and Food Services</option>
                            <option value="Administrative and Support and Waste Management and Remediation Services">Administrative and Support and Waste Management and Remediation Services</option>
                            <option value="Agriculture, Forestry, Fishing and Hunting">Agriculture, Forestry, Fishing and Hunting</option>
                            <option value="Arts, Entertainment, and Recreation">Arts, Entertainment, and Recreation</option>
                            <option value="Automobile">Automobile</option>
                            <option value="Construction">Construction</option>
                            <option value="Educational Services">Educational Services</option>
                            <option value="Finance and Insurance">Finance and Insurance</option>
                            <option value="Health Care and Social Assistance">Health Care and Social Assistance</option>
                            <option value="Information">Information</option>
                            <option value="Management of Companies and Enterprises">Management of Companies and Enterprises</option>
                            <option value="Manufacturing">Manufacturing</option>
                            <option value="Mining, Quarrying, and Oil and Gas Extraction">Mining, Quarrying, and Oil and Gas Extraction</option>
                            <option value="Other Services (except Public Administration)">Other Services (except Public Administration)</option>
                            <option value="Professional, Scientific, and Technical Services">Professional, Scientific, and Technical Services</option>
                            <option value="Public Administration">Public Administration</option>
                            <option value="Real Estate and Rental and Leasing">Real Estate and Rental and Leasing</option>
                            <option value="Retail Trade">Retail Trade</option>
                            <option value="Tourism">Tourism</option>
                            <option value="Transportation and Warehousing">Transportation and Warehousing</option>
                            <option value="Utilities">Utilities</option>
                            <option value="Wholesale Trade">Wholesale Trade</option>
                          </select>
                        </div>
                      </div>

                      <div class="cell-sm-5 offset-md-top-20">
                        <div class="form-group">
                          <label class="form-label form-label-outside" for="git-3-mailform-first-name">Office Phone No. :</label>
                          <input class="form-control bg-white" id="git-3-mailform-first-name" type="text" name="officephone">
                        </div>
                      </div>

                      <div class="cell-sm-12 offset-md-top-50">
                        <div class="form-group">
                          <h3>Vehicles Information</h3>
                        </div>
                        <div class="text-subline offset-top-10"></div>
                      </div>

                      <div class="cell-sm-12 offset-md-top-30">
                        <div class="form-group">
                          <h5>Vehicle 1*</h5>
                        </div>
                      </div>

                      <div class="cell-sm-6">
                        <div class="form-group offset-sm-top-20">
                          <label class="form-label form-label-outside" for="git-3-mailform-phone">Brand* :</label>
                          <input class="form-control bg-white" id="git-3-mailform-phone" type="text" name="brand1">
                        </div>
                      </div>

                      <div class="cell-sm-6">
                        <div class="form-group offset-sm-top-20">
                          <label class="form-label form-label-outside" for="git-3-mailform-phone">Model/Year* :</label>
                          <input class="form-control bg-white" id="git-3-mailform-phone" type="text" name="model1">
                        </div>
                      </div>

                      <div class="cell-sm-6">
                        <div class="form-group offset-sm-top-20">
                          <label class="form-label form-label-outside" for="git-3-mailform-phone">Registration No.* :</label>
                          <input class="form-control bg-white" id="git-3-mailform-phone" type="text" name="plate1">
                        </div>
                      </div>

                      <div class="cell-sm-6">
                        <div class="form-group offset-sm-top-20">
                          <label class="form-label form-label-outside" for="git-3-mailform-phone"> Car Owner Type* :</label>
                          <select class="form-control select2-hidden-accessible" name="carownertype1" id="rd-mailform-select" data-placeholder="Select an option" data-minimum-results-for-search="Infinity" tabindex="-1" aria-hidden="true">
                            <option value="Own car">Own car</option>
                            <option value="Company car">Company car</option>
                          </select>
                        </div>
                      </div>

                      <div class="cell-sm-12 offset-md-top-30">
                        <div class="form-group">
                          <h5>Vehicle 2</h5>
                        </div>
                      </div>

                      <div class="cell-sm-6">
                        <div class="form-group offset-sm-top-20">
                          <label class="form-label form-label-outside" for="git-3-mailform-phone">Brand* :</label>
                          <input class="form-control bg-white" id="git-3-mailform-phone" type="text" name="brand2">
                        </div>
                      </div>

                      <div class="cell-sm-6">
                        <div class="form-group offset-sm-top-20">
                          <label class="form-label form-label-outside" for="git-3-mailform-phone">Model/Year* :</label>
                          <input class="form-control bg-white" id="git-3-mailform-phone" type="text" name="model2">
                        </div>
                      </div>

                      <div class="cell-sm-6">
                        <div class="form-group offset-sm-top-20">
                          <label class="form-label form-label-outside" for="git-3-mailform-phone">Registration No.* :</label>
                          <input class="form-control bg-white" id="git-3-mailform-phone" type="text" name="plate2">
                        </div>
                      </div>

                      <div class="cell-sm-6">
                        <div class="form-group offset-sm-top-20">
                          <label class="form-label form-label-outside" for="git-3-mailform-phone"> Car Owner Type* :</label>
                          <select class="form-control select2-hidden-accessible" name="carownertype2" id="rd-mailform-select" data-placeholder="Select an option" data-minimum-results-for-search="Infinity" tabindex="-1" aria-hidden="true">
                            <option value="Own car">Own car</option>
                            <option value="Company car">Company car</option>
                          </select>
                        </div>
                      </div>

                      <div class="cell-sm-12 offset-md-top-50">
                        <div class="form-group">
                          <h3>Family Information</h3>
                        </div>
                        <div class="text-subline offset-top-10"></div>
                      </div>

                      <div class="cell-sm-6">
                        <div class="form-group offset-sm-top-20">
                          <label class="form-label form-label-outside" for="git-3-mailform-phone">Marital Status :</label>
                          <select class="form-control select2-hidden-accessible" name="maritalstatus" id="rd-mailform-select" data-placeholder="Select an option" data-minimum-results-for-search="Infinity" tabindex="-1" aria-hidden="true">
                            <option value="Married">Married</option>
                            <option value="Widowed">Widowed</option>
                            <option value="Separated">Separated</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Single">Single</option>
                            <option value="Other">Other</option>
                          </select>
                        </div>
                      </div>

                      <div class="cell-sm-6">
                        <div class="form-group offset-sm-top-20">
                          <label class="form-label form-label-outside" for="git-3-mailform-phone"> Spouse/Partner Title :</label>
                          <select class="form-control select2-hidden-accessible" name="spousetitle" id="rd-mailform-select" data-placeholder="Select an option" data-minimum-results-for-search="Infinity" tabindex="-1" aria-hidden="true">
                            <option value="Mr">Mr</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Ms">Ms</option>
                            <option value="Dr">Dr</option>
                            <option value="Hon">Hon</option>
                            <option value="Sir">Sir</option>
                            <option value="Lady">Lady</option>
                          </select>
                        </div>
                      </div>

                      <div class="cell-sm-6">
                        <div class="form-group offset-sm-top-20">
                          <label class="form-label form-label-outside" for="git-3-mailform-phone">First Name :</label>
                          <input class="form-control bg-white" id="git-3-mailform-phone" type="text" name="spousefirstname">
                        </div>
                      </div>

                      <div class="cell-sm-6">
                        <div class="form-group offset-sm-top-20">
                          <label class="form-label form-label-outside" for="git-3-mailform-phone">Surname :</label>
                          <input class="form-control bg-white" id="git-3-mailform-phone" type="text" name="spousename">
                        </div>
                      </div>

                      <div class="cell-sm-12 offset-md-top-30">
                        
                        <div class="text-subline offset-top-10"></div>
                        <div class="form-group">
                          <p style="text-align: justify;">I have read the <a href="https://abcdrive.info/assistance/terms-conditions/" target="_blank">Terms and Conditions</a> of "ABC Drive", I hereby consent to ABC BPO Ltd (the Data Controller) using, processing, communicating and sharing my personal data to the ABC Group of Companies for marketing and promotional purposes relating to the "ABC Drive" Customer Loyalty Program. I confirm that the information provided is true, accurate and complete.<br/><span class="wpcf7-form-control-wrap TnC"><input type="checkbox" name="TnC" value="1" class="wpcf7-form-control wpcf7-acceptance" checked="checked" aria-invalid="false"></span> <span style="color:red"><b>Please untick if you do not wish to proceed.</b></span></p>
                        </div>
                      </div>

                    </div>
                    <div class="offset-top-24 text-center">
                      <button class="btn btn-primary" type="submit">Update Data</button>
                    </div>
                  </form>
              </div>
            </div>
          </div>
        </section>

        <?php echo $row['MbStmnt']; ?>

        <?php echo $row['MbVouchers']; ?>



      <?php
        }
      ?>
        <!-- What i Do-->
        <section class="section-98 section-sm-110 context-dark" style="background: #191919 url(images/index-09.png);">
          <div class="shell">
            <h1>What it Does?</h1>
            <hr class="divider bg-mantis">
            <div class="range range-xs-center offset-top-0">
              <div class="cell-sm-10">
                <p>My Drive Account enables you to change your account details, view your current and past voucher status and statement of account.</p>
              </div>
            </div>
            <div class="range range-sm-center offset-top-66">
              <div class="cell-sm-8 cell-md-12">
                <div class="range">
                  <div class="cell-sm-6 cell-md-3">
                            <!-- Circle Progress bar-circle-->
                            <div class="progress-bar-circle" data-value="0.87" data-gradient="#5aba67, #78c157" data-empty-fill="rgb(245,245,245)"><span></span></div>
                    <h4 class="text-bold offset-top-20">Your Available Points</h4>
                  </div>
                  <div class="offset-top-41 cell-sm-6 offset-sm-top-0 cell-md-3">
                            <!-- Circle Progress bar-circle-->
                            <div class="progress-bar-circle" data-value="0.75" data-gradient="#f5bf2f, #f3a43d" data-empty-fill="rgb(245,245,245)"><span></span></div>
                    <h4 class="text-bold offset-top-20">Sketch 3</h4>
                  </div>
                  <div class="offset-top-41 cell-sm-6 cell-md-3 offset-md-top-0">
                            <!-- Circle Progress bar-circle-->
                            <div class="progress-bar-circle" data-value="0.42" data-gradient="#64aae1, #79ccf2" data-empty-fill="rgb(245,245,245)"><span></span></div>
                    <h4 class="text-bold offset-top-20">Coding</h4>
                  </div>
                  <div class="offset-top-41 cell-sm-6 cell-md-3 offset-md-top-0">
                            <!-- Circle Progress bar-circle-->
                            <div class="progress-bar-circle" data-value="0.65" data-gradient="#f54b0f, #e50a0a" data-empty-fill="rgb(245,245,245)"><span></span></div>
                    <h4 class="text-bold offset-top-20">Development</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- My Works-->
        <section class="section-98 section-sm-110">
          
        </section>
        <!-- What Clients Say?-->
        <section class="context-dark bg-gray-base">
                  <!-- RD Parallax-->
                  <div class="rd-parallax" data-on="false" data-md-on="true">
                    <div class="rd-parallax-layer" data-speed="0.35" data-type="media" data-url="images/backgrounds/background-14-1920x651.jpg"></div>
                    <div class="rd-parallax-layer" data-speed="0" data-type="html">
                      <div class="shell section-98 section-sm-110">
                        <h1>What Clients Say?</h1>
                        <hr class="divider bg-mantis">
                        <div class="range offset-top-50">
                                  <!-- Testimonials Slider-->
                                  <div class="owl-carousel owl-carousel-default veil-md-owl-dots veil-owl-nav reveal-md-owl-nav inset-left-7p inset-right-7p" data-items="1" data-nav="true" data-dots="true" data-nav-class="[&quot;owl-prev mdi mdi-chevron-left&quot;, &quot;owl-next mdi mdi-chevron-right&quot;]">
                                    <div>
                                      <blockquote class="quote"><img class="quote-img img-circle img-bordered-white" width="80" height="80" src="images/users/user-kira-force-80x80.jpg" alt="">
                                        <p class="quote-body offset-top-34">The support service is really excellent at all levels, from first contact to more difficult IT actions. I feel safe and guaranteed regarding the purchase of this template. Thanks a lot!</p>
                                        <div class="offset-top-41">
                                          <h3 class="font-accent">Kira Force</h3>
                                        </div>
                                        <p class="text-uppercase text-bold text-spacing-120 offset-top-10"><span class="small text-malibu">Marketing, at theme.co</span></p>
                                      </blockquote>
                                    </div>
                                    <div>
                                      <blockquote class="quote"><img class="quote-img img-circle img-bordered-white" width="80" height="80" src="images/users/user-diana-russo-80x80.jpg" alt="">
                                        <p class="quote-body offset-top-34">The themes are beautiful But what really makes the difference is the customer service. Both pre and post sales support is second to none. Very fast, friendly and competent. I can only recommend this service.</p>
                                        <div class="offset-top-41">
                                          <h3 class="font-accent">Diana Russo</h3>
                                        </div>
                                        <p class="text-uppercase text-bold text-spacing-120 offset-top-10"><span class="small text-malibu">Freelance UX/UI designer</span></p>
                                      </blockquote>
                                    </div>
                                    <div>
                                      <blockquote class="quote"><img class="quote-img img-circle img-bordered-white" width="80" height="80" src="images/users/user-alex-merphy-80x80.jpg" alt="Alex Merphy">
                                        <p class="quote-body offset-top-34">I am glad I’ve purchased a template from TemplateMonster. Extraordinary customer service, always available, perfect care and knowledge of the technicians. Essential if you are not an expert programmer. In any case highly recommended. Congratulations!</p>
                                        <div class="offset-top-41">
                                          <h3 class="font-accent">Alex Merphy</h3>
                                        </div>
                                        <p class="text-uppercase text-bold text-spacing-120 offset-top-10"><span class="small text-malibu">Freelance Developer</span></p>
                                      </blockquote>
                                    </div>
                                    <div>
                                      <blockquote class="quote"><img class="quote-img img-circle img-bordered-white" width="80" height="80" src="images/users/user-amanda-smith-80x80.jpg" alt="">
                                        <p class="quote-body offset-top-34">We have purchased several themes and contacted support once, the case had to be passed to technical support but it was resolved within the day. Very fast responses and excellent templates to choose from. Would highly recommend.</p>
                                        <div class="offset-top-41">
                                          <h3 class="font-accent">Amanda Smith</h3>
                                        </div>
                                        <p class="text-uppercase text-bold text-spacing-120 offset-top-10"><span class="small text-malibu">Sales, at themes.com</span></p>
                                      </blockquote>
                                    </div>
                                    <div>
                                      <blockquote class="quote"><img class="quote-img img-circle img-bordered-white" width="80" height="80" src="images/users/user-sam-cole-80x80.jpg" alt="">
                                        <p class="quote-body offset-top-34">Amazing Support and friendly technicians. I have bothered the team on countless occasions and they have never once seemed perturbed or annoyed by me. Thanks so much!</p>
                                        <div class="offset-top-41">
                                          <h3 class="font-accent">Sam Cole</h3>
                                        </div>
                                        <p class="text-uppercase text-bold text-spacing-120 offset-top-10"><span class="small text-malibu">Founder, at YourTax.com</span></p>
                                      </blockquote>
                                    </div>
                                  </div>
                        </div>
                      </div>
                    </div>
                  </div>
        </section>
      </main>
      <!-- Page Footers-->
      <!-- Default footer-->
      <?php include('footer.php'); ?>
   
  </body>
</html>