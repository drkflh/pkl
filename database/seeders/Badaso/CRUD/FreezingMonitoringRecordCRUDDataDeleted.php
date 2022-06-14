<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;

class FreezingMonitoringRecordCRUDDataDeleted extends Seeder
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
			$data_type = Badaso::model('DataType')->where('name', 'freezing_monitoring_record')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'freezing_monitoring_record')->delete();
            }

			Badaso::model('Permission')->removeFrom('freezing_monitoring_record');

			$menuItem = Badaso::model('MenuItem')::where('url', '/general/freezing-monitoring-record');

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
