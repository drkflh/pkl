<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterColdstoragetemperaturelogTableTcfg extends Migration
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
            $table->string('temperatur_reading_delapan', 255);
			$table->string('temperatur_reading_sepuluh', 255);
			$table->string('temperatur_reading_duabelas', 255);
			$table->string('temperatur_reading_empatbelas', 255);
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
            $table->dropColumn('temperatur_reading_delapan');
			$table->dropColumn('temperatur_reading_sepuluh');
			$table->dropColumn('temperatur_reading_duabelas');
			$table->dropColumn('temperatur_reading_empatbelas');
        });


    }
}
