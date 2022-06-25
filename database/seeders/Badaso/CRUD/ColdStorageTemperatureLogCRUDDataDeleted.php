<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;

class ColdStorageTemperatureLogCRUDDataDeleted extends Seeder
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
			$data_type = Badaso::model('DataType')->where('name', 'cold_storage_temperature_log')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'cold_storage_temperature_log')->delete();
            }

			Badaso::model('Permission')->removeFrom('cold_storage_temperature_log');

			$menuItem = Badaso::model('MenuItem')::where('url', '/general/cold-storage-temperature-log');

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
