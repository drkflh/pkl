<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Traits\Seedable;

class BadasoDeploymentOrchestratorSeeder extends Seeder
{
    use Seedable;

    protected $seedersPath = 'database/seeders/Badaso/CRUD/';

    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $this->seed(PegawaiCRUDDataTypeAdded::class);
        $this->seed(PegawaiCRUDDataRowAdded::class);
        $this->seed(UdangCRUDDataTypeAdded::class);
        $this->seed(UdangCRUDDataRowAdded::class);
        $this->seed(RakCRUDDataTypeAdded::class);
        $this->seed(RakCRUDDataRowAdded::class);
        $this->seed(ProdukCRUDDataTypeAdded::class);
        $this->seed(ProdukCRUDDataRowAdded::class);
        $this->seed(StorageCRUDDataTypeAdded::class);
        $this->seed(StorageCRUDDataRowAdded::class);
    }
}
