<?php

    use function Laravel\Folio\name;

    name('match-championship');
?>

<x-layouts.app>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Résultats pour les équipes d'affaires comme la vôtre</h2>
                <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">Ici, chez Flowbite, nous nous concentrons sur les marchés où la technologie, l'innovation et le capital peuvent débloquer une valeur à long terme et stimuler la croissance économique.</p>
            </div>
            <div class="space-y-8 lg:grid lg:grid-cols-4 sm:gap-6 xl:gap-10 lg:space-y-0">
                <div class="flex flex-col py-8 px-3 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 dark:bg-gray-800 dark:text-white">
                    <h3 class="mb-4 text-2xl font-semibold">Classement par Équipe Promotion Secteur Strasbourg <!-- TODO:Récupérer la journée --></h3>
                    <!-- Liste -->
                    <button id="dropdownSearchButton" data-dropdown-toggle="dropdownSearch" data-dropdown-placement="bottom" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex justify-between items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Développer le tableau 
                        <svg class="w-10 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="-20 0 30 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <div id="dropdownSearch" class="z-10 hidden bg-white rounded-lg shadow w-auto dark:bg-gray-700 !translate-y-2/4 !translate-x-2/4">
                        <div class="relative border overflow-x-auto shadow-md sm:rounded-lg">
                            <div class="flex flex-col p-6 text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                                <h3 class="mb-4 text-2xl font-semibold">2024/2025 - Championnat par équipe - Promotion Secteur Strasbourg</h3>
                            </div>
                            <div class="overflow-x-auto">
                                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 min-w-full">
                                    <thead class="text-xs text-gray-700 uppercasebg-gray-50 dark:text-white dark:bg-gray-800">
                                        <tr class="border-b border-gray-200 dark:border-gray-700">
                                            <!-- TODO:Récupérer le nom des équipes inscrites et les placer en fonction de leurs scores pour la position dans le tableau -->
                                            <!-- TODO:Si plus de points donc premier par exemple et ensuite faire en fonction -->
                                            <!-- TODO:Pour définir la place dans le tableau, c'est dabord en fonction des points qui comptent, toujours faire en fonction du plus haut score dans les D -->
                                            <!-- TODO:Si égalité alors on comptent les parties -->
                                            <!-- TODO:Si égalité alors on comptent les manches -->
                                            <!-- TODO:Si égalité alors on comptent les points sur l'intégralité des manches -->
                                            <th scope="col" class="px-6 py-3  border dark:border-gray-700">
                                                Équipe
                                            </th>
                                            <!-- TODO:Points correspond à la somme totale de Vic + Nul + Def -->
                                            <th scope="col" class="px-6 py-3 border dark:border-gray-700">
                                                Points
                                            </th>
                                            <!-- TODO:Vic = à une 1 victoire, par exemple Amitié 4 gagne contre Égalitaire 3, alors pour Amitié 4 il y aura en 1 dans Vic et pour Égalitaire 3, 1 en Def -->
                                            <!-- TODO:1 Vic = 3 points -->
                                            <th scope="col" class="px-6 py-3 border dark:border-gray-700">
                                                Vic
                                            </th>
                                            <!-- TODO:Nul = à un 1 match nul, par exemple Amitié 4 fait égalite contre Égalitaire 3, alors pour Amitié 4 il y aura en 1 dans nul et Égalitaire 3 aussi -->
                                            <!-- TODO:1 Nul = 2 points -->
                                            <th scope="col" class="px-6 py-3 border dark:border-gray-700">
                                                Nul
                                            </th>
                                            <!-- TODO:Déf = à une 1 défaite, par exemple Amitié 4 perd contre Égalitaire 3, alors pour Amitié 4 il y aura en 1 dans Déf et pour Égalitaire 3, 1 en Vic -->
                                            <!-- TODO:1 Déf = 1 points -->
                                            <th scope="col" class="px-6 py-3 border dark:border-gray-700">
                                                Déf
                                            </th>
                                            <!-- TODO:Forfait permet juste de comptabiliser le nombre de forfait, après, il est logique que si y a forfait alors = à déf -->
                                            <th scope="col" class="px-6 py-3 border dark:border-gray-700">
                                                Forf
                                            </th>
                                            <!-- TODO:Joué c'est le nombre de match joué cumulé -->
                                            <th scope="col" class="px-6 py-3 border-r border-white">
                                                Joué
                                            </th>
                                            <!-- TODO:Parties c'est les matchs dans un match. En gros promotion c'est 3 contre 3 + un match double. Ce qui fait 10 matchs. -->
                                            <!-- TODO:Il y a G pour gagné, P pour Perdus et D pour décompte, décompte c'est le totale entre G et P -->
                                            <!-- TODO:Imaginons, Amitié 4 gagne 7-3 contre Égalitaire 3, alors pour Amitié 4 il y aura 7 dans G, 3 dans P et 4 dans D -->
                                            <!-- TODO:De ce fait, Égalitaire 3 aura 3 dans G, 7 dans P et -4 dans D -->
                                            <th scope="col" colspan="3" class="px-6 py-3 border-r border-white text-center">
                                                Parties
                                            </th>
                                            <!-- TODO:Manches c'est les manches gagnés et perdus des 10 matchs. En gros promotion c'est 3 contre 3 + un match double. Ce qui fait 10 matchs. -->
                                            <!-- TODO:Il y a G pour gagné, P pour Perdus et D pour décompte, décompte c'est le totale entre G et P -->
                                            <!-- TODO:Imaginons, Amitié 4 gagne 7-3 contre Égalitaire 3. Vu qu'il faut forcément 3 manches gagnantes, on fait 7x3 = 21 manches pour G -->
                                            <!-- TODO:Sur les 3 matchs perdus, on à forcément perdu 9 manches, toujours 3 manches gagnantes, donc 9 Dans P -->
                                            <!-- TODO:MAIS attention, sur les matchs perdus, il est possible d'avoir gagné 1 manche ou 2 par ci par la, il faudra donc les rajouter à G, même si le match est perdu, car on compte les manches la -->
                                            <!-- TODO:Toujours pareil pour D qui est le décompte. -->
                                            <th scope="col" colspan="3" class="px-6 py-3 border-r border-white text-center">
                                                Manches
                                            </th>
                                            <!-- TODO:Points c'est les points gagnés et perdus de toutes les manches des 10 matchs. -->
                                            <!-- TODO:Dans ce cas la, il faudra comptabiliser tous les points gagnés et perdus sur toutes les manches confondus -->
                                            <th scope="col" colspan="3" class="px-6 py-3 border dark:border-gray-700 text-center">
                                                Points
                                            </th>
                                        </tr>
                                        <tr class="border-b border-gray-200 dark:border-gray-700">
                                            <th scope="col" class="px-6 py-3 border dark:border-gray-700 text-center"></th>
                                            <th scope="col" class="px-6 py-3 border dark:border-gray-700 text-center"></th>
                                            <th scope="col" class="px-6 py-3 border dark:border-gray-700 text-center"></th>
                                            <th scope="col" class="px-6 py-3 border dark:border-gray-700 text-center"></th>
                                            <th scope="col" class="px-6 py-3 border dark:border-gray-700 text-center"></th>
                                            <th scope="col" class="px-6 py-3 border dark:border-gray-700 text-center"></th>
                                            <th scope="col" class="px-6 py-3 border-r border-white"></th>
                                            <th scope="col" class="px-6 py-3 border dark:border-gray-700">G</th>
                                            <th scope="col" class="px-6 py-3 border dark:border-gray-700">P</th>
                                            <th scope="col" class="px-6 py-3 border-r border-white">D</th>
                                            <th scope="col" class="px-6 py-3 border dark:border-gray-700">G</th>
                                            <th scope="col" class="px-6 py-3 border dark:border-gray-700">P</th>
                                            <th scope="col" class="px-6 py-3 border-r border-white">D</th>
                                            <th scope="col" class="px-6 py-3 border dark:border-gray-700">G</th>
                                            <th scope="col" class="px-6 py-3 border dark:border-gray-700">P</th>
                                            <th scope="col" class="px-6 py-3 border dark:border-gray-700">D</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-gray-50 dark:text-white dark:bg-gray-800">
                                        <tr class="border-b border-gray-200 dark:border-gray-700">
                                            <td scope="row" class="w-1/2 px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                Nom de l'équipe
                                            </td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">11</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">33</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">34</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">34</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">11</td>
                                            <td class="px-6 py-4 w-3 border-r border-white text-center">11</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">11</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">33</td>
                                            <td class="px-6 py-4 w-3 border-r border-white text-center">34</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">34</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">11</td>
                                            <td class="px-6 py-4 w-3 border-r border-white text-center">11</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">34</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">11</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">11</td>
                                        </tr>
                                        <tr class="border-b border-gray-200 dark:border-gray-700">
                                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                Nom de l'équipe
                                            </td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">11</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">33</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">34</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">34</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">11</td>
                                            <td class="px-6 py-4 w-3 border-r border-white text-center">11</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">11</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">33</td>
                                            <td class="px-6 py-4 w-3 border-r border-white text-center">34</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">34</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">11</td>
                                            <td class="px-6 py-4 w-3 border-r border-white text-center">11</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">34</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">11</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">11</td>
                                        </tr>
                                        <tr class="border-b border-gray-200 dark:border-gray-700">
                                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                Nom de l'équipe
                                            </td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">11</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">33</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">34</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">34</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">11</td>
                                            <td class="px-6 py-4 w-3 border-r border-white text-center">11</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">11</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">33</td>
                                            <td class="px-6 py-4 w-3 border-r border-white text-center">34</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">34</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">11</td>
                                            <td class="px-6 py-4 w-3 border-r border-white text-center">11</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">34</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">11</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">11</td>
                                        </tr>
                                        <tr class="border-b border-gray-200 dark:border-gray-700">
                                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                Nom de l'équipe
                                            </td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">11</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">33</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">34</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">34</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">11</td>
                                            <td class="px-6 py-4 w-3 border-r border-white text-center">11</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">11</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">33</td>
                                            <td class="px-6 py-4 w-3 border-r border-white text-center">34</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">34</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">11</td>
                                            <td class="px-6 py-4 w-3 border-r border-white text-center">11</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">34</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">11</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">11</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col py-8 px-3 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 dark:bg-gray-800 dark:text-white">
                    <h3 class="mb-4 text-2xl font-semibold">Classement Individuel Promotion Secteur Strasbourg <!-- TODO:Récupérer la journée --></h3>
                    <!-- Liste -->
                    <button id="dropdownIndivButton" data-dropdown-toggle="dropdownIndiv" data-dropdown-placement="bottom" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex justify-between items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Développer le tableau 
                        <svg class="w-10 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="-20 0 30 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <div id="dropdownIndiv" class="z-10 hidden bg-white rounded-lg shadow w-auto dark:bg-gray-700 !translate-y-2/4 !translate-x-2/4">
                        <div class="relative border overflow-x-auto shadow-md sm:rounded-lg">
                            <div class="flex flex-col p-6 text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                                <h3 class="mb-4 text-2xl font-semibold">2024/2025 - Championnat par équipe - Promotion Secteur Strasbourg</h3>
                            </div>
                            <div class="overflow-x-auto">
                                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 min-w-full">
                                    <thead class="text-xs text-gray-700 uppercasebg-gray-50 dark:text-white dark:bg-gray-800">
                                        <tr class="border-b border-gray-200 dark:border-gray-700">
                                            <!-- TODO:Récupérer le nom, prénom et son classement, placer en fonction de leurs scores pour la position dans le tableau -->
                                            <!-- TODO:Si plus de points donc premier par exemple et ensuite faire en fonction, toujours faire en fonction du plus haut score dans les D -->
                                            <!-- TODO:Pour définir la place dans le tableau, c'est dabord en fonction des parties qui comptent, c'est le plus haut dans D qui comptent -->
                                            <!-- TODO:Si égalité alors on comptent les manches -->
                                            <!-- TODO:Si égalité alors on comptent les points sur l'intégralité des manches -->
                                            <th scope="col" class="px-6 py-3  border dark:border-gray-700">
                                                Joueur
                                            </th>
                                            <!-- TODO:Récupérer le nom de l'équipe associé au joueur -->
                                            <th scope="col" class="px-6 py-3 border dark:border-gray-700">
                                                Équipe
                                            </th>
                                            <!-- TODO:Joué c'est le nombre de match joué cumulé -->
                                            <th scope="col" class="px-6 py-3 border-r border-white">
                                                Joué
                                            </th>
                                            <!-- TODO:Parties c'est les matchs dans un match. En gros promotion c'est 3 contre 3, pour les indivs les doubles ne sont pas comptabilisé -->
                                            <!-- TODO:Ce qui veux dire que chaque joueur joue forcément 3 matchs dans cet exemple -->
                                            <!-- TODO:Il y a G pour gagné, P pour Perdus et D pour décompte, décompte c'est le totale entre G et P -->
                                            <!-- TODO:Imaginons, je gagne 2 matchs et j'en perds 1 contre l'Égalitaire 3, alors dans Parties j'aurais 2 dans G et 1 dans P, donc 1 dans D -->
                                            <th scope="col" colspan="3" class="px-6 py-3 border-r border-white text-center">
                                                Parties
                                            </th>
                                            <!-- TODO:Manches c'est les manches gagnés et perdus des 3 matchs. -->
                                            <!-- TODO:Il y a G pour gagné, P pour Perdus et D pour décompte, décompte c'est le totale entre G et P -->
                                            <th scope="col" colspan="3" class="px-6 py-3 border-r border-white text-center">
                                                Manches
                                            </th>
                                            <!-- TODO:Points c'est les points gagnés et perdus de toutes les manches des 3 matchs. -->
                                            <!-- TODO:Dans ce cas la, il faudra comptabiliser tous les points gagnés et perdus sur toutes les manches confondus -->
                                            <th scope="col" colspan="3" class="px-6 py-3 border dark:border-gray-700 text-center">
                                                Points
                                            </th>
                                        </tr>
                                        <tr class="border-b border-gray-200 dark:border-gray-700">
                                            <th scope="col" class="px-6 py-3 border dark:border-gray-700"></th>
                                            <th scope="col" class="px-6 py-3 border dark:border-gray-700"></th>
                                            <th scope="col" class="px-6 py-3 border-r border-white"></th>
                                            <th scope="col" class="px-6 py-3 border dark:border-gray-700">G</th>
                                            <th scope="col" class="px-6 py-3 border dark:border-gray-700">P</th>
                                            <th scope="col" class="px-6 py-3 border-r border-white">D</th>
                                            <th scope="col" class="px-6 py-3 border dark:border-gray-700">G</th>
                                            <th scope="col" class="px-6 py-3 border dark:border-gray-700">P</th>
                                            <th scope="col" class="px-6 py-3 border-r border-white">D</th>
                                            <th scope="col" class="px-6 py-3 border dark:border-gray-700">G</th>
                                            <th scope="col" class="px-6 py-3 border dark:border-gray-700">P</th>
                                            <th scope="col" class="px-6 py-3 border-r border-white">D</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-gray-50 dark:text-white dark:bg-gray-800">
                                        <tr class="border-b border-gray-200 dark:border-gray-700">
                                            <td scope="row" class="w-1/2 px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 border dark:border-gray-700">
                                                Billerey Vincent 75
                                            </td>
                                            <td scope="row" class="w-1/2 px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 border dark:border-gray-700">
                                                Amitié Lingolsheim 4
                                            </td>
                                            <td class="px-6 py-4 w-3 border-r border-white text-center">33</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">34</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">34</td>
                                            <td class="px-6 py-4 w-3 border-r border-white text-center">11</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">11</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">33</td>
                                            <td class="px-6 py-4 w-3 border-r border-white text-center">34</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">34</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">11</td>
                                            <td class="px-6 py-4 w-3 border-r border-white text-center">11</td>
                                        </tr>
                                        <tr class="border-b border-gray-200 dark:border-gray-700">
                                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 border dark:border-gray-700">
                                                Billerey Vincent 75
                                            </td>
                                            <td scope="row" class="w-1/2 px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 border dark:border-gray-700">
                                                Amitié Lingolsheim 4
                                            </td>
                                            <td class="px-6 py-4 w-3 border-r border-white text-center">33</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">34</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">34</td>
                                            <td class="px-6 py-4 w-3 border-r border-white text-center">11</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">11</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">33</td>
                                            <td class="px-6 py-4 w-3 border-r border-white text-center">34</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">34</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">11</td>
                                            <td class="px-6 py-4 w-3 border-r border-white text-center">11</td>
                                        </tr>
                                        <tr class="border-b border-gray-200 dark:border-gray-700">
                                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 border dark:border-gray-700">
                                                Billerey Vincent 75
                                            </td>
                                            <td scope="row" class="w-1/2 px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 border dark:border-gray-700">
                                                Amitié Lingolsheim 4
                                            </td>
                                            <td class="px-6 py-4 w-3 border-r border-white text-center">33</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">34</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">34</td>
                                            <td class="px-6 py-4 w-3 border-r border-white text-center">11</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">11</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">33</td>
                                            <td class="px-6 py-4 w-3 border-r border-white text-center">34</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">34</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">11</td>
                                            <td class="px-6 py-4 w-3 border-r border-white text-center">11</td>
                                        </tr>
                                        <tr class="border-b border-gray-200 dark:border-gray-700">
                                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 border dark:border-gray-700">
                                                Billerey Vincent 75
                                            </td>
                                            <td scope="row" class="w-1/2 px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 border dark:border-gray-700">
                                                Amitié Lingolsheim 4
                                            </td>
                                            <td class="px-6 py-4 w-3 border-r border-white text-center">33</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">34</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">34</td>
                                            <td class="px-6 py-4 w-3 border-r border-white text-center">11</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">11</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">33</td>
                                            <td class="px-6 py-4 w-3 border-r border-white text-center">34</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">34</td>
                                            <td class="px-6 py-4 w-3 border dark:border-gray-700 text-center">11</td>
                                            <td class="px-6 py-4 w-3 border-r border-white text-center">11</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
</x-layouts.app>
