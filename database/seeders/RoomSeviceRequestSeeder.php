<?php

namespace Database\Seeders;

use App\Models\RoomSeviceRequest;
use Illuminate\Database\Seeder;

class RoomSeviceRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        RoomSeviceRequest::firstOrCreate([
            'room_service_id' => 1,
            'room_id'         => 1,
            'reservation_id'  => 1,
            'notes'           =>'no notes',
            'employee_id'     => 1,
            'done_at'         =>NULL,
            'canceled_at'      =>NULL
        ]);
    }
}
