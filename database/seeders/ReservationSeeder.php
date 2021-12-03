<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('reservations')->insert([
        //     'price' => float(100.5),
        //     'paid' => float::random(4),
        //     'room_id' => Biginteger::random(4),
        //     'offer_id' => Biginteger::random(2),            
        //     'user_id' => Biginteger::random(3),
        //     'started_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'ended_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'paid_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'canceled_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //     'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        // ]);
    }
}
