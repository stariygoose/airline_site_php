<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AirportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('airports')->insert([
					[
						'name' => 'Istanbul Airport',
						'created_at' => now()->format('Y-m-d H:i:s'),
						'updated_at' => now()->format('Y-m-d H:i:s'),
					],
					[
						'name' => 'Dubai International Airport',
						'created_at' => now()->format('Y-m-d H:i:s'),
						'updated_at' => now()->format('Y-m-d H:i:s'),
					],
					[
						'name' => 'Paris Charles de Gaulle Airport',
						'created_at' => now()->format('Y-m-d H:i:s'),
						'updated_at' => now()->format('Y-m-d H:i:s'),
					],
					[
						'name' => 'Singapore Changi Airport',
						'created_at' => now()->format('Y-m-d H:i:s'),
						'updated_at' => now()->format('Y-m-d H:i:s'),
					]
				]);
    }
}
