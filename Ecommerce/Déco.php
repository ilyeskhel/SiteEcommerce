<?php
		$bdd = mysqli_connect('127.0.0.1', 'root', '','connexion');
		session_start();
		$requetefin=mysqli_query($bdd,"UPDATE tbl_log set DateFin = NOW() WHERE idUser ='".$_SESSION['id']."' ;");
		$_SESSION = array();
		session_destroy();
		unset($_SESSION);
		echo 'Déconnexion réussi';
		include 'login.html';
		
		
		
?>