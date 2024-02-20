<?php

declare(strict_types=1);

namespace Database\Class\LionDatabase\MySQL;

use JsonSerializable;
use Lion\Bundle\Interface\CapsuleInterface;

class Interfaces implements CapsuleInterface, JsonSerializable
{
	private ?int $id = null;
	private ?string $name = null;
	private ?string $status = null;
	private ?int $device = null;

	public function jsonSerialize(): array
	{
		return get_object_vars($this);
	}

	/**
	 * {@inheritdoc}
	 * */
	public function capsule(): Interfaces
	{
		$this
			->setId(request->id ?? null)
			->setName(request->name ?? null)
			->setStatus(request->status ?? null)
			->setDevice(request->device ?? null);

		return $this;
	}

	public function getId(): ?int
	{
		return $this->id;
	}

	public function setId(?int $id): Interfaces
	{
		$this->id = $id;

		return $this;
	}

	public function getName(): ?string
	{
		return $this->name;
	}

	public function setName(?string $name): Interfaces
	{
		$this->name = $name;

		return $this;
	}

	public function getStatus(): ?string
	{
		return $this->status;
	}

	public function setStatus(?string $status): Interfaces
	{
		$this->status = $status;

		return $this;
	}

	public function getDevice(): ?int
	{
		return $this->device;
	}

	public function setDevice(?int $device): Interfaces
	{
		$this->device = $device;

		return $this;
	}
}