<?php

namespace Database\Seeders\Badaso\CRUD;

use Illuminate\Database\Seeder;
use Uasoft\Badaso\Facades\Badaso;
use Uasoft\Badaso\Models\MenuItem;

class PencatatanSuhuUdangCRUDDataTypeAdded extends Seeder
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

            $data_type = Badaso::model('DataType')->where('name', 'pencatatan_suhu_udang')->first();

            if ($data_type) {
                Badaso::model('DataType')->where('name', 'pencatatan_suhu_udang')->delete();
            }

            \DB::table('badaso_data_types')->insert(array (
                'name' => 'pencatatan_suhu_udang',
                'slug' => 'pencatatan-suhu-udang',
                'display_name_singular' => 'Pencatatan Suhu Udang',
                'display_name_plural' => 'Pencatatan Suhu Udang',
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
                'updated_at' => '2022-05-11T14:26:05.000000Z',
                'created_at' => '2022-05-11T14:26:05.000000Z',
                'id' => 17,
            ));

            Badaso::model('Permission')->generateFor('pencatatan_suhu_udang');

            $menu = Badaso::model('Menu')->where('key', config('badaso.default_menu'))->firstOrFail();

            $menu_item = Badaso::model('MenuItem')
                ->where('menu_id', $menu->id)
                ->where('url', '/general/pencatatan-suhu-udang')
                ->first();

            $order = Badaso::model('MenuItem')->highestOrderMenuItem($menu->id);

            if (!is_null($menu_item)) {
                $menu_item->fill([
                    'title' => 'Pencatatan Suhu Udang',
                    'target' => '_self',
                    'icon_class' => '',
                    'color' => null,
                    'parent_id' => null,
                    'permissions' => 'browse_pencatatan_suhu_udang',
                    'order' => $order,
                ])->save();
            } else {
                $menu_item = new MenuItem();
                $menu_item->menu_id = $menu->id;
                $menu_item->url = '/general/pencatatan-suhu-udang';
                $menu_item->title = 'Pencatatan Suhu Udang';
                $menu_item->target = '_self';
                $menu_item->icon_class = '';
                $menu_item->color = null;
                $menu_item->parent_id = null;
                $menu_item->permissions = 'browse_pencatatan_suhu_udang';
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
