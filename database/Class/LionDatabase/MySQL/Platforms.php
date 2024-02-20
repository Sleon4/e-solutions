<?php

declare(strict_types=1);

namespace Database\Class\LionDatabase\MySQL;

use JsonSerializable;
use Lion\Bundle\Interface\CapsuleInterface;

class Platforms implements CapsuleInterface, JsonSerializable
{
	private ?int $id = null;
	private ?string $name = null;
	private ?string $status = null;

	public function jsonSerialize(): array
	{
		return get_object_vars($this);
	}

	/**
	 * {@inheritdoc}
	 * */
	public function capsule(): Platforms
	{
		$this
			->setId(request->id ?? null)
			->setName(request->name ?? null)
			->setStatus(request->status ?? null);

		return $this;
	}

	public function getId(): ?int
	{
		return $this->id;
	}

	public function setId(?int $id): Platforms
	{
		$this->id = $id;

		return $this;
	}

	public function getName(): ?string
	{
		return $this->name;
	}

	public function setName(?string $name): Platforms
	{
		$this->name = $name;

		return $this;
	}

	public function getStatus(): ?string
	{
		return $this->status;
	}

	public function setStatus(?string $status): Platforms
	{
		$this->status = $status;

		return $this;
	}
}