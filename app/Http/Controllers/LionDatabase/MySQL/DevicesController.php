<?php

declare(strict_types=1);

namespace App\Http\Controllers\LionDatabase\MySQL;

use App\Models\LionDatabase\MySQL\DevicesModel;
use Database\Class\LionDatabase\MySQL\Devices;

class DevicesController
{
	public function createDevices(
		Devices $devices,
		DevicesModel $devicesModel
	): object {
		return $devicesModel->createDevicesDB($devices);
	}

	public function readDevices(DevicesModel $devicesModel): array|object
	{
		return $devicesModel->readDevicesDB();
	}

	public function updateDevices(DevicesModel $devicesModel, string $id): object
	{
		return $devicesModel->updateDevicesDB();
	}

	public function deleteDevices(DevicesModel $devicesModel, string $id): object
	{
		return $devicesModel->deleteDevicesDB();
	}
}
