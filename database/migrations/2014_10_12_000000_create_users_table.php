<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
<<<<<<< HEAD
            $table->increments('userid')->comment('用户自增主键');
            $table->string('username')->comment('用户名');
            $table->string('phonenumber',16)->unique()->comment('用户手机');
            $table->string('password', 60)->comment('用户密码');
            $table->string('logintoken', 256)->comment('登录token');
            $table->string('email', 64)->comment('用户邮箱');
            $table->string('truename', 64)->comment('用户真实姓名');
            $table->string('idcard', 32)->comment('用户身份证');
=======
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();
>>>>>>> 41aa23a07d02027e49ea70a65c2d9a47bbb0f18d
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
