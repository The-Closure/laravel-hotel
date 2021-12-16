<?php

namespace Database\Seeders;

use App\Models\Reservation;
use App\Models\RoomSeviceRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoomSeviceRequestSeeder::class,
            PermissionSeeder::class,
            RoomTypeSeeder::class,
            UserSeeder::class,
            SettingSeeder::class,
            RoomTypeSeeder::class,
            ReservationSeeder::class,
            RoomSeviceRequestSeeder::class,
        ]);
    }
}
