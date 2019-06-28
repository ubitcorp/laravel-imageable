<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOrderColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {       
        Schema::table(config('imageable.model'), function (Blueprint $table) {
            $table->integer('order')->after("size")->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(config('imageable.model'), function (Blueprint $table) {
            $table->dropColumn('order');   
        });               
    }
}
