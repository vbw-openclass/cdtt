<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChampionshipCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('championship_categories')->insert([
			[
				'name' => 'Excellence',
				'players' => 4
			],
			[
				'name' => 'Honneur',
				'players' => 3
			],
			[
				'name' => 'Promotion sud',
				'players' => 3
			],
			[
				'name' => 'Promotion nord',
				'players' => 3
			],
			[
				'name' => 'Division 1 nord',
				'players' => 3
			],
			[
				'name' => 'Vétéran sud',
				'players' => 2
			],
			[
				'name' => 'Vétéran nord',
				'players' => 2
			],
			[
				'name' => 'Mixte sud',
				'players' => 2
			],
			[
				'name' => 'Mixte nord',
				'players' => 2
			],

		]);
    }
}
