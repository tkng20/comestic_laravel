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
            $table->string('fullname')->default('');;
            $table->string('username');
            $table->string('email')->unique()->nullable();
            $table->string('password')->nullable();
            $table->string('photo')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->enum('role', ['admin', 'user'])->default('user');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->rememberToken()->nullable();
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
        Schema::dropIfExists('users');
    }
}
