<?php

namespace App\Repository;

use App\Interfaces\AirportsRepositoryInterface;

class AirportsRepository implements AirportsRepositoryInterface {
	public function getAll() {
		return Airports::all();
	}
}