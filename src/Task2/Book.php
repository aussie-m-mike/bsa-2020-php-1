<?php

declare(strict_types=1);

namespace App\Task2;

class Book
{
	protected $title;
	protected $price;
	protected $pages;

	public function __construct(
		string $title,
		int $price,
		int $pages
	) {
		$this->title = $title;
		$this->price = $price;
		$this->pages = $pages;
	}

	public function getTitle(): string
    {
        return $this->title;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getPagesNumber(): int
    {
        return $this->pages;
    }
}