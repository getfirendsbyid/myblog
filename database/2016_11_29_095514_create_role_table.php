<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('label')->nullable();
            $table->timestamps();

        });

        Schema::create('permissions', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->string('label')->nullable();
            $table->timestamps();

        });

        Schema::create('permissions_role', function (Blueprint $table) {

            $table->unsignedInteger('permissions_id');
            $table->unsignedInteger('role_id');
            $table->foreign('permissions_id')->references('id')->on('permissions')->ondelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->ondelete('cascade');

//            $table->primary(['permission_id','role_id']);  //添加主键
        });   //添加主键

        Schema::create('roles_user', function (Blueprint $table) {

            $table->unsignedInteger('user_id');

            $table->unsignedInteger('roles_id');
            $table->foreign('user_id')->references('id')->on('users')->ondelete('cascade');

            $table->foreign('roles_id')->references('id')->on('roles')->ondelete('cascade');
//            $table->primary(['user_id','role_id']);  //添加主键

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_user');
    }
}
