<?php
    $bdd = mysqli_connect('127.0.0.1','root','','connexion');
   

    $name = $_POST['name'];
    $email = $_POST['email'];
	$motDePasse = $_POST['MotDePasse'];
	$confirmPassword = $_POST['confirmPassword'];
	
    $requeteinscri='INSERT INTO SUBSCRIRE( name, email, motDePasse, confirmPassword) VALUES ("'.$name.'","'.$email.'","'.$motDePasse.'","'.$confirmPassword.'")';
    $result=mysqli_query($bdd,$requeteinscri) OR DIE ("Erreur" . mysqli_error($bdd) ."dans la requete $requeteinscri");
	echo "Réussi";
	
	
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/menu.css" />
  <link rel="stylesheet" href="./css/login.css" />
  <link rel="stylesheet" href="./css/footer.css" />
  <title>IA Anime - Connexion</title>
</head>

<body>
  <!-- Navbar en haut -->
  <div id="navbar-top">
    <div id="images">
      <img onclick="window.location.replace('index.html')" id="logo" src="images/logo.png" />
      <div id="actions-mobile">
        <img id="panier-mobile" src="./images/shop.svg" />
        <img id="menu" src="images/menu.svg" />
      </div>
    </div>
    <div id="menus">
      <ul id="menu-list">
        <li><a href="index.html">Accueil</a></li>
        <li><a href="boutique.html?genre=kodomo">Boutique</a></li>
        <li><a href="about.html">A propos</a></li>
        <li><a href="contact.html">Nous contacter</a></li>
      </ul>
      <ul id="menu-list">
        <li>
          <input id="search-input" placeholder="Rechercher..." type="text" />
          <div id="search-list">
            <ul id="search-input-responses">
              <!-- La liste va se remplir quand on va taper dans l'input -->
            </ul>
          </div>
        </li>
        <li><img id="panier" src="./images/shop.svg" /></li>
        <li><a class="button" href="login.html">Se connecter</a></li>
        <li><a class="button" href="login.html">S'inscrire</a></li>
      </ul>
    </div>
  </div>

  <!-- Navbar à droite -->
  <div id="navbar-right">
    <h3>Mon panier</h3>
    <ul>
      <li>Item 1</li>
      <li class="separateur"></li>
      <li>Item 1</li>
      <li class="separateur"></li>
      <li>Item 1</li>
      <li class="separateur"></li>
      <li>Item 1</li>
      <li class="separateur"></li>
      <li>Item 1</li>
      <li class="separateur"></li>
      <li>Item 1</li>
      <li class="separateur"></li>
      <li>Item 1</li>
      <li class="separateur"></li>
      <li>Item 1</li>
    </ul>
    <div id="total">
      <span>0 €</span>
      <button>Payer</button>
    </div>
  </div>

  <!-- Contenu de la page -->
  <div id="content">
    <div id="parent">
      <div id="content-parent">
        <div id="login">
          <h3>Se connecter</h3>
          <p>Vous possédez déjà un compte ? <br />Connectez-vous dès à présent !</p>
          <form method="POST" action="PHP/Connexion.php">
		  
		  
            <label for="id">Identifiant</label>
            <input type="text" id="id" name="id" autofocus required />
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" required />
            <button type="submit">Se connecter</button>
			
			
          </form>
        </div>
		
        <div id="separation"></div>
        <div id="register">
          <h3>S'inscrire</h3>
          <p>Vous ne possédez pas de compte chez nous ? <br /> Inscrivez-vous en remplissant le formulaire ci-dessous !
          </p>
          <form method="post" action="PHP/Connexion.php">
            <label for="name">Nom</label>
            <input type="text" id="name" name="name" required />
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" required />
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" required />
            <label for="confirm-password">Confirmation du mot de passe</label>
            <input type="password" id="confirm-password" name="confirmpassword" required />
            <button type="submit">S'inscrire</button>
          </form>
        </div>
      </div>
    </div>
    <div id="footer">
      <span>Copyright IA Anime - 2021</span>
    </div>
  </div>
</body>

<script src="./js/data.js"></script>
<script src="./js/event.js"></script>

</html>