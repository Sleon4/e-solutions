<?php

declare(strict_types=1);

namespace App\Http\Controllers\LionDatabase\MySQL;

use App\Models\LionDatabase\MySQL\PlatformsModel;
use Database\Class\LionDatabase\MySQL\Platforms;

class PlatformsController
{
	public function createPlatforms(
		Platforms $platforms,
		PlatformsModel $platformsModel
	): object {
		return $platformsModel->createPlatformsDB($platforms);
	}

	public function readPlatforms(PlatformsModel $platformsModel): array|object
	{
		return $platformsModel->readPlatformsDB();
	}

	public function updatePlatforms(PlatformsModel $platformsModel, string $id): object
	{
		return $platformsModel->updatePlatformsDB();
	}

	public function deletePlatforms(PlatformsModel $platformsModel, string $id): object
	{
		return $platformsModel->deletePlatformsDB();
	}
}
