<?php

namespace App\Services;

use App\Repositories\BookRepositoryInterface;

class BookService
{
    protected $bookRepository;

    public function __construct(BookRepositoryInterface $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    /**
     * すべての本を取得
     *
     * @return
     */
    public function getBook()
    {
        $this->bookRepository->index();
    }
}
