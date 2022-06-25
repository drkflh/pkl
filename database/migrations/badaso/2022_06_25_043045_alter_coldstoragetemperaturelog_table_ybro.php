<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterColdstoragetemperaturelogTableYbro extends Migration
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
            $table->string('temperatur_reading_empat', 255);
			$table->string('temperatur_reading_enam', 255);
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
            $table->dropColumn('temperatur_reading_empat');
			$table->dropColumn('temperatur_reading_enam');
        });


    }
}
