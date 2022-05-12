<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenerimaanluarTableHrup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('penerimaan_luar', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->date('tanggal');
			$table->string('id_supplier', 255);
			$table->string('id_udang', 255);
			$table->integer('berat');
			$table->integer('total');
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
        Schema::dropIfExists('penerimaan_luar');
    }
}
