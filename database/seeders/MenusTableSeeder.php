<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'created_at' => '2022-07-16 09:35:26',
                'updated_at' => '2022-07-16 09:35:26',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'main',
                'created_at' => '2022-07-16 11:14:42',
                'updated_at' => '2022-07-16 11:14:42',
            ),
        ));
        
        
    }
}