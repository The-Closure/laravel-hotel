<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


use function Ramsey\Uuid\v1;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $owner = Role::firstOrCreate(['name' => 'owner']);
        $manager = Role::firstOrCreate(['name' => 'manager']);
        $reception = Role::firstOrCreate(['name' => 'reception']);
        $worker = Role::firstOrCreate(['name' => 'worker']);
        $customer = Role::firstOrCreate(['name' => 'customer']);

        Permission::firstOrCreate(['name' => 'view booked rooms count'])->assignRole([$owner, $manager]);
        Permission::firstOrCreate(['name' => 'view income'])->assignRole($owner);
        Permission::firstOrCreate(['name' => 'view expenses'])->assignRole($owner);
        Permission::firstOrCreate(['name' => 'view balance'])->assignRole($owner);
        Permission::firstOrCreate(['name' => 'view all reviews count'])->assignRole([$owner, $manager]);
        Permission::firstOrCreate(['name' => 'view visitors count'])->assignRole([$owner, $manager]);
        Permission::firstOrCreate(['name' => 'view all room'])->assignRole([$owner, $manager]);
        Permission::firstOrCreate(['name' => 'create room'])->assignRole([$owner, $manager]);
        Permission::firstOrCreate(['name' => 'edit room'])->assignRole([$owner, $manager]);
        Permission::firstOrCreate(['name' => 'show room'])->assignRole([$owner, $manager]);
        Permission::firstOrCreate(['name' => 'edit status room'])->assignRole([$owner, $manager, $reception]);
        Permission::firstOrCreate(['name' => 'show status room'])->assignRole([$owner, $manager, $reception]);
        Permission::firstOrCreate(['name' => 'edit price room'])->assignRole($owner);
        Permission::firstOrCreate(['name' => 'view all reservations'])->assignRole([$owner, $manager, $reception]);
        Permission::firstOrCreate(['name' => 'create reservations'])->assignRole([$owner, $manager, $reception]);
        Permission::firstOrCreate(['name' => 'edit reservations'])->assignRole([$owner, $manager, $reception]);
        Permission::firstOrCreate(['name' => 'delete reservations'])->assignRole([$owner, $manager, $reception]);
        Permission::firstOrCreate(['name' => 'view all room services'])->assignRole([$owner, $manager, $reception, $worker]);
        Permission::firstOrCreate(['name' => 'create room services'])->assignRole([$owner, $manager]);
        Permission::firstOrCreate(['name' => 'edit room services'])->assignRole([$owner, $manager]);
        Permission::firstOrCreate(['name' => 'delete room services'])->assignRole([$owner, $manager]);
        Permission::firstOrCreate(['name' => 'show room services'])->assignRole([$owner, $manager, $reception, $worker]);
        Permission::firstOrCreate(['name' => 'view room services requests'])->assignRole([$owner, $manager, $reception, $worker]);
        Permission::firstOrCreate(['name' => 'create room services requests'])->assignRole([$owner, $manager, $reception]);
        Permission::firstOrCreate(['name' => 'edit room services requests'])->assignRole([$owner, $manager, $reception]);
        Permission::firstOrCreate(['name' => 'delete room services requests'])->assignRole([$owner, $manager, $reception]);
        Permission::firstOrCreate(['name' => 'view all employee'])->assignRole([$owner, $manager]);
        Permission::firstOrCreate(['name' => 'create employee'])->assignRole([$owner, $manager]);
        Permission::firstOrCreate(['name' => 'edit employee'])->assignRole([$owner, $manager]);
        Permission::firstOrCreate(['name' => 'delete employee'])->assignRole([$owner, $manager]);
        Permission::firstOrCreate(['name' => 'show employee'])->assignRole([$owner, $manager]);
        Permission::firstOrCreate(['name' => 'view all offers'])->assignRole([$owner, $manager, $reception]);
        Permission::firstOrCreate(['name' => 'create offers'])->assignRole($owner);
        Permission::firstOrCreate(['name' => 'edit offers'])->assignRole($owner);
        Permission::firstOrCreate(['name' => 'delete offers'])->assignRole($owner);
        Permission::firstOrCreate(['name' => 'show offers'])->assignRole([$owner, $manager, $reception]);
        Permission::firstOrCreate(['name' => 'view message'])->assignRole([$owner, $manager, $reception]);
        Permission::firstOrCreate(['name' => 'show message'])->assignRole([$owner, $manager, $reception]);
        Permission::firstOrCreate(['name' => 'replay message'])->assignRole([$owner, $manager, $reception]);
        Permission::firstOrCreate(['name' => 'view all transactions'])->assignRole([$owner, $manager, $reception]);
        Permission::firstOrCreate(['name' => 'create transaction'])->assignRole([$owner, $manager, $reception]);
        Permission::firstOrCreate(['name' => 'edit transaction'])->assignRole([$owner, $manager, $reception]);
        Permission::firstOrCreate(['name' => 'ubdate transaction'])->assignRole([$owner, $manager, $reception]);
        Permission::firstOrCreate(['name' => 'view all reviews'])->assignRole([$owner, $manager]);
        Permission::firstOrCreate(['name' => 'view  reviews'])->assignRole([$owner, $manager]);
        Permission::firstOrCreate(['name' => 'view all newsletters'])->assignRole([$owner, $manager, $reception]);
        Permission::firstOrCreate(['name' => 'view newsletter info'])->assignRole([$owner, $manager, $reception]);
        Permission::firstOrCreate(['name' => 'create newsletter'])->assignRole([$owner, $manager, $reception]);
        Permission::firstOrCreate(['name' => 'send newsletter'])->assignRole([$owner, $manager, $reception]);





        User::firstOrCreate([
            'email' => 'admin@hotel.com',
        ], [
            'name' => 'Owner',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
            'country' => 'Syria',
            'national_id' => '0308004032',
            'phone' => '+963 974527482',
            'salary' => '1000000',
            'job_title' => 'Owner',
        ])->assignRole($owner);


        User::firstOrCreate([
            'email' => 'manager@hotel.com',
        ], [
            'name' => 'Manager',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
            'country' => 'Syria',
            'national_id' => '0308002030',
            'phone' => '+963 98462174',
            'salary' => '80000',
            'job_title' => 'Manager',

        ])->assignRole($manager);

        User::firstOrCreate([
            'email' => 'reception@hotel.com',
        ], [
            'name' => 'Reception',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
            'country' => 'Syria',
            'national_id' => '0308002044',
            'phone' => '+963 9336548264',
            'salary' => '50000',
            'job_title' => 'Reception',

        ])->assignRole($reception);


        User::firstOrCreate([
            'email' => 'worker@hotel.com',
        ], [
            'name' => 'Worker',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
            'country' => 'Syria',
            'national_id' => '0307022334',
            'phone' => '+963 9876473644',
            'salary' => '30000',
            'job_title' => 'Worker',

        ])->assignRole($worker);
    }
}
