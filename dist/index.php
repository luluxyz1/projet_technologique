<?php

session_start();

require_once "includes/dbh.inc.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = $_POST["name"];
    $date_debut = $_POST["date_debut"];
    $date_fin = $_POST["date_fin"];
    $budget = $_POST["budget"];
    $description = $_POST["description"];
    $equipe = $_POST["equipe"];

    $sql = "INSERT INTO projet (titre_projet, date_debut, date_fin_prevue, budget, description, id_equipe) VALUES (:name, :date_debut, :date_fin, :budget, :description, :id_equipe)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ":name" => $name,
        ":date_debut" => $date_debut,
        ":date_fin" => $date_fin,
        ":budget" => $budget,
        ":description" => $description
    ]);

    header("Location: index.php?newProject=success");
    $pdo = null;
    $stmt = null;
}


?>





<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEMO | CAPTECH PROJET</title>
    <link rel="icon" href="images/logoWhiteTsp.png" type="image/x-icon">
    <link rel="stylesheet" href="output.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body>

    <nav class="relative w-full h-24 flex flex-row bg-[#AFCBFF]">
        <div class="w-full h-full flex justify-start mx-5 items-center">
            <div class="flex flex-col">
                <h1 class="font-hk_Grotesk font-extrabold">CAPTECH</h1>
                <h2 class="font-hankenGrotesk font-extralight">Dashboard</h2>
            </div>

        </div>
        <div class="w-full h-full">
            <div class="h-full flex justify-end items-center">
                <div class="w-24 flex flex-row justify-center items-center">
                    <a id="dropdown-button-profile" class="cursor-pointer flex flex-row justify-center items-center hover:invert transition-all hover:transition-all">
                        <img src="images/profil.png" class="w-6 h-6 object-cover">
                        <img id="chevron" src="images/chevron-down-svgrepo-com.svg" class="w-4 h-4 transition-all object-cover">
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="relative text-black flex w-full h-full justify-end">
        <div id="dropdown-profile" class="absolute bg-[#ADCAFF] rounded-b-lg mr-6 hidden w-64">
            <div class="p-4 flex justify-center items-center flex-row">
                <div class="mr-3">
                    <img src="images/2.jpeg" class="w-16 h-16  rounded-lg object-cover " alt="">
                </div>
                <div class="text-left font-roboto">
                    <h6 class="font-light text-xs italic">Administrateur</h6>

                    <h1 class="text-lg font-medium">Lucas Ferreira</h1>
                    <h2 class="text-sm font-light">lucas.ferreira@edu.ece.fr</h2>

                </div>
            </div>
            <div class="flex px-4 pb-2 justify-center items-center w-full">
                <hr class="border w-full  border-black">
            </div>
            <div class="p-4 font-roboto font-normal">
                <div class="w-full ">
                    <a class="cursor-pointer hover:underline underline-offset-2 hover:bg-[#99BDFF] flex flex-row items-center">
                        <h1 class="text-lg  px-1 rounded-lg">Profil</h1>
                    </a>
                </div>
                <div>
                    <a class="cursor-pointer hover:underline underline-offset-2 hover:bg-[#99BDFF] flex flex-row items-center">
                        <h1 class="text-lg  px-1 rounded-lg">Se connecter</h1>
                        <img src="images/chevron-down-svgrepo-com.svg" class="w-4 h-4 object-cover -rotate-90">
                    </a>

                </div>
                <div>
                    <a class="cursor-pointer hover:underline underline-offset-2 hover:bg-[#99BDFF] flex flex-row items-center">
                        <h1 class="text-lg hover:bg-[#99BDFF] px-1 rounded-lg">S'inscrire</h1>
                        <img src="images/chevron-down-svgrepo-com.svg" class="w-4 h-4 object-cover -rotate-90">
                    </a>

                </div>
                <div>
                    <a class="cursor-pointer hover:underline underline-offset-2 hover:bg-[#99BDFF] flex flex-row items-center">
                        <h1 class="text-lg hover:bg-[#99BDFF] px-1 rounded-lg">Déconnexion</h1>
                        <img src="images/chevron-down-svgrepo-com.svg" class="w-4 h-4 object-cover -rotate-90">
                    </a>

                </div>
            </div>
        </div>
    </div> <!-- Dropdown profile -->

    <div class="p-5 flex flex-row justify-start">
        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="cursor-pointer">
            <div id="new-project-button" class=" w-[300px] py-5 flex flex-row items-center h-6 rounded-lg border border-black">
                <div class="flex w-full px-3 justify-start">
                    <h1 class="text-lg font-roboto font-normal">Nouveau projet</h1>
                </div>
                <div class="flex w-full justify-end">
                    <img id="new-project-button-image" src="images/plus-large-svgrepo-com.svg" class="w-4 mx-3 h-4 object-cover">
                </div>
            </div>
        </button>


    </div> <!-- New project button -->
    <div class="p-5 flex flex-row justify-start">
        <button data-modal-target="crud-team-modal" data-modal-toggle="crud-team-modal" class="cursor-pointer">
            <div id="new-team-button" class=" w-[300px] py-5 flex flex-row items-center h-6 rounded-lg border border-black">
                <div class="flex w-full px-3 justify-start">
                    <h1 class="text-lg font-roboto font-normal">Créer nouvelle équipe</h1>
                </div>
                <div class="flex w-full justify-end">
                    <img id="new-team-button-image" src="images/plus-large-svgrepo-com.svg" class="w-4 mx-3 h-4 object-cover">
                </div>
            </div>
        </button>


    </div> <!-- New team button -->

    <section class="flex flex-col justify-start items-start h-full w-full">
        <div class="bg-white flex flex-col items-start px-5 justify-center w-[70%] h-24">
            <h1 class="text-3xl font-hk_Grotesk font-extrabold text-black">MES PROJETS</h1>
        </div>
        <div class="flex flex-row px-5 font-roboto font-medium">
            <div class="h-16 w-96 border-2 flex items-center border-black">
                <h1 class="px-5">Test</h1>
            </div>
        </div>
    </section> <!-- Projects section -->


    <div class="my-5 px-5 w-full">
        <hr class="border border-gray-200">
    </div> <!-- Separateur -->





    <!-- Modal création projet -->
    <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Créer un nouveau projet
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Fermer fenêtre</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="index.php" class="p-4 md:p-5">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom du projet</label>
                            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Entrez le nom du projet" required="">
                        </div>
                        <div class="col-span-2 justify-between flex flex-col">
                            <div class="flex flex-col">
                                <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date de début</label>
                                <input type="date" name="date_debut">
                            </div>
                            <br>
                            <div class="flex flex-col">
                                <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date de fin prévue</label>
                                <input type="date" name="date_fin">
                            </div>
                        </div>
                        <div>
                            <label for="equipe" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choisissez votre équipe</label>
                            <select name="equipe" id="equipe" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <?php foreach ($pdo->query("SELECT * FROM equipe") as $row) : ?>
                                    <option value="<?= $row["id_equipe"] ?>"><?= $row["nom"] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div>
                            <label for="budget" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Budget</label>
                            <input type="number" name="budget" id="budget" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Entrez le budget du projet" required="">
                        </div>
                        <div class="col-span-2">
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                            <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ecrivez une description du projet"></textarea>
                        </div>
                    </div>
                    <button name="newProject" type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                        </svg>
                        Ajouter le nouveau projet
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal création équipe -->
    <div id="crud-team-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between w-full p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Créer une nouvelle équipe
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Fermer fenêtre</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="index.php" class="p-4 md:p-5">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom de l'équipe</label>
                            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Entrez le nom du projet" required="">
                        </div>
                    </div>
                    <button name="newProject" type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                        </svg>
                        Ajouter le nouveau projet
                    </button>
                </form>
            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="script.js"></script>
</body>

</html>