<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFreezingmonitoringrecordTableGqho extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('freezing_monitoring_record', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->integer('no_freezing_unit');
			$table->time('start_time');
			$table->integer('amount_of_product');
			$table->time('end_time');
			$table->integer('freezing_time');
			$table->integer('product_condition');
			$table->string('component_action', 255);
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
        Schema::dropIfExists('freezing_monitoring_record');
    }
}
