<?php

use Illuminate\Support\Fluent;
use Illuminate\Support\Facades\Schema;
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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('user_profile')->default("php5676_e3jf2x");
            $table->string('password');
            $table->integer('permissions');
            $table->integer('personalunit')->default(0);
            $table->integer('personalbuilding')->default(0);
            $table->integer('personalproperty')->default(0);
            $table->string('interests')->default("No current interests");
            $table->string('interests1')->default(" ");
            $table->string('interests2')->default(" ");
            $table->string('interests3')->default(" ");
            $table->string('interests4')->default(" ");
            $table->string('interests5')->default(" ");
            $table->string('shoppingcart')->default("Shopping cart is empty");
            $table->rememberToken();
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
