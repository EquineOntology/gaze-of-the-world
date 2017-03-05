<?php

use CFratta\GazeOfTheWorld\Countries;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_data', function (Blueprint $table) {
            $table->increments('recordId');
            $table->date('date')->unique();
            foreach (Countries::$countries as $code => $info) {
                $table->integer($code)->default(0);
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
        Schema::dropIfExists('news_data');
    }
}
