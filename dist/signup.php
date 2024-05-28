<?php
require_once "includes/config_session.inc.php";
require_once "includes/signup_view.inc.php";
?>


<!DOCTYPE html>
<html lang="fr">

<head>
	<title>Inscription | CapTech</title>
	<link rel="icon" href="images/logoWhiteSmallTsp.png">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="signup.css" rel="stylesheet" type="text/css">
	<link href="./output.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

</head>

<body>

	<div class="flex flex-row h-screen w-full">
		<div class="flex flex-col justify-center items-center h-screen w-1/2">
			<div class="flex flex-col justify-center items-center p-5 w-full ">
				<h1 class="font-hk_Grotesk text-4xl font-extrabold">CapTech</h1>
				<!-- <a href="Admin/login.php" class="text-black font-logo text-sm underline hover:text-cyan-400">Connexion administrateur</a> -->
				<hr class="border w-1/2 m-5 border-black">
				<h1 class="text-xl font-logo">Inscrivez-vous</h1>
			</div>
			<div class="flex flex-col p-5 w-full ">
				<form class="flex flex-col justify-center items-center" action="includes/signup.inc.php" method="post">

					<div class="flex flex-col justify-center items-center w-full">
						<?php
						signup_inputs();
						?>
					</div>


					<br>

					<div class="justify-center my-3 flex h-1/2 w-1/2 border border-black bg-[#ECE9EA]">
						<button class="p-3 font-logo text-black h-full w-full hover:text-white hover:bg-black transition-none hover:transition-all transition-500" type="submit" name="submit">S'inscrire</button>
					</div>
					<p class="text-black font-logo mt-3 text-sm">Vous avez déjà un compte ?</p><a href="login.php" class="text-black text-sm font-logo underline hover:text-cyan-400">Se connecter</a></p>
					<div class=" font-logo animate-fade-down animate-ease-in-out">
						<?php
						check_signup_errors();
						?>
					</div>




					<br>


				</form>
			</div>
		</div>
		<div class="flex flex-row justify-center items-center h-screen w-1/2">

			<div class="absolute h-screen w-1/2">
				<img src="images/1.jpg" class="h-full w-full object-cover">
			</div>


		</div>
	</div>







	<script type="text/javascript" src="script.js" defer></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>