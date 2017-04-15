<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCountryToWebsites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::table('websites', function (Blueprint $table)
	    {
		    $table->string('country')->nullable()->after('feedUrl');
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::table('websites', function (Blueprint $table)
	    {
		    $table->dropColumn('country');
	    });
    }
}
