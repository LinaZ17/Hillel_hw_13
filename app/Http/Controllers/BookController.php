<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Book;
use App\Service\BookService\BookService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function service(BookService $bookService)
    {

        $value = Cache::get('key_book');

        $result = \App\Service\BookService\Facade\BookFacade::cache();

        return $bookService->cache();
    }


    public function index()
    {

        $books = Book::firstOrCreate([
            'author_id' => 1,
            'title' => 'Суперкомпьютеры',
            'description' => 'Книга о исследовании японского Института физико-химических исследований RIKEN
             о возможности существования семейства экзотических элементарных частиц,
             состоящих из шести субатомных частиц, называемых кварками.',
            'status_id' => 3
        ]);

        $books = Book::all();
        return view('books.books_index', [
            'books' => $books

        ]);

    }


    public function show()  //2 таблицы users и books
    {
        $users = DB::table('users')
            ->leftjoin('books', 'users.id', '=', 'books.author_id')
            ->select('users.*', 'books.*')
            ->get();


        $books = User::all();
        return view('users_books.users_books', [
            'users' => $users,


        ]);
    }

}
