<?php

declare(strict_types=1);

namespace App\Http\Controllers\LionDatabase\MySQL;

use App\Models\LionDatabase\MySQL\InterfacesModel;
use Database\Class\LionDatabase\MySQL\Interfaces;

class InterfacesController
{
	public function createInterfaces(
		Interfaces $interfaces,
		InterfacesModel $interfacesModel
	): object {
		return $interfacesModel->createInterfacesDB($interfaces);
	}

	public function readInterfaces(InterfacesModel $interfacesModel): array|object
	{
		return $interfacesModel->readInterfacesDB();
	}

	public function updateInterfaces(InterfacesModel $interfacesModel, string $id): object
	{
		return $interfacesModel->updateInterfacesDB();
	}

	public function deleteInterfaces(InterfacesModel $interfacesModel, string $id): object
	{
		return $interfacesModel->deleteInterfacesDB();
	}
}
