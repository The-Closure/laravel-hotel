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
        Roomservice::firstOrCreate([
            'name'=>['en' => 'room cleaning' , 'ar' => 'تنضيف غرف'],
            'description'=>['en' => 'cleaning room','ar' => 'تنضيق غرف'],
            'price'=>500,
            'status'=>'available'
        ]);

    }
}
