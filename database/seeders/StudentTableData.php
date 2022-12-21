<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Spatie\LaravelIgnition\Support\Composer\FakeComposer;

class StudentTableData extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            DB::table('product')->insert([
                'name' => $faker->name,
                'product_no' => rand(1, 10),

            ]);
        }
    }
}
