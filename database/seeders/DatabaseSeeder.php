<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            [
                'name'=> 'admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('admin'),
                'level'=>'admin',
            ],
            [
                'name'=> 'yudi',
                'email'=>'yudi@gmail.com',
                'password'=>Hash::make('yudi'),
                'level'=>'kitchen',
            ],
            [
                'name'=> 'darma',
                'email'=>'darma@gmail.com',
                'password'=>Hash::make('darma'),
                'level'=>'waiter',
            ],
        ]);

        DB::table('menus')->insert([
            [
                'KodeMenu'=> 'M0001',
                'NamaMenu'=>'Wagyu Steak A5',
                'JenisMenu'=>('Makanan'),
                'Harga'=>2000000,
            ],
            
        ]);
    }
}
