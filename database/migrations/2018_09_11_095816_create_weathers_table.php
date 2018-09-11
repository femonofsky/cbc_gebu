<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeathersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weathers', function (Blueprint $table) {
            $table->increments('id');
            $table->string("description");
            $table->string("temperature");
            $table->string("pressure");
            $table->string("humidity");
            $table->string("temp_min");
            $table->string("temp_max");
            $table->string("sea_level");
            $table->string("grnd_level");
            $table->string("wind_speed");
            $table->string("wind_deg");
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
        Schema::dropIfExists('weathers');
    }
}
