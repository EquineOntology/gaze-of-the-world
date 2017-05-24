<?php

use CFratta\GazeOfTheWorld\Countries;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsDeltaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_delta', function (Blueprint $table) {
	        $table->increments('deltaId');
	        $table->date('date')->unique();
	        foreach (Countries::$countries as $code => $info)
	        {
		        $table->double($code)->default(0);
	        }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_delta');
    }
}
