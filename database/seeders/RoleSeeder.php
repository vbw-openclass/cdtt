<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		DB::table('roles')->insert([
			[
				'name' => 'Super Admin',
				'slug' => 'super-admin',
			],
			[
				'name' => 'Admin',
				'slug' => 'admin',
			],
			[
				'name' => 'Président de club',
				'slug' => 'president',
			],
			[
				'name' => 'Capitaine',
				'slug' => 'capitaine',
			],
			[
				'name' => 'Joueur',
				'slug' => 'joueur',
			],
		]);
    }
}
