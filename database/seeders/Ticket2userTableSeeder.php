<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Ticket2userTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ticket2user')->delete();
        
        \DB::table('ticket2user')->insert(array (
            0 => 
            array (
                'id' => 6,
                'post_id' => 2,
                'user_id' => 1,
            ),
        ));
        
        
    }
}