<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Driver;
use App\Models\Taxi;
use App\Models\Part;
use App\Models\Series;
use App\Models\Company;
use App\Models\YearModel;
use App\Models\BodyNumber;
use App\Models\Cases;


class DatabaseSeeder extends Seeder
{
    /**
     * Reset the data first.
     */
    protected function reset()
    {
        User::query()->truncate();
        Taxi::query()->truncate();
        Driver::query()->truncate();
        Series::query()->truncate();
        Company::query()->truncate();
        YearModel::query()->truncate();
        BodyNumber::query()->truncate();
        Cases::query()->truncate();
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $this->reset();

        factory(Series::class, 100)->create();
        factory(Cases::class, 100)->create();

        $this->generateModelData(BodyNumber::class, 'number', $faker->numerify('###'));
        $this->generateModelData(YearModel::class, 'name', $faker->numerify('###'));

        factory(Company::class, 100)->create();
        factory(User::class, 100)->create();
        factory(Driver::class, 100)->create();

        $this->generateTaxiData();

        factory(Part::class, 100)->create();
    }

    /** Generate taxi data for each body number */
    protected function generateTaxiData()
    {
        BodyNumber::all()->each(function ($number) {
            factory(Taxi::class)->create([
                'body_number' => $number,
                'case_number' => Cases::query()->inRandomOrder()->first()->number
            ]);
        });
    }


    /**
     * @param string $modelClass
     * @param string $key
     * @param string $commonValue
     */
    protected function generateModelData(string $modelClass, string $key, string $commonValue)
    {
        for ($i = 0; $i <= 100; $i++) {
            factory($modelClass)->create([
                "$key" => $commonValue . $i
            ]);
        }
    }
}
