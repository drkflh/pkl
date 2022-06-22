<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterPencatatansuhuudangTableTnly extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::table('pencatatan_suhu_udang', function (Blueprint $table) {
            $table->time('tanggal_jam')->charset('')->collation('')->change();
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
        Schema::table('pencatatan_suhu_udang', function (Blueprint $table) {
            $table->dateTime('tanggal_jam')->charset('')->collation('')->change();
        });
    }
}
