<?php

use App\Review;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BookablesSeeder::class);
        $this->call(BookingsTableSeeder::class);
        $this->call(ReviewTableSeeder::class);
        $this->call(UsersTableSeeder::class);

    }
}
