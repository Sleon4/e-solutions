<?php

declare(strict_types=1);

namespace App\Http\Controllers\LionDatabase\MySQL;

use App\Models\LionDatabase\MySQL\TestUserModel;
use Carbon\Carbon;
use Database\Class\LionDatabase\MySQL\TestUser;

class TestUserController
{
	public function createTestUser(TestUser $testUser, TestUserModel $testUserModel): object
    {
		return $testUserModel->createTestUserDB(
            $testUser
                ->capsule()
                ->setDate(Carbon::now()->format('Y-m-d H:i:s'))
                ->setStatus(1)
        );
	}

	public function readTestUser(TestUserModel $testUserModel): array|object
	{
		return $testUserModel->readTestUserDB();
	}

	public function updateTestUser(TestUser $testUser, TestUserModel $testUserModel, string $id): object
	{
		return $testUserModel->updateTestUserDB(
            $testUser
                ->capsule()
                ->setId((int) $id)
        );
	}

	public function deleteTestUser(TestUser $testUser, TestUserModel $testUserModel, string $id): object
	{
		return $testUserModel->deleteTestUserDB(
            $testUser
                ->setId((int) $id)
                ->setStatus(0)
        );
	}
}
