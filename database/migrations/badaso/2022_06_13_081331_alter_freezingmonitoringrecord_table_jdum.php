<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterFreezingmonitoringrecordTableJdum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::table('freezing_monitoring_record', function (Blueprint $table) {
            $table->integer('no_freezing_unit')->charset('')->collation('')->change();
			$table->integer('amount_of_product')->charset('')->collation('')->change();
			$table->integer('freezing_time')->charset('')->collation('')->change();
			$table->integer('product_condition')->charset('')->collation('')->change();
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
        Schema::table('freezing_monitoring_record', function (Blueprint $table) {
            $table->integer('no_freezing_unit')->charset('')->collation('')->change();
			$table->integer('amount_of_product')->charset('')->collation('')->change();
			$table->integer('freezing_time')->charset('')->collation('')->change();
			$table->integer('product_condition')->charset('')->collation('')->change();
        });
    }
}
