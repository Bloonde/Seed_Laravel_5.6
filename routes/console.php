<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/
Artisan::command('init-database {withSeed}', function ($withSeed = null){
    /**
     * Creamos una base de datos auxiliar a la que conectarnos
     */

    DB::statement('create database if not exists ' . env('DB_DATABASE_AUX'));
    Config::set('database.connections.mysql.database', env('DB_DATABASE_AUX'));
    DB::reconnect('mysql');

    $delete = $this->anticipate('¿Seguro que quieres borrar la base de datos "' . env('DB_DATABASE') . '"? Si/No', ['Si', 'No']);
    if($delete == 'Si' || $delete == 'SI' || $delete == 'si'){
        $this->info('Borrando base de datos "' . env('DB_DATABASE') . '"');
        DB::statement('drop database IF EXISTS ' . env('DB_DATABASE') . '');

        $this->info('Creando base de datos "' . env('DB_DATABASE') . '"');
        DB::statement('create database ' . env('DB_DATABASE') . '');

        $this->info('Migrando base de datos "' . env('DB_DATABASE') . '"');
        Config::set('database.connections.mysql.database', env('DB_DATABASE'));
        DB::reconnect('mysql');

        $this->call('migrate', ['--path' => '/vendor/ebarriosbloonde/usersandprivileges/database/migrations']);
        $this->info('Migradas tablas del paquete de usuarios y privilegios');

        $this->call('migrate');
        $this->info('Migradas tablas del core');

        if($withSeed) {
            $this->call('db:seed', ['--class' => 'DatabaseSeeder']);
            $this->call('db:seed', ['--class' => 'EBarriosBloonde\CitiesStatesAndNationalities\Database\Seeds\CitiesStatesAndNationalitiesDatabaseSeeder']);
        }
    }
});

