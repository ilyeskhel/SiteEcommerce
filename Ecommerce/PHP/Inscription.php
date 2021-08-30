<?php
    $bdd = mysqli_connect('127.0.0.1','root','','connexion');
   

    $name = $_POST['name'];
    $email = $_POST['email'];
	$MotDePasse = $_POST['MotDePasse'];
	$confirmpassword = $_POST['confirmpassword'];
	
    $requeteinscri='INSERT INTO CONNEXION( name, email, MotDePasse, confirmpassword) VALUES ("'.$name.'","'.$email.'","'.$MotDePasse.'","'.$confirmpassword.'")';
    $result=mysqli_query($bdd,$requeteinscri) OR DIE ("Erreur" . mysqli_error($bdd) ."dans la requete $requeteinscri");
	echo "Réussi";
	
	
?>

