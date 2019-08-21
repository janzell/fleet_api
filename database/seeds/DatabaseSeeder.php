<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Driver;
use App\Models\Taxi;
use App\Models\Part;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->truncate();
        Taxi::query()->truncate();
        Driver::query()->truncate();

        factory(User::class, 100)->create();
        factory(Driver::class, 100)->create();
        factory(Taxi::class, 100)->create();
        factory(Part::class, 100)->create();
    }
}
