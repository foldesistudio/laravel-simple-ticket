<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('locations')->delete();
        
        \DB::table('locations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Loc #1',
                'created_at' => '2022-07-16 12:36:35',
                'updated_at' => '2022-07-16 12:36:35',
                'deleted_at' => NULL,
                'image' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Loc #2',
                'created_at' => '2022-07-16 12:36:44',
                'updated_at' => '2022-07-16 12:36:44',
                'deleted_at' => NULL,
                'image' => NULL,
            ),
        ));
        
        
    }
}