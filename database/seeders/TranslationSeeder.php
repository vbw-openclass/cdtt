<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class TranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		DB::table('translations')->insert([
			[
				"group" => "navigation",
				"key" => "dashboard",
				"text" => json_encode([
					["locale" => "en", "translatedText" => "Dashboard"],
					["locale" => "fr", "translatedText" => "Tableau de bord"]
				]),
				"created_at" => Carbon::now(),
				"updated_at" => Carbon::now(),
			],
			[
				"group" => "navigation",
				"key" => "manage_account",
				"text" => json_encode([
					["locale" => "en", "translatedText" => "My account"],
					["locale" => "fr", "translatedText" => "Mon compte"]
				]),
				"created_at" => Carbon::now(),
				"updated_at" => Carbon::now(),
			],
			[
				"group" => "navigation",
				"key" => "login",
				"text" => json_encode([
					["locale" => "en", "translatedText" => "Login"],
					["locale" => "fr", "translatedText" => "Connexion"]
				]),
				"created_at" => Carbon::now(),
				"updated_at" => Carbon::now(),
			],
			[
				"group" => "navigation",
				"key" => "register",
				"text" => json_encode([
					["locale" => "en", "translatedText" => "Register"],
					["locale" => "fr", "translatedText" => "S'enregistrer"]
				]),
				"created_at" => Carbon::now(),
				"updated_at" => Carbon::now(),
			],
			[
				"group" => "navigation",
				"key" => "profile",
				"text" => json_encode([
					["locale" => "en", "translatedText" => "Profile"],
					["locale" => "fr", "translatedText" => "Profil"]
				]),
				"created_at" => Carbon::now(),
				"updated_at" => Carbon::now(),
			],
			[
				"group" => "navigation",
				"key" => "logout",
				"text" => json_encode([
					["locale" => "en", "translatedText" => "Logout"],
					["locale" => "fr", "translatedText" => "Déconnexion"]
				]),
				"created_at" => Carbon::now(),
				"updated_at" => Carbon::now(),
			],
			[
				"group" => "models",
				"key" => "character_name",
				"text" => json_encode([
					["locale" => "en", "translatedText" => "Name"],
					["locale" => "fr", "translatedText" => "Nom"]
				]),
				"created_at" => Carbon::now(),
				"updated_at" => Carbon::now(),
			],
			[
				"group" => "models",
				"key" => "user",
				"text" => json_encode([
					["locale" => "en", "translatedText" => "User"],
					["locale" => "fr", "translatedText" => "Utilisateur"]
				]),
				"created_at" => Carbon::now(),
				"updated_at" => Carbon::now(),
			],
			[
				"group" => "models",
				"key" => "server",
				"text" => json_encode([
					["locale" => "en", "translatedText" => "Server"],
					["locale" => "fr", "translatedText" => "Serveur"]
				]),
				"created_at" => Carbon::now(),
				"updated_at" => Carbon::now(),
			],
			[
				"group" => "models",
				"key" => "faction",
				"text" => json_encode([
					["locale" => "en", "translatedText" => "Faction"],
					["locale" => "fr", "translatedText" => "Faction"]
				]),
				"created_at" => Carbon::now(),
				"updated_at" => Carbon::now(),
			],
			[
				"group" => "models",
				"key" => "gender",
				"text" => json_encode([
					["locale" => "en", "translatedText" => "Gender"],
					["locale" => "fr", "translatedText" => "Sexe"]
				]),
				"created_at" => Carbon::now(),
				"updated_at" => Carbon::now(),
			],
			[
				"group" => "models",
				"key" => "race",
				"text" => json_encode([
					["locale" => "en", "translatedText" => "Race"],
					["locale" => "fr", "translatedText" => "Espèce"]
				]),
				"created_at" => Carbon::now(),
				"updated_at" => Carbon::now(),
			],
			[
				"group" => "models",
				"key" => "character_appearance",
				"text" => json_encode([
					["locale" => "en", "translatedText" => "Appearance"],
					["locale" => "fr", "translatedText" => "Apparence"]
				]),
				"created_at" => Carbon::now(),
				"updated_at" => Carbon::now(),
			],
			[
				"group" => "models",
				"key" => "character_appearance_key",
				"text" => json_encode([
					["locale" => "en", "translatedText" => "Body slot"],
					["locale" => "fr", "translatedText" => "Elément du corps"]
				]),
				"created_at" => Carbon::now(),
				"updated_at" => Carbon::now(),
			],
			[
				"group" => "models",
				"key" => "character_total_experience_gained",
				"text" => json_encode([
					["locale" => "en", "translatedText" => "Total experience"],
					["locale" => "fr", "translatedText" => "Expérience totale"]
				]),
				"created_at" => Carbon::now(),
				"updated_at" => Carbon::now(),
			],
			[
				"group" => "models",
				"key" => "character_background",
				"text" => json_encode([
					["locale" => "en", "translatedText" => "Background"],
					["locale" => "fr", "translatedText" => "Biographie"]
				]),
				"created_at" => Carbon::now(),
				"updated_at" => Carbon::now(),
			],
			[
				"group" => "models",
				"key" => "translation",
				"text" => json_encode([
					["locale" => "en", "translatedText" => "Translation"],
					["locale" => "fr", "translatedText" => "Traduction"]
				]),
				"created_at" => Carbon::now(),
				"updated_at" => Carbon::now(),
			],
			[
				"group" => "models",
				"key" => "character",
				"text" => json_encode([
					["locale" => "en", "translatedText" => "Character"],
					["locale" => "fr", "translatedText" => "Personnage"]
				]),
				"created_at" => Carbon::now(),
				"updated_at" => Carbon::now(),
			],
			[
				"group" => "models",
				"key" => "characteristic",
				"text" => json_encode([
					["locale" => "en", "translatedText" => "Characteristic"],
					["locale" => "fr", "translatedText" => "Caractéristique"]
				]),
				"created_at" => Carbon::now(),
				"updated_at" => Carbon::now(),
			],
			[
				"group" => "models",
				"key" => "status",
				"text" => json_encode([
					["locale" => "en", "translatedText" => "Status"],
					["locale" => "fr", "translatedText" => "Statut"]
				]),
				"created_at" => Carbon::now(),
				"updated_at" => Carbon::now(),
			],
			[
				"group" => "models",
				"key" => "navigation_group_user_management",
				"text" => json_encode([
					["locale" => "en", "translatedText" => "User management"],
					["locale" => "fr", "translatedText" => "Gestion des utilisateurs"]
				]),
				"created_at" => Carbon::now(),
				"updated_at" => Carbon::now(),
			],
			[
				"group" => "models",
				"key" => "navigation_group_game_settings",
				"text" => json_encode([
					["locale" => "en", "translatedText" => "Game settings"],
					["locale" => "fr", "translatedText" => "Réglages du jeu"]
				]),
				"created_at" => Carbon::now(),
				"updated_at" => Carbon::now(),
			],
			[
				"group" => "models",
				"key" => "navigation_group_settings",
				"text" => json_encode([
					["locale" => "en", "translatedText" => "Settings"],
					["locale" => "fr", "translatedText" => "Réglages"]
				]),
				"created_at" => Carbon::now(),
				"updated_at" => Carbon::now(),
			],
			[
				"group" => "models",
				"key" => "navigation_tooltip",
				"text" => json_encode([
					["locale" => "en", "translatedText" => "Amount of :model"],
					["locale" => "fr", "translatedText" => "Le nombre de :model"]
				]),
				"created_at" => Carbon::now(),
				"updated_at" => Carbon::now(),
			],
			[
				"group" => "forms",
				"key" => "value",
				"text" => json_encode([
					["locale" => "en", "translatedText" => "Value"],
					["locale" => "fr", "translatedText" => "Valeur"]
				]),
				"created_at" => Carbon::now(),
				"updated_at" => Carbon::now(),
			],
		]);
    }
}
