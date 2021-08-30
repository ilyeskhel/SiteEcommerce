<?php
    $bdd = mysqli_connect('172.16.201.125','sio','slam','Connexion');
   

    $name = $_POST['name'];
    $email = $_POST['email'];
	$MotDePasse = $_POST['MotDePasse'];
	$confirmpassword = $_POST['confirmPassword'];
	
	
	
	if (!empty($_POST['name']) && !empty($_POST['MotDePasse'])&&!empty($_POST['email']) && !empty($_POST['confirmpassword'])) {
		
		$name = $_POST['name'];
		$MotDepasse = $_POST['MotDePasse'];	
		$MotDePasse = $_POST['MotDePasse'];
		$confirmpassword = $_POST['confirmPassword'];	
		
		if($bdd){
		  $verification = mysqli_query($bdd,"SELECT name FROM client WHERE name = '$name';" ) OR DIE ("Erreur" . mysqli_error($bdd) ." dans la requête $verification");
					$donnees = mysqli_fetch_assoc($verification);
					$nb = mysqli_num_rows($verification);
					if($nb == 1){
							echo "id utilisé";
					}
					else{
						
							$requeteinscri="INSERT INTO connexion( 'name', 'email', 'MotDePasse', 'confirmPassword') VALUES ( "'.$name.'","'.$email.'","'.$MotDePasse.'","'.$confirmpassword.'")";
							$result=mysqli_query($bdd,$requeteinscri) OR DIE (mysqli_error($bdd);
							$pass_hash = password_hash($MotDePasse, PASSWORD_DEFAULT);
						
							include 'index.html';
							echo "<html><body><script type='text/javascript'>alert('Vous vous êtes bien inscrit');</script></body></html>";
				
						
						
						
					}
		}
		else{
			
					echo "Conexion bdd échoué " ;	
		}
	}
    else{
		
		echo " Champs vide" ;
		
	}
	
		
		
	
?>