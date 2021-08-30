<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/menu.css" />
  <link rel="stylesheet" href="./css/boutique.css" />
  <link rel="stylesheet" href="./css/footer.css" />
  <title>IA Anime - Boutique</title>
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
  <div id="sub-navbar-top">

    <!-- Navbar à gauche -->
    <div id="navbar-left">
      <h3>Les catégories</h3>
      <ul>
        <li><a id="kodomo" href="?genre=kodomo">Kodomo</a></li>
        <li class="separateur"></li>
        <li><a id="shonen" href="?genre=shonen">Shōnen</a></li>
        <li class="separateur"></li>
        <li><a id="pantsu_shōto" href="?genre=pantsu_shōto">Pantsu shōto</a></li>
        <li class="separateur"></li>
        <li><a id="shojo" href="?genre=shojo">Shōjo</a></li>
        <li class="separateur"></li>
        <li><a id="seinen" href="?genre=seinen">Seinen</a></li>
        <li class="separateur"></li>
        <!-- a voir 

        <li><a id="josei" href="?genre=josei">Josei</a></li>
        <li class="separateur"></li>

        -->
        
        <li><a id="yonkōma" href="?genre=yonkōma">Yonkōma</a></li>
        <li class="separateur"></li>


        <!--   
        <li><a id="dojinshi" href="?genre=dojinshi">Dōjinshi</a></li>

        -->
      </ul>
    </div>

    <!-- Contenu de la page -->
    <div id="content">
      <div id="parent">
          <!-- Le contenu sera rempli par la fonction javascript -->
		  </html>
		  <?php
		 
 


			$bdd=mysqli_connect('172.16.201.125','sio','slam','Connexion');
  
			if ($bdd){
	      
		  
			
	    
		
				$req=mysqli_query($bdd,"SELECT * FROM produit ;");
		 
				while($donnes=mysqli_fetch_assoc($req)){
			 
				echo '<img src = "'.$donnes['image'].'">';
			  
			    }
			}
   
		  ?>
		  
		  
<html lang="fr">	   
      </div>
      <div id="footer">
        <span>Copyright IA Anime - 2021</span>
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
  </div>
</body>

<script src="./js/data.js"></script>
<script src="./js/event.js"></script>
<script src="./js/boutique.js"></script>
<script>
  // Main
  window.onload = () => {

    // On décide de remplir la liste d'élément dans la page selon les paramètres
    // Si il y a un manga et le genre => on affiche les articles du manga
    // Sinon on affiche le genre si on en indique un
    
    // Example : 
    // site?genre=kodomo ==> on affiche les mangas du genre kodomo
    // site?genre=kodomo&manga=Pokemon ==> on affiche les articles de pokemon

    const manga = findGetParameter('manga');
    const genre = findGetParameter('genre');
    if (manga) {
      fillItems(manga, genre);
      return;
    }

    if (genre) {
      fillMangas(genre);
    }
  }
</script>
</html>