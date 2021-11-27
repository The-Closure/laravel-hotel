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


        Permission::firstOrCreate(['name' => 'view booked rooms count'])->syncRoles([$owner,$manager]);
        Permission::firstOrCreate(['name' => 'view income'])->assignRoles($owner);
        Permission::firstOrCreate(['name' => 'view expenses'])->assignRoles($owner);
        Permission::firstOrCreate(['name' => 'view balance'])->assignRoles($owner);
        Permission::firstOrCreate(['name' => 'view all reviews count'])->syncRoles([$owner,$manager]);
        Permission::firstOrCreate(['name' => 'view visitors count'])->syncRoles([$owner,$manager]);
        Permission::firstOrCreate(['name' => 'view all room'])->syncRoles([$owner,$manager]);
        Permission::firstOrCreate(['name' => 'create room'])->syncRoles([$owner,$manager]);
        Permission::firstOrCreate(['name' => 'edit room'])->syncRoles([$owner,$manager]);
        Permission::firstOrCreate(['name' => 'show room'])->syncRoles([$owner,$manager]);
        Permission::firstOrCreate(['name' => 'edit status room'])->syncRoles([$owner,$manager,$reception]);
        Permission::firstOrCreate(['name' => 'show status room'])->syncRoles([$owner,$manager,$reception]);
        Permission::firstOrCreate(['name' => 'edit price room'])->assignRoles($owner);
        Permission::firstOrCreate(['name' => 'view all reservations'])->syncRoles([$owner,$manager,$reception]);
        Permission::firstOrCreate(['name' => 'create reservations'])->syncRoles([$owner,$manager,$reception]);
        Permission::firstOrCreate(['name' => 'edit reservations'])->syncRoles([$owner,$manager,$reception]);
        Permission::firstOrCreate(['name' => 'delete reservations'])->syncRoles([$owner,$manager,$reception]);
        Permission::firstOrCreate(['name' => 'view all room services'])->syncRoles([$owner,$manager,$reception,$worker]);
        Permission::firstOrCreate(['name' => 'create room services'])->syncRoles([$owner,$manager]);
        Permission::firstOrCreate(['name' => 'edit room services'])->syncRoles([$owner,$manager]);
        Permission::firstOrCreate(['name' => 'delete room services'])->syncRoles([$owner,$manager]);
        Permission::firstOrCreate(['name' => 'show room services'])->syncRoles([$owner,$manager,$reception,$worker]);
        Permission::firstOrCreate(['name' => 'view room services requests'])->syncRoles([$owner,$manager,$reception,$worker]);
        Permission::firstOrCreate(['name' => 'create room services requests'])->syncRoles([$owner,$manager,$reception]);
        Permission::firstOrCreate(['name' => 'edit room services requests'])->syncRoles([$owner,$manager,$reception]);
        Permission::firstOrCreate(['name' => 'delete room services requests'])->syncRoles([$owner,$manager,$reception]);
        Permission::firstOrCreate(['name' => 'view all employee'])->syncRoles([$owner,$manager]);
        Permission::firstOrCreate(['name' => 'create employee'])->assignRoles($owner);
        Permission::firstOrCreate(['name' => 'edit employee'])->assignRoles($owner);
        Permission::firstOrCreate(['name' => 'delete employee'])->assignRoles($owner);
        Permission::firstOrCreate(['name' => 'show employee'])->assignRoles($owner);
        Permission::firstOrCreate(['name' => 'view all customer'])->syncRoles([$owner,$manager,$reception]);
        Permission::firstOrCreate(['name' => 'create customer'])->syncRoles([$owner,$manager,$reception]);
        Permission::firstOrCreate(['name' => 'edit customer'])->syncRoles([$owner,$manager,$reception]);
        Permission::firstOrCreate(['name' => 'show customer'])->syncRoles([$owner,$manager,$reception]);
        Permission::firstOrCreate(['name' => 'view all offers'])->syncRoles([$owner,$manager,$reception]);
        Permission::firstOrCreate(['name' => 'create offers'])->assignRoles($owner);
        Permission::firstOrCreate(['name' => 'edit offers'])->assignRoles($owner);
        Permission::firstOrCreate(['name' => 'delete offers'])->assignRoles($owner);
        Permission::firstOrCreate(['name' => 'show offers'])->syncRoles([$owner,$manager,$reception]);
        Permission::firstOrCreate(['name' => 'view message'])->syncRoles([$owner,$manager]);
        Permission::firstOrCreate(['name' => 'show message'])->syncRoles([$owner,$manager]);
        Permission::firstOrCreate(['name' => 'replay message'])->syncRoles([$owner,$manager]);
        Permission::firstOrCreate(['name' => 'delete message'])->syncRoles([$owner]);


        User::firstOrCreate([
            'email' => 'admin@material.com',
        ], [
            'name' => 'Owner',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now()
        ])->assignRole($owner);


        User::firstOrCreate([
            'email' => 'Manager@material.com',
        ], [
            'name' => 'Manager',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now()
        ])->assignRole($manager);

        User::firstOrCreate([
            'email' => 'Reception@material.com',
        ], [
            'name' => 'Reception',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now()
        ])->assignRole($reception);


        User::firstOrCreate([
            'email' => 'Worker@material.com',
        ], [
            'name' => 'Worker',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now()
        ])->assignRole($worker);



    }
}
