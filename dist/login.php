<?php
require_once "includes/config_session.inc.php";
require_once "includes/signup_view.inc.php";
require_once "includes/login_view.inc.php";
?>




<!DOCTYPE html>
<html lang="fr">

<head>
	<title>Connexion | CapTech</title>
	<link rel="icon" href="images/logoWhiteSmallTsp.png">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="login.css">
	<link href="./output.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

</head>

<body class="bg-[#ECE9EA]">


	<div class="flex flex-row h-screen w-full">
		<div class="flex flex-col justify-center items-center h-screen w-1/2">
			<div class="flex flex-col justify-center items-center p-5 w-3/4 ">
				<img src="images/logoWhiteTsp.png" class="w-32 invert object-cover">
				<h1 class="text-xl font-logo">Connectez-vous à votre compte</h1>
				<a href="Admin/login.php" class="text-black font-logo text-sm underline hover:text-cyan-400">Connexion administrateur</a>



				<hr class="border w-1/2 mt-5 border-black">
			</div>

			<div class="flex flex-col p-5 w-3/4 ">
				<form class="flex flex-col justify-center items-center" action="includes/login.inc.php" method="post">

					<input type="text" name="username" placeholder="Nom d'utilisateur" class="p-3 bg-transparent w-1/2 border border-black bg-[#ECE9EA] mb-3 ">
					<input type="password" name="password" placeholder="Mot de passe" class="p-3  bg-transparent w-1/2 border border-black bg-[#ECE9EA] mb-3 ">
					<div class="justify-center my-3 flex h-1/2 w-1/2 border border-black bg-[#ECE9EA]">
						<button class="p-3 font-logo text-black h-full w-full hover:text-white hover:bg-black transition-none hover:transition-all transition-500" type="submit" name="submit">Se connecter</button>
					</div>
					<?php
					check_login_errors();
					?>
					<p class="text-black font-logo mt-3 text-sm">Vous n'avez pas de compte ?</p><a href="signup.php" class="text-black text-sm font-logo underline hover:text-cyan-400">S'inscrire</a></p>




					<br>
					<a href="index.php" class="text-black font-logo hover:underline hover:text-cyan-400">Retour à l'accueil</a>


				</form>



			</div>
		</div>
		<div class="flex flex-row justify-center items-center h-screen w-1/2">

			<div class="absolute h-screen w-1/2">
				<img src="images/3.jpg" class="h-full w-full object-cover object-top">
			</div>


		</div>
	</div>




	<script type="text/javascript" src="script.js" defer></script>
	<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>