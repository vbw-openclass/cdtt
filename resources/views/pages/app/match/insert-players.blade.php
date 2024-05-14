<?php

    use function Laravel\Folio\name;

    name('match-insert-players');
?>

<x-layouts.app>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Designed for business teams like yours</h2>
                <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
            </div>

            <div class="relative border overflow-x-auto shadow-md sm:rounded-lg">
                <div class="flex flex-col p-6  text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                    <h3 class="mb-4 text-2xl font-semibold">Informations match : Saison : 2023-2024 ; secteur : Strasbourg ou Nord ; Division : Promotion, vétéran etc ; La journée : 1,2,3 etc ; La date et l'heure ; les équipes qui s'affrontent</h3>
                </div>
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                Équipe recevante : <!-- TODO:Récupérer l'équipe recevante de la journée du calendrier -->
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Équipe visiteuse : <!-- TODO:Récupérer l'équipe visiteuse de la journée du calendrier -->
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- TODO:Récupérer la liste des joueurs qui composent l'équipe, s'il y a 4 joueurs pour un championnat de 3 joueurs c'est pas grave, il suffira à l'utilisateur de cocher les joueurs qu'il veut pour que ça s'affiche en-dessous -->
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                <button id="dropdownCheckboxButton" data-dropdown-toggle="dropdownDefaultCheckbox" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-56 px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Dropdown checkbox 
                                    <svg class="w-10 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="-20 0 30 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                    </svg>
                                </button>
                                <div id="dropdownDefaultCheckbox" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownCheckboxButton">
                                    <li>
                                        <div class="flex items-center gap-2">
                                            <input id="checkbox-item-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="checkbox-item-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Billerey Vincent</label>
                                        </div>
                                    </li>
                                    </ul>
                                </div>
                            </th>
                            <!-- TODO:Récupérer la liste des joueurs qui composent l'équipe, s'il y a 4 joueurs pour un championnat de 3 joueurs c'est pas grave, il suffira à l'utilisateur de cocher les joueurs qu'il veut pour que ça s'affiche en-dessous -->
                            <th class="px-6 py-4">
                                <button id="dropdownCheckboxButton" data-dropdown-toggle="dropdownDefaultCheckbox" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-56 px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Dropdown checkbox 
                                    <svg class="w-10 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="-20 0 30 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                    </svg>
                                </button>
                                <div id="dropdownDefaultCheckbox" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownCheckboxButton">

                                    </ul>
                                </div>
                            </th>
                        </tr>
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                <!-- TODO:Récupérer le nom, prénom, numéro de licence et le classement du joueur correspondant à l'équipe. Exemple : Billerey Vincent, 305422, 75 -->
                                Nom, prénom,n° de licence, classement
                            </td>
                            <td class="px-6 py-4">
                                Nom, prénom,n° de licence, classement
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                <!-- TODO:Récupérer le nom, prénom, numéro de licence et le classement du joueur correspondant à l'équipe. Exemple : Billerey Vincent, 305422, 75 -->
                                Nom, prénom,n° de licence, classement
                            </td>
                            <td class="px-6 py-4">
                                Nom, prénom,n° de licence, classement
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                <!-- TODO:Récupérer le nom, prénom, numéro de licence et le classement du joueur correspondant à l'équipe. Exemple : Billerey Vincent, 305422, 75 -->
                                Nom, prénom,n° de licence, classement
                            </td>
                            <td class="px-6 py-4">
                                Nom, prénom,n° de licence, classement
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                <!-- TODO:Récupérer le nom, prénom, numéro de licence et le classement du joueur correspondant à l'équipe. Exemple : Billerey Vincent, 305422, 75 -->
                                Nom, prénom,n° de licence, classement
                            </td>
                            <td class="px-6 py-4">
                                Nom, prénom,n° de licence, classement
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="p-6 text-center w-full text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                    <button type="button" class="text-white w-64 bg-gradient-to-r  from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Valider</button>
                </div>
            </div>
        </div>
      </section>
</x-layouts.app>
