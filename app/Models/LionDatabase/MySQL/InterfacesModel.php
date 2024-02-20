<?php

declare(strict_types=1);

namespace App\Models\LionDatabase\MySQL;

use Database\Class\LionDatabase\MySQL\Interfaces;
use Lion\Database\Drivers\MySQL as DB;

class InterfacesModel
{
	public function createInterfacesDB(
		Interfaces $interfaces
	): object {
		return DB::call('create_interfaces', [
			$interfaces->getName(),
			$interfaces->getStatus(),
			$interfaces->getDevice(),
		])->execute();
	}

	public function readInterfacesDB(): array|object
	{
		return DB::view('read_interfaces')->select()->getAll();
	}

	public function updateInterfacesDB(
		Interfaces $interfaces
	): object {
		return DB::call('update_interfaces', [
			$interfaces->getName(),
			$interfaces->getStatus(),
			$interfaces->getDevice(),
			$interfaces->getId(),
		])->execute();
	}

	public function deleteInterfacesDB(
		Interfaces $interfaces
	): object {
		return DB::call('delete_interfaces', [
			$interfaces->getId(),
		])->execute();
	}
}
