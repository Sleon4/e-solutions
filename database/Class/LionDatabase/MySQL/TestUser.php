<?php

declare(strict_types=1);

namespace Database\Class\LionDatabase\MySQL;

use JsonSerializable;
use Lion\Bundle\Interface\CapsuleInterface;

class TestUser implements CapsuleInterface, JsonSerializable
{
	private ?int $id = null;
	private ?string $full_name = null;
	private ?string $email = null;
	private ?int $celular = null;
	private ?string $name_folder = null;
	private ?string $date = null;
	private ?int $status = null;

	public function jsonSerialize(): array
	{
		return get_object_vars($this);
	}

	/**
	 * {@inheritdoc}
	 * */
	public function capsule(): TestUser
	{
		$this
			->setId(request->id ?? null)
			->setFullName(request->full_name ?? null)
			->setEmail(request->email ?? null)
			->setCelular(request->celular ?? null)
			->setNameFolder(request->name_folder ?? null)
			->setDate(request->date ?? null)
			->setStatus(request->status ?? null);

		return $this;
	}

	public function getId(): ?int
	{
		return $this->id;
	}

	public function setId(?int $id): TestUser
	{
		$this->id = $id;

		return $this;
	}

	public function getFullName(): ?string
	{
		return $this->full_name;
	}

	public function setFullName(?string $full_name): TestUser
	{
		$this->full_name = $full_name;

		return $this;
	}

	public function getEmail(): ?string
	{
		return $this->email;
	}

	public function setEmail(?string $email): TestUser
	{
		$this->email = $email;

		return $this;
	}

	public function getCelular(): ?int
	{
		return $this->celular;
	}

	public function setCelular(?int $celular): TestUser
	{
		$this->celular = $celular;

		return $this;
	}

	public function getNameFolder(): ?string
	{
		return $this->name_folder;
	}

	public function setNameFolder(?string $name_folder): TestUser
	{
		$this->name_folder = $name_folder;

		return $this;
	}

	public function getDate(): ?string
	{
		return $this->date;
	}

	public function setDate(?string $date): TestUser
	{
		$this->date = $date;

		return $this;
	}

	public function getStatus(): ?int
	{
		return $this->status;
	}

	public function setStatus(?int $status): TestUser
	{
		$this->status = $status;

		return $this;
	}
}