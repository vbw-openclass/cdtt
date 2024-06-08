<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('players')->insert([
			[
				'club_id' => 1,
				'licence' => '422786',
				'name' => 'Billerey',
				'surname' => 'Vincent',
				'ranking' => 75
			],
			[
				'club_id' => 1,
				'licence' => '30611',
				'name' => 'Wandres',
				'surname' => 'Xavier',
				'ranking' => 80
			],
			[
				'club_id' => 2,
				'licence' => '422787',
				'name' => 'Wagner',
				'surname' => 'Thomas',
				'ranking' => 40
			],
			[
				'club_id' => 3,
				'licence' => '30570',
				'name' => 'Rambaut',
				'surname' => 'Martine',
				'ranking' => 90
			],
		]);
    }
}
