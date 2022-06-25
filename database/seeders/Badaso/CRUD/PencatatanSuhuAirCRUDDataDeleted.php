<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;

class PencatatanSuhuAirCRUDDataDeleted extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     *
     * @throws Exception
     */
    public function run()
    {
      	\DB::beginTransaction();
       	try {
			$data_type = Badaso::model('DataType')->where('name', 'pencatatan_suhu_air')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'pencatatan_suhu_air')->delete();
            }

			Badaso::model('Permission')->removeFrom('pencatatan_suhu_air');

			$menuItem = Badaso::model('MenuItem')::where('url', '/general/pencatatan-suhu-air');

            if ($menuItem->exists()) {
                $menuItem->delete();
            }

			\DB::commit();
       	} catch(Exception $e) {
        	\DB::rollBack();

        	throw new Exception('Exception occur ' . $e);
       	}
    }
}
