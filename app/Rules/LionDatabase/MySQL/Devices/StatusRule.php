<?php

declare(strict_types=1);

namespace App\Rules\LionDatabase\MySQL\Devices;

use Lion\Bundle\Helpers\Rules;
use Valitron\Validator;

class StatusRule extends Rules 
{
	public string $field = 'status';
	public string $desc = '';
	public string $value = '';
	public bool $disabled = false;

	public function passes(): void 
	{
		$this->validate(function(Validator $validator) {
			$validator->rule('required', $this->field)->message('property is required');
		});
	}
}