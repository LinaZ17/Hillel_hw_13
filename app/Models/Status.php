<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Status extends Model
{
    //один ко многим
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
