<?php

declare(strict_types=1);

use Lion\Bundle\Interface\MigrationUpInterface;
use Lion\Database\Drivers\Schema\MySQL as DB;

return new class implements MigrationUpInterface
{
	const INDEX = null;

	/**
	 * {@inheritdoc}
	 * */
	public function up(): object
	{
		return DB::connection('lion_database')
			->createTable('interfaces', function() {
				DB::int('id')->notNull()->autoIncrement()->primaryKey();
                DB::varchar('name', 150)->notNull();
                DB::tinyInt('status', 1);
                DB::int('device', 1);
			})
			->execute();
	}
};
