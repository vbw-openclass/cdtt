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
				'name' => 'Promotion',
				'players' => 3
			],
			[
				'name' => 'Division 1',
				'players' => 3
			],
			[
				'name' => 'Vétéran',
				'players' => 2
			],
			[
				'name' => 'Mixte',
				'players' => 2
			],
		]);
    }
}
