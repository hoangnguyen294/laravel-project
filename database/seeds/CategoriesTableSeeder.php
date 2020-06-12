<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 19,
                'name' => 'Samsung',
                'slug' => 'Samsung',
                'created_at' => '2020-04-27 07:38:09',
                'updated_at' => '2020-04-27 07:38:09',
            ),
            1 => 
            array (
                'id' => 20,
                'name' => 'Oppo',
                'slug' => 'Oppo',
                'created_at' => '2020-04-27 07:38:23',
                'updated_at' => '2020-04-27 07:38:23',
            ),
            2 => 
            array (
                'id' => 21,
                'name' => 'Xiaomi',
                'slug' => 'Xiaomi',
                'created_at' => '2020-04-27 07:38:38',
                'updated_at' => '2020-04-27 07:38:38',
            ),
            3 => 
            array (
                'id' => 22,
                'name' => 'Huawei',
                'slug' => 'Huawei',
                'created_at' => '2020-04-27 07:38:59',
                'updated_at' => '2020-04-27 07:38:59',
            ),
            4 => 
            array (
                'id' => 23,
                'name' => 'nokia',
                'slug' => 'nokia',
                'created_at' => '2020-04-27 09:28:00',
                'updated_at' => '2020-04-27 09:28:00',
            ),
        ));
        
        
    }
}