<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		DB::table('users')->insert([
			[
				"name" => "Naumisa",
				"email" => "naumisa@antropus.fr",
				"password" => Hash::make('adminadmin'),
				"created_at" => Carbon::now(),
				"updated_at" => Carbon::now(),
			],
		]);
    }
}
