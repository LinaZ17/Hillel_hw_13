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
        return $this->belongsTo(Status::class); //один ко многим обратное отношение

    }

    public function users()
    {
        return $this->belongsTo(User::class); //один ко многим обратное отношение
    }
}
