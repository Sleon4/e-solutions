<?php

declare(strict_types=1);

namespace Database\Class\LionDatabase\MySQL;

use JsonSerializable;
use Lion\Bundle\Interface\CapsuleInterface;

class Devices implements CapsuleInterface, JsonSerializable
{
	private ?int $id = null;
	private ?string $name = null;
	private ?string $status = null;
	private ?int $platform = null;

	public function jsonSerialize(): array
	{
		return get_object_vars($this);
	}

	/**
	 * {@inheritdoc}
	 * */
	public function capsule(): Devices
	{
		$this
			->setId(request->id ?? null)
			->setName(request->name ?? null)
			->setStatus(request->status ?? null)
			->setPlatform(request->platform ?? null);

		return $this;
	}

	public function getId(): ?int
	{
		return $this->id;
	}

	public function setId(?int $id): Devices
	{
		$this->id = $id;

		return $this;
	}

	public function getName(): ?string
	{
		return $this->name;
	}

	public function setName(?string $name): Devices
	{
		$this->name = $name;

		return $this;
	}

	public function getStatus(): ?string
	{
		return $this->status;
	}

	public function setStatus(?string $status): Devices
	{
		$this->status = $status;

		return $this;
	}

	public function getPlatform(): ?int
	{
		return $this->platform;
	}

	public function setPlatform(?int $platform): Devices
	{
		$this->platform = $platform;

		return $this;
	}
}