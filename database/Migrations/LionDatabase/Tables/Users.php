<?php

declare(strict_types=1);

use Lion\Bundle\Interface\MigrationUpInterface;
use Lion\Database\Drivers\Schema\MySQL as DB;

return new class implements MigrationUpInterface
{
	const INDEX = 2;

	/**
	 * {@inheritdoc}
	 * */
	public function up(): object
	{
		return DB::connection('lion_database')
			->createTable('test_user', function() {
				DB::int('id')->notNull()->autoIncrement()->primaryKey();
                DB::varchar('full_name', 150)->notNull();
                DB::varchar('email', 100)->notNull();
                DB::bigInt('celular')->notNull();
                DB::varchar('name_folder', 60)->notNull();
                DB::dateTime('date')->notNull();
                DB::int('status')->notNull();
			})
			->execute();
	}
};
