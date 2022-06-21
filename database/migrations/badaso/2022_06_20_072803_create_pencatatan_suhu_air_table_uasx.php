<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePencatatansuhuairTableUasx extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('pencatatan_suhu_air', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->date('tanggal');
			$table->dateTime('hari');
			$table->string('delapan', 255);
			$table->string('suhu1', 255);
			$table->string('sepuluh', 255);
			$table->string('suhu2', 255);
			$table->string('duabelas', 255);
			$table->string('suhu3', 255);
			$table->string('empatbelas', 255);
			$table->string('suhu4', 255);
			$table->string('acon', 255);
			$table->string('nama_pegawai', 255);
			$table->string('paraf', 255);
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
        Schema::dropIfExists('pencatatan_suhu_air');
    }
}
