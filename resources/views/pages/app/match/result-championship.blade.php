<?php

    use function Laravel\Folio\name;

    name('match-championship');
?>

<x-layouts.app>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Résultat for business teams like yours</h2>
                <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
            </div>

            <div class="relative border overflow-x-auto shadow-md sm:rounded-lg">
                <div class="flex flex-col p-6  text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                    <h3 class="mb-4 text-2xl font-semibold">2024/2025 - Championnat par équipe - Promotion Secteur Strasbourg</h3>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 min-w-full">
                        <tbody>
                            <!-- TODO:Récupérer les joueurs pour qu'ils se rencontrent tous, les uns après les autres. -->
                            <!-- TODO:Il faudra également la possibilité de choisir les deux joueurs de chaque équipe pour faire le double -->
                            <!-- TODO:Je t'ai mis a quoi ressemble le tableau grossièrement, car je pense que tu vas mettre en place un système de boucle pour tout afficher -->
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <td scope="row" class="w-1/2 px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                    <!-- TODO:Récupérer le nom, prénom de l'équipe correspondante -->
                                    Nom, prénom
                                </td>
                                <td class="px-6 py-4 w-3 border dark:border-gray-700">
                                    11
                                </td>
                                <td class="px-6 py-4 w-3 border dark:border-gray-700">
                                    11
                                </td>
                                <td class="px-6 py-4 w-3 border dark:border-gray-700">
                                    11
                                </td>
                                <td class="px-6 py-4 w-3 border dark:border-gray-700">
                                    11
                                </td>
                                <td class="px-6 py-4 w-3 border dark:border-gray-700">
                                    11
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                    <!-- TODO:Récupérer le nom, prénom de l'équipe correspondante -->
                                    Nom, prénom
                                </td>
                                <td class="px-6 py-4 w-3 border dark:border-gray-700">
                                    4
                                </td>
                                <td class="px-6 py-4 w-3 border dark:border-gray-700">
                                    11
                                </td>
                                <td class="px-6 py-4 w-3 border dark:border-gray-700">
                                    11
                                </td>
                                <td class="px-6 py-4 w-3 border dark:border-gray-700">
                                    11
                                </td>
                                <td class="px-6 py-4 w-3 border dark:border-gray-700">
                                    11
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                    <!-- TODO:Récupérer le nom, prénom de l'équipe correspondante -->
                                    Nom, prénom
                                </td>
                                <td class="px-6 py-4 w-3 border dark:border-gray-700">
                                    11
                                </td>
                                <td class="px-6 py-4 w-3 border dark:border-gray-700">
                                    11
                                </td>
                                <td class="px-6 py-4 w-3 border dark:border-gray-700">
                                    11
                                </td>
                                <td class="px-6 py-4 w-3 border dark:border-gray-700">
                                    11
                                </td>
                                <td class="px-6 py-4 w-3 border dark:border-gray-700">
                                    11
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                    <!-- TODO:Récupérer le nom, prénom de l'équipe correspondante -->
                                    DOUBLE équipe recevante
                                </td>
                                <td class="px-6 py-4 w-3 border dark:border-gray-700">
                                    11
                                </td>
                                <td class="px-6 py-4 w-3 border dark:border-gray-700">
                                    11
                                </td>
                                <td class="px-6 py-4 w-3 border dark:border-gray-700">
                                    11
                                </td>
                                <td class="px-6 py-4 w-3 border dark:border-gray-700">
                                    11
                                </td>
                                <td class="px-6 py-4 w-3 border dark:border-gray-700">
                                    11
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                    <!-- TODO:Récupérer le nom, prénom de l'équipe correspondante -->
                                    DOUBLE équipe visiteuse
                                </td>
                                <td class="px-6 py-4 w-3 border dark:border-gray-700">
                                    11
                                </td>
                                <td class="px-6 py-4 w-3 border dark:border-gray-700">
                                    11
                                </td>
                                <td class="px-6 py-4 w-3 border dark:border-gray-700">
                                    11
                                </td>
                                <td class="px-6 py-4 w-3 border dark:border-gray-700">
                                    11
                                </td>
                                <td class="px-6 py-4 w-3 border dark:border-gray-700">
                                    11
                                </td>
                            </tr>
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                    <!-- TODO:Récupérer le nom, prénom de l'équipe correspondante -->
                                    Nom, prénom
                                </td>
                                <td class="px-6 py-4 w-3 border dark:border-gray-700">
                                    11
                                </td>
                                <td class="px-6 py-4 w-3 border dark:border-gray-700">
                                    11
                                </td>
                                <td class="px-6 py-4 w-3 border dark:border-gray-700">
                                    11
                                </td>
                                <td class="px-6 py-4 w-3 border dark:border-gray-700">
                                    11
                                </td>
                                <td class="px-6 py-4 w-3 border dark:border-gray-700">
                                    11
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
      </section>
</x-layouts.app>
