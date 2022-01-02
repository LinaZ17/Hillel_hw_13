<?php

namespace App\Service\BookService\Facade;

use Illuminate\Support\Facades\Facade;

class BookFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'BooksService';

    }
}
