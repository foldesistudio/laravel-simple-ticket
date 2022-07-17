<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PerformersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('performers')->delete();
        
        \DB::table('performers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Performer #1',
                'body' => NULL,
                'image' => NULL,
                'created_at' => '2022-07-16 12:37:02',
                'updated_at' => '2022-07-16 12:37:02',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Performer #2',
                'body' => NULL,
                'image' => NULL,
                'created_at' => '2022-07-16 12:37:11',
                'updated_at' => '2022-07-16 12:37:11',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}