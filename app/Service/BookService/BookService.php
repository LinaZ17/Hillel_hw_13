<?php

namespace App\Service\BookService;

use App\Models\Book;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class BookService
{
    public function cache()
    {
        $book = Book::find(1);

        $book->title = 'Изучаем PHP 7. Руководство по созданию интерактивных веб-сайтов';
        $book->description = 'Эта книга адресована тем, кто только начинает изучать язык программирования PHP.
        Ее автор, Дэвид Скляр, являющийся также соавтором книги PHP Cookbook, раскрывает особенности данного языка,
        которые следует знать для построения динамических веб-сайтов, размещаемых на веб-серверах. ';
        $book->save();

        $book = Book::find(2);

        $book->title = 'PHP и MySQL. 25 уроков для начинающих';
        $book->description = 'В книге 25 иллюстрированных уроков и более 30 практических упражнений.
         В доступной и наглядной форме, на сквозном примере рассказано о программировании динамических веб-сайтов
         на языке PHP с применением СУБД MySQL и MariaDB. ';
        $book->save();

        $value = Cache::remember('key_book', 1000, function () {
            return dd(Book::find(2)->get());
        });

    }


}


