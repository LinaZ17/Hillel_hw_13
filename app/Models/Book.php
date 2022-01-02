<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'id',
        'author_id',
        'title',
        'description',
        'status_id'
    ];

    public function status()
    {
        //один ко многим обратное отношение
        return $this->belongsTo(Status::class);

    }

    public function users()
    {
        return $this->belongsTo(User::class); //один ко многим обратное отношение
    }
}
