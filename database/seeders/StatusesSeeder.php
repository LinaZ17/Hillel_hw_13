<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusesSeeder extends Seeder
{
    public function run()
    {
        DB::table('statuses')->insert([
            ['name' => 'В наличии'],
            ['name' => 'Нет в наличии'],
            ['name' => 'В пути']
        ]);
    }
}
