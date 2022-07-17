<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2022-07-16 09:35:26',
                'updated_at' => '2022-07-16 09:35:26',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2022-07-16 09:35:26',
                'updated_at' => '2022-07-16 09:35:26',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2022-07-16 09:35:26',
                'updated_at' => '2022-07-16 09:35:26',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2022-07-16 09:35:26',
                'updated_at' => '2022-07-16 09:35:26',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2022-07-16 09:35:26',
                'updated_at' => '2022-07-16 09:35:26',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2022-07-16 09:35:26',
                'updated_at' => '2022-07-16 09:35:26',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2022-07-16 09:35:26',
                'updated_at' => '2022-07-16 09:35:26',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2022-07-16 09:35:26',
                'updated_at' => '2022-07-16 09:35:26',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2022-07-16 09:35:26',
                'updated_at' => '2022-07-16 09:35:26',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2022-07-16 09:35:26',
                'updated_at' => '2022-07-16 09:35:26',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2022-07-16 09:35:26',
                'updated_at' => '2022-07-16 09:35:26',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2022-07-16 09:35:26',
                'updated_at' => '2022-07-16 09:35:26',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2022-07-16 09:35:26',
                'updated_at' => '2022-07-16 09:35:26',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2022-07-16 09:35:26',
                'updated_at' => '2022-07-16 09:35:26',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2022-07-16 09:35:26',
                'updated_at' => '2022-07-16 09:35:26',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2022-07-16 09:35:26',
                'updated_at' => '2022-07-16 09:35:26',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2022-07-16 09:35:26',
                'updated_at' => '2022-07-16 09:35:26',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2022-07-16 09:35:26',
                'updated_at' => '2022-07-16 09:35:26',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2022-07-16 09:35:26',
                'updated_at' => '2022-07-16 09:35:26',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2022-07-16 09:35:26',
                'updated_at' => '2022-07-16 09:35:26',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2022-07-16 09:35:26',
                'updated_at' => '2022-07-16 09:35:26',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2022-07-16 09:35:26',
                'updated_at' => '2022-07-16 09:35:26',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2022-07-16 09:35:26',
                'updated_at' => '2022-07-16 09:35:26',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2022-07-16 09:35:26',
                'updated_at' => '2022-07-16 09:35:26',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2022-07-16 09:35:26',
                'updated_at' => '2022-07-16 09:35:26',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2022-07-16 09:35:27',
                'updated_at' => '2022-07-16 09:35:27',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2022-07-16 09:35:27',
                'updated_at' => '2022-07-16 09:35:27',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2022-07-16 09:35:27',
                'updated_at' => '2022-07-16 09:35:27',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2022-07-16 09:35:27',
                'updated_at' => '2022-07-16 09:35:27',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2022-07-16 09:35:27',
                'updated_at' => '2022-07-16 09:35:27',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2022-07-16 09:35:27',
                'updated_at' => '2022-07-16 09:35:27',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2022-07-16 09:35:27',
                'updated_at' => '2022-07-16 09:35:27',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2022-07-16 09:35:27',
                'updated_at' => '2022-07-16 09:35:27',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2022-07-16 09:35:27',
                'updated_at' => '2022-07-16 09:35:27',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2022-07-16 09:35:27',
                'updated_at' => '2022-07-16 09:35:27',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2022-07-16 09:35:27',
                'updated_at' => '2022-07-16 09:35:27',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2022-07-16 09:35:27',
                'updated_at' => '2022-07-16 09:35:27',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2022-07-16 09:35:27',
                'updated_at' => '2022-07-16 09:35:27',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2022-07-16 09:35:27',
                'updated_at' => '2022-07-16 09:35:27',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2022-07-16 09:35:27',
                'updated_at' => '2022-07-16 09:35:27',
            ),
            40 => 
            array (
                'id' => 51,
                'key' => 'browse_locations',
                'table_name' => 'locations',
                'created_at' => '2022-07-16 12:23:45',
                'updated_at' => '2022-07-16 12:23:45',
            ),
            41 => 
            array (
                'id' => 52,
                'key' => 'read_locations',
                'table_name' => 'locations',
                'created_at' => '2022-07-16 12:23:45',
                'updated_at' => '2022-07-16 12:23:45',
            ),
            42 => 
            array (
                'id' => 53,
                'key' => 'edit_locations',
                'table_name' => 'locations',
                'created_at' => '2022-07-16 12:23:45',
                'updated_at' => '2022-07-16 12:23:45',
            ),
            43 => 
            array (
                'id' => 54,
                'key' => 'add_locations',
                'table_name' => 'locations',
                'created_at' => '2022-07-16 12:23:45',
                'updated_at' => '2022-07-16 12:23:45',
            ),
            44 => 
            array (
                'id' => 55,
                'key' => 'delete_locations',
                'table_name' => 'locations',
                'created_at' => '2022-07-16 12:23:45',
                'updated_at' => '2022-07-16 12:23:45',
            ),
            45 => 
            array (
                'id' => 56,
                'key' => 'browse_performers',
                'table_name' => 'performers',
                'created_at' => '2022-07-16 12:25:08',
                'updated_at' => '2022-07-16 12:25:08',
            ),
            46 => 
            array (
                'id' => 57,
                'key' => 'read_performers',
                'table_name' => 'performers',
                'created_at' => '2022-07-16 12:25:08',
                'updated_at' => '2022-07-16 12:25:08',
            ),
            47 => 
            array (
                'id' => 58,
                'key' => 'edit_performers',
                'table_name' => 'performers',
                'created_at' => '2022-07-16 12:25:08',
                'updated_at' => '2022-07-16 12:25:08',
            ),
            48 => 
            array (
                'id' => 59,
                'key' => 'add_performers',
                'table_name' => 'performers',
                'created_at' => '2022-07-16 12:25:08',
                'updated_at' => '2022-07-16 12:25:08',
            ),
            49 => 
            array (
                'id' => 60,
                'key' => 'delete_performers',
                'table_name' => 'performers',
                'created_at' => '2022-07-16 12:25:08',
                'updated_at' => '2022-07-16 12:25:08',
            ),
        ));
        
        
    }
}