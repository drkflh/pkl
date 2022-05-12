<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColdstoragetemperatureTableHcsz extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('cold_storage_temperature', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->dateTime('tanggal_jam');
			$table->integer('temperature');
			$table->string('action', 255);
			$table->string('id_pegawai', 255);
			$table->timestamps();
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
        Schema::dropIfExists('cold_storage_temperature');
    }
}
