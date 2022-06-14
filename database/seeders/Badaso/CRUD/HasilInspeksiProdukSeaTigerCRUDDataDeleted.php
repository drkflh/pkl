<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;

class HasilInspeksiProdukSeaTigerCRUDDataDeleted extends Seeder
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
			$data_type = Badaso::model('DataType')->where('name', 'hasil_inspeksi_produk_sea_tiger')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'hasil_inspeksi_produk_sea_tiger')->delete();
            }

			Badaso::model('Permission')->removeFrom('hasil_inspeksi_produk_sea_tiger');

			$menuItem = Badaso::model('MenuItem')::where('url', '/general/hasil-inspeksi-produk-sea-tiger');

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
