<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;
use Uasoft\Badaso\Models\MenuItem;

class HasilInspeksiProdukSeaTigerCRUDDataTypeAdded extends Seeder
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

            \DB::table('badaso_data_types')->insert(array (
                'name' => 'hasil_inspeksi_produk_sea_tiger',
                'slug' => 'hasil-inspeksi-produk-sea-tiger',
                'display_name_singular' => 'Hasil Inspeksi Produk Sea Tiger',
                'display_name_plural' => 'Hasil Inspeksi Produk Sea Tiger',
                'icon' => NULL,
                'model_name' => NULL,
                'policy_name' => NULL,
                'controller' => NULL,
                'order_column' => NULL,
                'order_display_column' => NULL,
                'order_direction' => NULL,
                'generate_permissions' => true,
                'server_side' => false,
                'description' => NULL,
                'details' => NULL,
                'notification' => '[]',
                'is_soft_delete' => false,
                'updated_at' => '2022-05-11T14:44:53.000000Z',
                'created_at' => '2022-05-11T14:44:53.000000Z',
                'id' => 22,
            ));

            Badaso::model('Permission')->generateFor('hasil_inspeksi_produk_sea_tiger');

            $menu = Badaso::model('Menu')->where('key', config('badaso.default_menu'))->firstOrFail();

            $menu_item = Badaso::model('MenuItem')
                ->where('menu_id', $menu->id)
                ->where('url', '/general/hasil-inspeksi-produk-sea-tiger')
                ->first();

            $order = Badaso::model('MenuItem')->highestOrderMenuItem($menu->id);

            if (!is_null($menu_item)) {
                $menu_item->fill([
                    'title' => 'Hasil Inspeksi Produk Sea Tiger',
                    'target' => '_self',
                    'icon_class' => '',
                    'color' => null,
                    'parent_id' => null,
                    'permissions' => 'browse_hasil_inspeksi_produk_sea_tiger',
                    'order' => $order,
                ])->save();
            } else {
                $menu_item = new MenuItem();
                $menu_item->menu_id = $menu->id;
                $menu_item->url = '/general/hasil-inspeksi-produk-sea-tiger';
                $menu_item->title = 'Hasil Inspeksi Produk Sea Tiger';
                $menu_item->target = '_self';
                $menu_item->icon_class = '';
                $menu_item->color = null;
                $menu_item->parent_id = null;
                $menu_item->permissions = 'browse_hasil_inspeksi_produk_sea_tiger';
                $menu_item->order = $order;
                $menu_item->save();
            }

            \DB::commit();
        } catch(Exception $e) {
            \DB::rollBack();

           throw new Exception('Exception occur ' . $e);
        }
    }
}
