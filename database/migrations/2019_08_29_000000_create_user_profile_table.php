<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfileTable extends Migration {

    public function up() {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('in')->nullable();
            $table->string('privilege_groups');
        });
    }

    public function down() {
        Schema::dropIfExists('user_profiles');
    }
}
