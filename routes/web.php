<?php

use Laravel\Folio\Folio;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Folio::path(resource_path('views/pages'))->middleware([
	'auth/*' => [
		'guest',
	],
	'guest/*' => [
		'guest',
	],
	'app/*' => [
		'auth',
		'verified',
	],
    'user/*' => [
        'auth',
        'verified',
    ],
    'admin/*' => [
        'auth',
        'verified',
    ],
]);
