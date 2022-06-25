<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterColdstoragetemperaturelogTableRhcm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::table('cold_storage_temperature_log', function (Blueprint $table) {
            $table->string('temperatur_reading_enambelas', 255);
			$table->string('temperatur_reading_delapanbelas', 255);
			$table->string('temperatur_reading_duapuluh', 255);
			$table->string('temperatur_reading_duadua', 255);
        });



        } catch (PDOException $ex) {
            $this->down();
            throw $ex;
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cold_storage_temperature_log', function (Blueprint $table) {
            $table->dropColumn('temperatur_reading_enambelas');
			$table->dropColumn('temperatur_reading_delapanbelas');
			$table->dropColumn('temperatur_reading_duapuluh');
			$table->dropColumn('temperatur_reading_duadua');
        });


    }
}
