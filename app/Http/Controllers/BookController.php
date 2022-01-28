<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookResource;
use App\Services\BookService;
use Illuminate\Routing\Controller as BaseController;

class BookController extends BaseController
{
    protected $bookService;

    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    public function index()
    {
        try {
            return BookResource::collection(
                $this->bookService->getBook()
            );
        } catch (\Exception $ex) {
        }
    }
}
