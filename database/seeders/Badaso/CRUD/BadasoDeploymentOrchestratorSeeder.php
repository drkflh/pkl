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
        $this->seed(ColdStorageCRUDDataTypeAdded::class);
        $this->seed(ColdStorageCRUDDataRowAdded::class);
        $this->seed(DenahCRUDDataTypeAdded::class);
        $this->seed(DenahCRUDDataRowAdded::class);
        $this->seed(FreezingUnitCRUDDataTypeAdded::class);
        $this->seed(FreezingUnitCRUDDataRowAdded::class);
        $this->seed(KelasCRUDDataTypeAdded::class);
        $this->seed(KelasCRUDDataRowAdded::class);
        $this->seed(MetalDetectorCRUDDataTypeAdded::class);
        $this->seed(MetalDetectorCRUDDataRowAdded::class);
        $this->seed(SupplierCRUDDataTypeAdded::class);
        $this->seed(SupplierCRUDDataRowAdded::class);
    }
}
