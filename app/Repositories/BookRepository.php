<?php

namespace App\Repositories;

use App\Models\Book;
use Carbon\Carbon;

class BookRepository implements BookRepositoryInterface
{
    protected $book;

    public function __construct(Book $book)
    {
        $this->book = $book;
    }

    public function index()
    {
    }

    public function create()
    {
    }

    public function store()
    {
    }

    public function show()
    {
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function destroy()
    {
    }
}
