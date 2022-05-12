<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHasilinspeksiprodukseatigerTableTlpb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('hasil_inspeksi_produk_sea_tiger', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->date('tanggal');
			$table->string('id_penerimaan_dalam', 255);
			$table->integer('total_ekor');
			$table->integer('berat_iris');
			$table->string('ekor', 255);
			$table->string('lbs', 255);
			$table->string('uniformity', 255);
			$table->string('black_spot', 255);
			$table->string('black_tail', 255);
			$table->string('black_ring', 255);
			$table->string('dehidrasi', 255);
			$table->string('discolour', 255);
			$table->string('soft_shell', 255);
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
        Schema::dropIfExists('hasil_inspeksi_produk_sea_tiger');
    }
}
