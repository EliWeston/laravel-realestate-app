<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ListingSeeder::class,
        ]);
    }
}
