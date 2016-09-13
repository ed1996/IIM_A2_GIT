<?php session_start();
/********************************
	DATABASE & FUNCTIONS
********************************/
require('config/config.php');
require('model/functions.fn.php');
/********************************
			PROCESS
********************************/
if(isset($_POST['email']) && isset($_POST['password'])){
	if(!empty($_POST['email']) && !empty($_POST['password'])){
		// TODO
		// Force user connection to access dashboard
		if (userConnection($db, $_POST['email'], $_POST['password']) == True) {
		
		header('Location: dashboard.php');
<<<<<<< HEAD
	}

=======
}
>>>>>>> cfd38986a7511aac2d5fa6c13409b8bf8dc5074f
	}else{
		$error = 'Champs requis !';
	}
}
/********************************
			VIEW
********************************/
include 'view/_header.php';
include 'view/login.php';
include 'view/_footer.php';