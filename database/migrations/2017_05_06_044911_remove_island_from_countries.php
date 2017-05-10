<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveIslandFromCountries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::table('news_data', function (Blueprint $table)
	    {
		    // Anguilla
		    $table->dropColumn('AI');
		    // Bermuda
		    $table->dropColumn('BM');
	    	// Bouvet Island
		    $table->dropColumn('BV');
		    // Christmas Island
		    $table->dropColumn('CX');
		    // Cocos Island
		    $table->dropColumn('CC');
		    // Falkland Islands
		    $table->dropColumn('FK');
		    // South Georgia and The South Sandwich Islands
		    $table->dropColumn('GS');
		    // Cayman Islands
		    $table->dropColumn('KY');
		    // Gibraltar
		    $table->dropColumn('GI');
		    // Montserrat
		    $table->dropColumn('MS');
		    // Pitcairn Islands
		    $table->dropColumn('PN');
		    // Saint Helena
		    $table->dropColumn('SH');
		    // Turks and Caicos Islands
		    $table->dropColumn('TC');
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
