<?php

namespace Database\Seeders;

use App\Models\Roomservice;
use Illuminate\Database\Seeder;


class RoomserviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Roomservice::firstOrCreate(['name'=>'room cleaning',
        'description'=>'clean room',
        'price'=>500,
        'status'=>'available']
    );

    }
}
