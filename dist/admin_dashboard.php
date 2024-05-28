<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEMO | CAPTECH PROJET</title>
    <link rel="icon" href="images/logoWhiteTsp.png" type="image/x-icon">
    <link rel="stylesheet" href="output.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <div class="flex flex-row">
        <div class="p-5 flex flex-row justify-start">
            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="cursor-pointer">
                <div id="new-project-button" class=" w-[300px] py-5 flex flex-row items-center h-6 rounded-lg border border-black">
                    <div class="flex w-full px-3 justify-start">
                        <h1 class="text-xs font-roboto font-normal">Nouveau projet</h1>
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
                        <h1 class="text-xs font-roboto font-normal">Créer nouvelle équipe</h1>
                    </div>
                    <div class="flex w-full justify-end">
                        <img id="new-team-button-image" src="images/plus-large-svgrepo-com.svg" class="w-4 mx-3 h-4 object-cover">
                    </div>
                </div>
            </button>
        </div> <!-- New team button -->
    </div>

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
                            <label for="responsableProjet" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Responsable du projet</label>
                            <select name="responsableProjet" id="responsableProjet" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option value="" disabled selected>Responsable du projet</option>

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
                        Ajouter la nouvelle équipe
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

                </div>
                <!-- Modal body -->
                <form action="index.php" class="p-4 md:p-5">
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom de l'équipe</label>
                            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Entrez le nom de l'équipe" required="">
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
    <script src="script_admin.js"></script>
</body>

</html>