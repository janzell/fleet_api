<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Driver;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 100)->create();
        factory(Driver::class, 100)->create();
    }
}
