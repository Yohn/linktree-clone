<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('background_color')->default('#ffffff');
            $table->string('profile_pic');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('pronouns');
            $table->string('about_notes');
            $table->rememberToken();
            $table->timestamps();
        }); // # id, email, username, password, background_color, text_color,
				// remember_token, created_at, updated_at, profile_pic, first_name, last_name,pronouns, about_notes
				//'2', 'john.skem9@gmail.com', 'Yohn1', '$2y$10$n4qW1dF7qIgkMxrxTOBi2.mKWkL/0awsdWGxG6D3WvUFMdwHaTZD6', '#ffffff', '#000000', 'null', '2022-10-02 04:03:52', '2022-10-02 04:07:15', '1664683635.JPG', 'null', 'null', 'null', 'null'

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
