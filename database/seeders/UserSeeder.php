<?php

namespace Database\Seeders;

<<<<<<< HEAD
=======
use App\Models\Review;
use App\Models\User;
>>>>>>> origin/master
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        //
=======
        $users = User::factory()
            ->has(Review::factory()->count(3))
            ->count(10)
            ->create();

        $users->each(function ($user) {
            $user->assignRole('customer');
        });
>>>>>>> origin/master
    }
}
