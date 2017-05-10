<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveAdditionalCountries extends Migration
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
		    // American Samoa
		    $table->dropColumn('AS');
		    // Aruba
		    $table->dropColumn('AW');
		    // Åland Islands
		    $table->dropColumn('AX');
			// Faroe Islands
		    $table->dropColumn('FO');
		    // Western Sahara
		    $table->dropColumn('EH');
		    // French Guiana
		    $table->dropColumn('GF');
		    // Guernsey
		    $table->dropColumn('GG');
		    // Greenland
		    $table->dropColumn('GL');
		    // Guadeloupe
		    $table->dropColumn('GP');
		    // Guam
		    $table->dropColumn('GU');
		    // Hong Kong
		    $table->dropColumn('HK');
		    // Heard Island and Mcdonald Islands
		    $table->dropColumn('HM');
		    // Isle of Man
		    $table->dropColumn('IM');
		    // Jersey
		    $table->dropColumn('JE');
		    // Macao
		    $table->dropColumn('MO');
		    // Northern Mariana Islands
		    $table->dropColumn('MP');
		    // Martinique
		    $table->dropColumn('MQ');
		    // New Caledonia
		    $table->dropColumn('NC');
		    // Norfolk Island
		    $table->dropColumn('NF');
		    // French Polynesia
		    $table->dropColumn('PF');
		    // Saint Pierre and Miquelon
		    $table->dropColumn('PM');
		    // Puerto Rico
		    $table->dropColumn('PR');
		    // Reunion
		    $table->dropColumn('RE');
		    // Svalbard and Jan Mayen
		    $table->dropColumn('SJ');
		    // French Southern Territories
		    $table->dropColumn('TF');
		    // Tokelau
		    $table->dropColumn('TK');
		    // United States Minor Outlying Islands
		    $table->dropColumn('UM');
		    // British Virgin Islands
		    $table->dropColumn('VG');
		    // U.S. Virgin Islands
		    $table->dropColumn('VI');
		    // Wallis and Futuna
		    $table->dropColumn('WF');
		    // Mayotte
		    $table->dropColumn('YT');
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
