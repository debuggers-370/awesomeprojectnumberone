<?php
/**
 * Created by IntelliJ IDEA.
 * User: Owen
 * Date: 11/5/2017
 * Time: 2:15 AM
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBuildingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('property_id');
            $table->string('name')->default("Not entered");
            $table->string('tenant')->default("not entered");
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
        Schema::drop('buildings');
    }
}