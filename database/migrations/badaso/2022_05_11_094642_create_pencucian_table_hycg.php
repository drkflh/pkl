<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePencucianTableHycg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('pencucian', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->integer('pencucian_ke');
			$table->dateTime('tanggal_jam');
			$table->integer('suhu');
			$table->string('acon', 255);
			$table->string('id_pegawai', 255);
			$table->string('catatan', 255);
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
        Schema::dropIfExists('pencucian');
    }
}
