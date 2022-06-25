<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterPencatatansuhuairTableWjts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::table('pencatatan_suhu_air', function (Blueprint $table) {
            $table->dropColumn('suhu1');
			$table->dropColumn('suhu2');
			$table->dropColumn('suhu3');
			$table->dropColumn('suhu4');
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
        Schema::table('pencatatan_suhu_air', function (Blueprint $table) {
            $table->string('suhu1', 255);
			$table->string('suhu2', 255);
			$table->string('suhu3', 255);
			$table->string('suhu4', 255);
        });


    }
}
