<?php






	$name=POST_['name'];
	$password=POST_['password'];
	
	$bdd=Mysqli_connect('127.0.0.1','root','','connexion');
	
	
	
	if ($bdd){
		
		
		##Connexion établie
		
		
		
		$result=mysqli_query($bdd,'SELECT login, name FROM password WHERE login = "'.$name.'" AND motDepasse = "'.$password.'" ;');
		
		
		$donnees= mysqli_fetch_assoc($result);
		
		$entree= mysqli_num_rows($result);
		
		if($entree == 1){
			echo "Bien le bonjour  {$donnees['name']}";
		}
		else{
			echo "Erreur de Connexion l'id et le mdp ne correspond pas";
		}
		mysqli_free_result($result);
	}
	
	
	
	
	
	else{
		echo "Erreur" ;
	}
	
	
	
?>
		
	
	



	
	
