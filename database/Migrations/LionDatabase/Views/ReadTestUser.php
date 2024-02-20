<?php

declare(strict_types=1);

use Lion\Bundle\Interface\MigrationUpInterface;
use Lion\Database\Drivers\MySQL;
use Lion\Database\Drivers\Schema\MySQL as Schema;

return new class implements MigrationUpInterface
{
	/**
	 * {@inheritdoc}
	 * */
	public function up(): object
	{
		return Schema::connection('lion_database')
			->createView('read_test_user', function(MySQL $db) {
				$db
                    ->table($db->as('test_user', 'usr'))
                    ->select(
                        $db->getColumn('id', 'usr'),
                        $db->getColumn('full_name', 'usr'),
                        $db->getColumn('email', 'usr'),
                        $db->getColumn('celular', 'usr'),
                        $db->getColumn('name_folder', 'usr'),
                        $db->getColumn('date', 'usr'),
                        $db->getColumn('status', 'usr'),
                    )
                    ->where()->notEqualTo('status', '0');
			})
			->execute();
	}
};
