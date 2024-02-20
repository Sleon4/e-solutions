<?php

declare(strict_types=1);

namespace App\Models\LionDatabase\MySQL;

use Database\Class\LionDatabase\MySQL\Platforms;
use Lion\Database\Drivers\MySQL as DB;

class PlatformsModel
{
	public function createPlatformsDB(
		Platforms $platforms
	): object {
		return DB::call('create_platforms', [
			$platforms->getName(),
			$platforms->getStatus(),
		])->execute();
	}

	public function readPlatformsDB(): array|object
	{
		return DB::view('read_platforms')->select()->getAll();
	}

	public function updatePlatformsDB(
		Platforms $platforms
	): object {
		return DB::call('update_platforms', [
			$platforms->getName(),
			$platforms->getStatus(),
			$platforms->getId(),
		])->execute();
	}

	public function deletePlatformsDB(
		Platforms $platforms
	): object {
		return DB::call('delete_platforms', [
			$platforms->getId(),
		])->execute();
	}
}
