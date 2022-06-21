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
        
        
        $this->seed(KelasCRUDDataTypeAdded::class);
        $this->seed(KelasCRUDDataRowAdded::class);
        $this->seed(MetalDetectorCRUDDataTypeAdded::class);
        $this->seed(MetalDetectorCRUDDataRowAdded::class);
        $this->seed(SupplierCRUDDataTypeAdded::class);
        $this->seed(SupplierCRUDDataRowAdded::class);
        $this->seed(MonitoringMetalDetectorCRUDDataTypeAdded::class);
        $this->seed(MonitoringMetalDetectorCRUDDataRowAdded::class);
        $this->seed(PencucianCRUDDataTypeAdded::class);
        $this->seed(PencucianCRUDDataRowAdded::class);
        $this->seed(ProsesCRUDDataTypeAdded::class);
        $this->seed(ProsesCRUDDataRowAdded::class);
        $this->seed(PenerimaanDalamCRUDDataTypeAdded::class);
        $this->seed(PenerimaanDalamCRUDDataRowAdded::class);
        $this->seed(PenerimaanLuarCRUDDataTypeAdded::class);
        $this->seed(PenerimaanLuarCRUDDataRowAdded::class);
        $this->seed(PencatatanSuhuUdangCRUDDataTypeAdded::class);
        $this->seed(PencatatanSuhuUdangCRUDDataRowAdded::class);
        $this->seed(ShippingDalamCRUDDataTypeAdded::class);
        $this->seed(ShippingDalamCRUDDataRowAdded::class);
        $this->seed(StuffingCRUDDataTypeAdded::class);
        $this->seed(StuffingCRUDDataRowAdded::class);
        $this->seed(FreezingMonitoringCRUDDataTypeAdded::class);
        $this->seed(FreezingMonitoringCRUDDataRowAdded::class);
        $this->seed(ColdStorageTemperatureCRUDDataTypeAdded::class);
        $this->seed(ColdStorageTemperatureCRUDDataRowAdded::class);
        
        
        $this->seed(FotoInspeksiUdangCRUDDataTypeAdded::class);
        $this->seed(FotoInspeksiUdangCRUDDataRowAdded::class);
        $this->seed(HasilInspeksiProdukSeaTigerCRUDDataDeleted::class);
        $this->seed(HasilInspeksiProdukSeaTigerCRUDDataTypeAdded::class);
        $this->seed(HasilInspeksiProdukSeaTigerCRUDDataRowAdded::class);
        
        
        $this->seed(FreezingUnitCRUDDataDeleted::class);
        $this->seed(FreezingUnitCRUDDataTypeAdded::class);
        $this->seed(FreezingUnitCRUDDataRowAdded::class);
        $this->seed(FreezingMonitoringRecordCRUDDataDeleted::class);
        $this->seed(FreezingMonitoringRecordCRUDDataTypeAdded::class);
        $this->seed(FreezingMonitoringRecordCRUDDataRowAdded::class);
        $this->seed(TestMetalDetectorCRUDDataTypeAdded::class);
        $this->seed(TestMetalDetectorCRUDDataRowAdded::class);
        $this->seed(ColdStorageTemperatureLogCRUDDataTypeAdded::class);
        $this->seed(ColdStorageTemperatureLogCRUDDataRowAdded::class);
        $this->seed(TemperatureSuhuUdangCRUDDataTypeAdded::class);
        $this->seed(TemperatureSuhuUdangCRUDDataRowAdded::class);
        $this->seed(PencatatanSuhuAirCRUDDataTypeAdded::class);
        $this->seed(PencatatanSuhuAirCRUDDataRowAdded::class);
    }
}
