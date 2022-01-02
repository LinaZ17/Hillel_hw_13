<?php

namespace App\Service\BookService;

use Carbon\Laravel\ServiceProvider;

class BookServiceProvider extends ServiceProvider
{
    public function register()
    {

        $this->app->singleton('BooksService', function () {
            $cache = $this->app->get(\Illuminate\Support\Facades\Cache::class);
            return new BookService($cache);

        });

    }


}
