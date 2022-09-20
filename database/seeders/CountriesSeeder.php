<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create([
            'country_name' => 'Saudi Arabia',
            'country_code' => 'KSA'
        ]);
        Country::create([
            'country_name' => 'Sudan',
            'country_code' => 'SUD'
        ]);
        Country::create([
            'country_name' => 'Eqypt',
            'country_code' => 'EGP'
        ]);
        Country::create([
            'country_name' => 'United State',
            'country_code' => 'US'
        ]);
    }
}
