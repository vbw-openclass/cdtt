<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clubs')->insert([
			[
				'name' => 'Amitié Lingolsheim',
				'department' => 67,
				'address' => '19, rue de Geispolsheim 67380 LINGOLSHEIM',
				'user_id' => 2,
				'state' => true,
				'mobile' => '0635531542'
			],
			[
				'name' => 'CP Zutzendorf',
				'department' => 67,
				'address' => '6, rue Hanau-Lichtenberg 67330 ZUTZENDORF',
				'user_id' => 1,
				'state' => true,
				'mobile' => ''
			],
			[
				'name' => 'U.T. AURORA Schiltigheim-Bischheim',
				'department' => 67,
				'address' => '1, rue de la Patrie 67300 SCHILTIGHEIM',
				'user_id' => 2,
				'state' => true,
				'mobile' => ''
			],
		]);
    }
}
