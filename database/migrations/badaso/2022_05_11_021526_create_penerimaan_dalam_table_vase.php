<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenerimaandalamTableVase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('penerimaan_dalam', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->date('tanggal');
			$table->string('id_kelas', 255);
			$table->string('id_produk', 255);
			$table->integer('kwantitas');
			$table->integer('size');
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
        Schema::dropIfExists('penerimaan_dalam');
    }
}
