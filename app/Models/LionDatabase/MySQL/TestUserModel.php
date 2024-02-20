<?php

declare(strict_types=1);

namespace App\Models\LionDatabase\MySQL;

use Database\Class\LionDatabase\MySQL\TestUser;
use Lion\Database\Drivers\MySQL as DB;

class TestUserModel
{
	public function createTestUserDB(TestUser $testUser): object
    {
		return DB::table('test_user')->insert([
            'full_name' => $testUser->getFullName(),
            'email' => $testUser->getEmail(),
            'celular' => $testUser->getCelular(),
            'name_folder' => $testUser->getNameFolder(),
            'date' => $testUser->getDate(),
            'status' => $testUser->getStatus()
        ])->execute();
	}

	public function readTestUserDB(): array|object
	{
		return DB::view('read_test_user')->select()->getAll();
	}

	public function updateTestUserDB(TestUser $testUser): object
    {
		return DB::table('test_user')
            ->update([
                'full_name' => $testUser->getFullName(),
                'email' => $testUser->getEmail(),
                'celular' => $testUser->getCelular(),
                'name_folder' => $testUser->getNameFolder()
            ])
            ->where()->equalTo('id', $testUser->getId())
            ->execute();
	}

	public function deleteTestUserDB(TestUser $testUser): object
    {
		return DB::table('test_user')
            ->update([
                'status' => $testUser->getStatus()
            ])
            ->where()->equalTo('id', $testUser->getId())
            ->execute();
	}
}
