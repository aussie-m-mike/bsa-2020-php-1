<?php

declare(strict_types=1);

namespace App\Task2;

class BooksGenerator
{
	private $minPageNumber;
	private $libraryBooks;
	private $maxPrice;
	private $storeBooks;

	public function __construct(
		int $minPageNumber,
		array $libraryBooks,
		int $maxPrice,
		array $storeBooks
	) {
		$this->minPageNumber = $minPageNumber;
		$this->libraryBooks = $libraryBooks;
		$this->maxPrice = $maxPrice;
		$this->storeBooks = $storeBooks;
	}

	public function generate(): \Generator
    {
		foreach ($this->libraryBooks as $book) {
			if($book->getPagesNumber() >= $this->minPageNumber)
				yield $book;
		}

		foreach ( $this->storeBooks as $book ) {
			if($book->getPrice() <= $this->maxPrice)
				yield $book;
		}
    }
}