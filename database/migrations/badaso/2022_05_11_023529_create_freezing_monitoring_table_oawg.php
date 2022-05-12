<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFreezingmonitoringTableOawg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('freezing_monitoring', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->date('tanggal');
			$table->string('id_freezing_unit', 255);
			$table->time('start_time');
			$table->integer('freezing_temperature');
			$table->string('id_proses', 255);
			$table->integer('product_condition_temperature');
			$table->string('status', 255);
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
        Schema::dropIfExists('freezing_monitoring');
    }
}
