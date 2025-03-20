<?php

namespace App\Repository;

use App\Interfaces\FlightsRepositoryInterface;
use App\Models\Airports;

class FlightsRepository implements FlightsRepositoryInterface {
	public function getAll() {
		return Airports::all();
	}
}