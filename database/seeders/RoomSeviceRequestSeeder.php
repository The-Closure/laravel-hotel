<?php

namespace Database\Seeders;

use App\Models\RoomService;
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
        RoomService::create(['name' => 'Taxi', 'price' => 10, 'status' => 'available', 'description' => 'order a taxi right now']);
        RoomSeviceRequest::firstOrCreate([
            'room_service_id' => 1,
            'room_id'         => 1,
            'reservation_id'  => 1,
            'employee_id'     => 1,
            'notes'           => 'no notes',
            'done_at'         => NULL,
            'canceled_at'     => NULL
        ]);
    }
}
