<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style_index.css">
    <link rel="shortcut icon" href="img\logo-la_belle_annerie-noir-ConvertImage.ico" type="image/x-icon">
    <script
  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
  crossorigin="anonymous"></script>
    <title>La Belle Ânerie | Nous Contacter</title>
    <meta name="description" content="N'hésitez pas à nous contacter pour toutes questions  ou pour réserver" />
    <style>
      .wrapper img{
        width:25%;
        height:auto;
        margin:auto;
        text-align:center;

      }
      .partenaire{
        flex-direction:column;
        justify-content:center;
      }
    </style>
</head>
<body>
  <header>
      <div class="header_container">
          <img  class="img_header"src="logo-la_belle_annerie-noir.png" alt="logo-la_belle_annerie-noir">
          <div> LA BELLE ÂNERIE</div>
      </div>
      <p class="slogan">Découvrir la montagne autrement !</p>
  </header>
  <nav class="topnav nav" id="myTopnav">
      <a href="index.html" >ACCUEIL</a>
      
  
      <div class="dropdown">
        <a class="dropbtn" href="formule.html">NOS ACTIVITÉS POUR TOUS
          <i class="fa fa-caret-down"></i>
        </a>
        <div class="dropdown-content">
          <a href="famille-et-amis.html">EN FAMILLE OU ENTRES AMIS</a>
          <a href="groupe-et-scolaire.html">GROUPES ET SCOLAIRES</a>
          <a href="professionnel.html">PROFESSIONELS DE LA MONTAGNE</a>
          <a href="handicap.html">HANDI-ÂNE ET MÉDIÂN'TION</a>
        </div>
      </div> 
     <a href="ane.html">LES ÂNES</a> 
      <a class="active"href="contact.php">CONTACT</a>
      
      <a href="javascript:void(0);" class="icon" onclick="resp()">&#9776;</a>
    
</nav>
  <div class="contact-wrapper">
      <div class="contact-container">
          <div class="contact-info">
              <img src="logo-la_belle_annerie-noir.png" alt="">
              <h2>LA BELLE ÂNERIE</h2>
              <ul>
                  <li class="adresse-icon">Adresse : </li>
                  <li>Route de la Martégale</li>
                  <li>05260 ANCELLE</li>
                 
              </ul>
              <ul>
                  <li class="phone-icon"> Téléphone</li>
                  <li>+33 6 09 93 32 65</li>
              </ul>
              <ul>
                <li class="fb-icon"><a href="https://www.facebook.com/LaBelleAnerie/">Rejoignez nous sur Facebook</a></li>
              </ul>

          </div>
          <div class="contact-form">
              <h2>N'hésitez pas à nous contacter !</h2>
              <h3>Nous étudions toutes les demandes</h3>
              <form  name ="contact" id="contact"action="contact.php" method="POST">
                <input type="text" name="name" id="name" placeholder="Nom et prénom"required>
                <input type="tel" name="phone" id="phone" placeholder="Numéro de téléphone"required>
                <input type="email" name="mail" id="mail"placeholder="E-mail">
                <input type="text" name="subject" id="subject" placeholder="Objet">
                <textarea name="message" id="message" cols="35" rows="10" placeholder="Message ..."></textarea>
                <input type="submit" value="Envoyer">
                <?php
    if(isset($_POST['message'])){
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $_POST['mail'] . "\r\n";

        $message = '<h1>Message envoyé depuis la page Contact de la belle ânerie</h1>
        <p><b>Nom : </b>' . $_POST['name'] . '<br>
        <p><b>numero de téléphone : </b>' . $_POST['phone'] . '<br>
        <p><b>sujet : </b>' . $_POST['subject'] . '<br>
        <b>Email : </b>' . $_POST['mail'] . '<br>
        <b>Message : </b>' . $_POST['message'] . '</p>';

        $retour = mail('labelleanerie@lilo.org
        ', 'Envoi depuis page Contact', $message, $entete);
        if($retour) {
            echo '<p>Votre message a bien été envoyé.</p>';
           
        }
    }
    ?>
            </form>
          </div>
      </div>
      
  </div>
  <div > 
        <h1 id="partenaires"class="section-title">NOS PARTENAIRES</h1>
          <div class="wrapper">
            <div class="partenaire">
            <h2>Un gite? Des légumes de montagne? Une rencontre?</h2>
            <a href="http://les-soldanelles-ancelle.fr">
            <img src="img/soldanelle.png" alt="">
            </a>
            <p>Les Soldanelles et la Belle  nerie s’installent ensemble en 2021, pour partager un projet plus vaste : Avec Maud et Régis MEHU, maraîchers-permaculteurs, Pauline et JB construisent pour bientôt une ferme pédagogique autour de l’agriculture agroécologique. Maraîchage, petits fruits, oeufs fermiers, basse-cour, visite, hébergement en gite à la ferme, et bien sûr, les stars de la ferme, nos amis les ânes! 
</p>
            </div>
            <div class="partenaire">
              <h2>Vous cherchez un hébergement ?</h2>
              
              <a href="https://www.lamartegale.com"><img src="img/la-martégale.png" alt=""></a>
              <p>Vous cherchez un hébergement pour un séjour, un weekend en groupe, un mariage, un séminaire? 
              Ca tombe bien! Nos ânes habitent sur un Centre de Vacances!
              </p>
            </div>
            <div class="partenaire">
              <h2>Accompagnement randonnée</h2>
              
              <a href="https://accompagnateurs-champsaur.com"><img src="img/accompagnateur.png" alt=""></a>
              <p>Pour vos randos accompagnées ou pour des activités en montagne, prenez contact avec le Bureau des Accompagnateurs du Champsaur</p>
            </div>
            <div class="partenaire">
              <h2>Union National des Aniers Pluriactifs</h2>
              
              <a href="http://www.unap.eu"><img src="img/unap.png" alt=""></a>
              <p>Union National des Aniers Pluriactifs. Nos activités avec les ânes sont déclarées auprès d’un syndicat national qui nous rassemble, nous aide à nous former, protège et encadre nos animaux, nos publics et nous-même.</p>
            </div>
            <div class="partenaire">
              <h2>Association des amis des ânes</h2>
              
              <a href="http://www.assoadada.fr"><img src="img/adada.png" alt=""></a>
              <p>Vous aimez les ânes? Alors qu’ils sont d’une gentillesse incroyable, nos amis à grandes oreilles n’ont malheureusement pas toujours la vie rose… l’ADADA offre un refuge à ceux qui n’ont pas eu de chance. Participez protéger et défendre les ânes en soutenant l’ADADA!
</p>
            </div>
          </div>
      </div>
  <footer>
    <div class="footer-wrapper">
      <div>
      <img src="logo-la_belle_annerie-noir.png" alt="">
      <h3 class="text-logo">LA BELLE ANERIE</h3>
      <h6>N° de SIRET :849687470 00013</h6>
      </div>
      <p>Ouvert de mi-Avril à fin Octobre .<br> Nous vous accueillons pour découvrir Ancelle et le plateau de Champsaur . Pour quelques heures ou quelques jours .  </p>
      <ul>
        <li><a class="nav-title" href="">Partenaire</a></li>
        <li><a href="http://les-soldanelles-ancelle.fr">Les Soldanelles</a></li>
        <li><a href="https://www.lamartegale.com">La Martégale</a></li>
        <li><a href="http://www.unap.eu">Union National des Aniers Pluriactifs</a></li>
        <li><a href="http://www.assoadada.fr">ADADA</a></li>
        
      </ul>
      <ul>
        <li><a class="nav-title" href="">NAVIGATION</a></li>
        <li><a href="formule.html">Nos activités</a></li>
        <li><a href="ane.html">Les ânes</a></li>
        <li><a href="contact.php">Nous contacter</a></li>
        <li><a href="contact.php#partenaires">Nos partenaires</a></li>
      </ul>
       

    </div>
  </footer>

  <script>
      function resp() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
  </script>
  </body>