
<?php
    $name = $_POST['name'];
    $MotDePasse = $_POST['MotDePasse'];
	
    if($bdd =mysqli_connect('127.0.0.1','root','','connexion')){
		
		
		
		
		
	    if (!empty($_POST['name']) && !empty($_POST['MotDePasse'])) {
			echo '.0';
			$name = $_POST['name'];
			$password = $_POST['MotDePasse'];	
			$select= mysqli_query($bdd,'SELECT COUNT(*) AS nb FROM CONNEXION WHERE name = "'.$name.'" AND MotDePasse = "'.$MotDePasse.'" ;');
			$donnees = mysqli_fetch_assoc($select);
			$nb = $donnees['nb'];
			if($nb == 1){
			     include 'index.html';
				
			
			}
			else{
				echo "Erreur";
			}	
			mysqli_free_result($select);
	   
	   }
	    else{
			echo "Connexion à la bdd échouée";
		}
	}
?>


