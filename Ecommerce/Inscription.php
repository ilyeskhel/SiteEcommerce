<?php
    $bdd = mysqli_connect('172.16.201.125','sio','slam','Connexion');
   

    $name = $_POST['name'];
    $email = $_POST['email'];
	$MotDePasse = $_POST['MotDePasse'];
	$confirmopassword = $_POST['confirmpassword'];
	
	
	
	if (!empty($_POST['name']) && !empty($_POST['MotDePasse'])&&!empty($_POST['email']) && !empty($_POST['confirmpassword'])) {
		
		$name = $_POST['name'];
		$MotDepasse = $_POST['MotDePasse'];	
		$email = $_POST['email'];
		$confirmpassword = $_POST['confirmpassword'];	
		
		if($bdd){
			
			
			
			
					$verification = mysqli_query($bdd,"SELECT name FROM login WHERE name = '$name';") OR DIE (mysqli_error($bdd));
					$donnees = mysqli_fetch_assoc($verification);
					$nb = mysqli_num_rows($verification);
					if($nb == 1){
							echo "<html><body><script type='text/javascript'>alert('Identifiant déja utilisé');</script></body></html>";
							include 'login.html';
					}
					else{
						
							$requeteinscri="INSERT INTO login( name, email, MotDePasse, confirmpassword) VALUES ( '$name','$email','$MotDePasse','$confirmpassword');";
							$result=mysqli_query($bdd,$requeteinscri) OR DIE (mysqli_error($bdd));
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