<?php

namespace Database\Seeders;

use App\Models\Roomservicerequest;
use Illuminate\Database\Seeder;

class RoomserviceRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Roomservicerequest::firstOrCreate(
            ['room_id'=>'1',
            'room_service_id'=>'1',
            'reservation_id'=>'1',
            'notes'=>'no notes',
            'employee_id'=>'1',
            ]
        );
    }
}
