<?php 
	mail($_POST['to'], $_POST['subject'], $_POST['message']);
	header('Location: index.php');
?>