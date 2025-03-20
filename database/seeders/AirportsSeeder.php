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
					['name' => 'Istanbul Airport'],
					['name' => 'Dubai International Airport'],
					['name' => 'Paris Charles de Gaulle Airport'],
					['name' => 'Singapore Changi Airport']
				]);
    }
}
