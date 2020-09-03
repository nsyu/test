<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('user_id', 20)->nullable(false);
            $table->string('password', 20)->nullable(false);
            $table->string('name', 50)->nullable(false);
            $table->string('address', 100)->nullable(false);
            $table->string('compony', 100);
            $table->string('email', 100);
            $table->date('birth_day');
            $table->string('phone_number')->nullable(false);
            $table->string('home_Number');
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
        Schema::dropIfExists('user');
    }
}
