<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['slug' => 'hilang', 'name' => 'Hilang'],
            ['slug' => 'nawfal', 'name' => 'Nawfal'],

        ]);
    }
}
