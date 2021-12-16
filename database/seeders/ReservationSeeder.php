<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Role::whereName('customer')->first()->users->first();
        $user->reservations()->create(
            [
                'room_id'       => 3,
                'paid'          => 0,
                'started_at'    => now(),
                'ended_at'      => now()->addDays(20),
                'price'         => 100,
            ]
        );
    }
}
