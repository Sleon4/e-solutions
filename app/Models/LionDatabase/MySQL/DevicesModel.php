<?php

declare(strict_types=1);

namespace App\Models\LionDatabase\MySQL;

use Database\Class\LionDatabase\MySQL\Devices;
use Lion\Database\Drivers\MySQL as DB;

class DevicesModel
{
	public function createDevicesDB(
		Devices $devices
	): object {
		return DB::call('create_devices', [
			$devices->getName(),
			$devices->getStatus(),
			$devices->getPlatform(),
		])->execute();
	}

	public function readDevicesDB(): array|object
	{
		return DB::view('read_devices')->select()->getAll();
	}

	public function updateDevicesDB(
		Devices $devices
	): object {
		return DB::call('update_devices', [
			$devices->getName(),
			$devices->getStatus(),
			$devices->getPlatform(),
			$devices->getId(),
		])->execute();
	}

	public function deleteDevicesDB(
		Devices $devices
	): object {
		return DB::call('delete_devices', [
			$devices->getId(),
		])->execute();
	}
}
