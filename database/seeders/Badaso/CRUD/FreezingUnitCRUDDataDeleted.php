<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;

class FreezingUnitCRUDDataDeleted extends Seeder
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
			$data_type = Badaso::model('DataType')->where('name', 'freezing_unit')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'freezing_unit')->delete();
            }

			Badaso::model('Permission')->removeFrom('freezing_unit');

			$menuItem = Badaso::model('MenuItem')::where('url', '/general/freezing-unit');

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
