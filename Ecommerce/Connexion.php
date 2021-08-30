
<?php



    $name = $_POST['name'];
    $MotDePasse = $_POST['MotDePasse'];
	
    if($bdd =mysqli_connect('172.16.201.125','sio','slam','Connexion')){
		
		
		
		
		
	    if (!empty($_POST['name']) && !empty($_POST['MotDePasse'])) {
			
			$name = $_POST['name'];
			$password = $_POST['MotDePasse'];	
			$select= mysqli_query($bdd,'SELECT COUNT(*) AS nb FROM login WHERE name = "'.$name.'" AND MotDePasse = "'.$MotDePasse.'" ;');
			$donnees = mysqli_fetch_assoc($select);
			$nb = $donnees['nb'];
			if($nb == 1){
				 echo "<html><body><script type='text/javascript'>alert('Bien le bonjour');</script></body></html>";
			     include 'login.html';
				 $_SESSION['name']=$name;
		         $_SESSION['MotDePasse']=$password;
	
				
			
			}
			else{
				echo "<html><body><script type='text/javascript'>alert('Veuillez vous inscrire le compte n'existe pas ');</script></body></html>";
				include 'login.html';
			}	
			mysqli_free_result($select);
	   
	   }
	    else{
			echo "Connexion à la bdd échouée";
		}
	}
?>




