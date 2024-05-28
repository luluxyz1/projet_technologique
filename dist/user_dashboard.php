<?php

session_start();

require_once 'includes/dbh.inc.php';



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
            <div class="flex w-48 justify-around flex-row">
                <a href="user_dashboard.php">
                    <h1>Accueil</h1>
                </a>
                <a href="calendar.php">
                    <h1>Calendrier</h1>
                </a>
                <?php


                ?>
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
        <div id="dropdown-profile" class="absolute bg-[#ADCAFF] rounded-b-lg mr-6 hidden w-[300px]">
            <div class="p-4 w-full flex  items-center flex-row">
                <div class="w-24 flex justify-start">
                    <img src="images/2.jpeg" class="w-16 h-16 rounded-lg object-cover " alt="">
                </div>
                <div class="font-roboto w-full flex justify-center">
                    <h2 class="text-sm font-medium">
                        <?php
                        if (isset($_SESSION["user_email"])) {
                            echo  $_SESSION["user_email"];
                        } else {
                            header("Location: signup.php");
                        }


                        ?>
                    </h2>

                </div>
            </div>
            <div class="flex px-4 pb-2 justify-center items-center w-full">
                <hr class="border w-full  border-black">
            </div>
            <div class="p-4 font-roboto font-normal">
                <div class="w-full ">
                    <a class="cursor-pointer hover:underline underline-offset-2 hover:bg-[#99BDFF] flex flex-row items-center">
                        <h1 class="text-lg  px-1 rounded-4xl">Profil</h1>
                    </a>
                </div>

                <div>
                    <a href="includes/logout.inc.php" class="cursor-pointer hover:underline underline-offset-2 hover:bg-[#99BDFF] flex flex-row items-center">
                        <h1 class="text-lg hover:bg-[#99BDFF] px-1 rounded-lg">Déconnexion</h1>
                        <img src="images/chevron-down-svgrepo-com.svg" class="w-4 h-4 object-cover -rotate-90">
                    </a>

                </div>
            </div>
        </div>
    </div> <!-- Dropdown profile -->



    <section class="flex flex-col justify-start items-start h-full w-full">
        <div class="bg-white flex flex-col items-start px-5 justify-center w-[70%] h-24">
            <h1 class="text-3xl font-hk_Grotesk font-extrabold text-black">MES PROJETS</h1>
        </div>
        <!-- <div class="flex flex-row px-5 font-roboto font-medium">
            <div class="h-16 w-96 border-2 flex items-center border-black">
                <h1 class="px-5">Test</h1>
            </div>
        </div> -->
    </section> <!-- Projects section -->


    <div class="my-5 px-5 w-full">
        <hr class="border border-gray-200">
    </div> <!-- Separateur -->










    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="script_user.js"></script>
</body>

</html>