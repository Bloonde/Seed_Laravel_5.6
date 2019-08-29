<?php

use Illuminate\Database\Seeder;
use EBarriosBloonde\UsersAndPrivileges\User;
use EBarriosBloonde\UsersAndPrivileges\Profile;

class UserTableSeeder extends Seeder {
    public function run() {

        $admin = User::create(array(
                    'name' => 'Super Admin',
                    'email' => 'superadmin@email.com',
                    'activated' => 1,
                    'password' => bcrypt('123456789'),
        ));


        Profile::find(\App\Helpers\ProfileHelper::SUPERADMIN_PROFILE)->users()->attach($admin->id);
    }

}
