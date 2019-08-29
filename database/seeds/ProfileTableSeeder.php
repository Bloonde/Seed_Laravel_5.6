<?php

use Illuminate\Database\Seeder;
use EBarriosBloonde\UsersAndPrivileges\Profile;


class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Profile::create(array(
            'name' => 'superadmin',
        ));
    }
}
