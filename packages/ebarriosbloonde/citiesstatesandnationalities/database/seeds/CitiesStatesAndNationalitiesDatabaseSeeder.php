<?php

namespace EBarriosBloonde\CitiesStatesAndNationalities\Database\Seeds;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class CitiesStatesAndNationalitiesDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CountryTableSeeder::class);
        DB::unprepared(file_get_contents(__DIR__ . '/../sql/provincias.sql'));
        DB::unprepared(file_get_contents(__DIR__ . '/../sql/municipios.sql'));
    }
}
