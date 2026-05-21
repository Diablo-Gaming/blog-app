<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Create users
        $admin1 = User::create([
            'username' => 'Diablo',
            'email' => 'diablo@blogsite.com',
            'password' => 'diablo.12',
        ]);

        $admin2 = User::create([
            'username' => 'Prasanna',
            'email' => 'pop@blogsite.com',
            'password' => 'pop.vlogs12',
        ]);

        $admin3 = User::create([
            'username' => 'Aavash',
            'email' => 'aavash@blogsite.com',
            'password' => 'aavash.12',
        ]);

        $user1 = User::create([
            'username' => 'Sudip',
            'email' => 'sudip@blogsite.com',
            'password' => 'sudip.12',
        ]);

        $user2 = User::create([
            'username' => 'Miraj',
            'email' => 'miraj@blogsite.com',
            'password' => 'miraj.12',
        ]);

        $user3 = User::create([
            'username' => 'Erik',
            'email' => 'erik@blogsite.com',
            'password' => 'erik.123',
        ]);

        $user4 = User::create([
            'username' => 'Niruta',
            'email' => 'niruta@blogsite.com',
            'password' => 'niruta.12',
        ]);

        $user5 = User::create([
            'username' => 'Anil',
            'email' => 'anil@blogsite.com',
            'password' => 'anil.123',
        ]);

        $user6 = User::create([
            'username' => 'Hridaey',
            'email' => 'hridaey@blogsite.com',
            'password' => 'hridaey.12',
        ]);

        $user7 = User::create([
            'username' => 'Silon',
            'email' => 'silon@blogsite.com',
            'password' => 'silon.12',
        ]);

        $user8 = User::create([
            'username' => 'Bhargav',
            'email' => 'bhargav@blogsite.com',
            'password' => 'bhargav.12',
        ]);

        $user9 = User::create([
            'username' => 'Riddhima',
            'email' => 'riddhima@blogsite.com',
            'password' => 'riddhima.12',
        ]);

        $user10 = User::create([
            'username' => 'Aniket',
            'email' => 'aniket@blogsite.com',
            'password' => 'aniket.12',
        ]);


        // Fetch roles
        $adminRole = Role::where('name', 'admin')->first();
        $userRole = Role::where('name', 'user')->first();

        // Attach roles
        $admin1->roles()->attach($adminRole->id);
        $admin2->roles()->attach($adminRole->id);
        $admin3->roles()->attach($adminRole->id);

        $user1->roles()->attach($userRole->id);
        $user2->roles()->attach($userRole->id);
        $user3->roles()->attach($userRole->id);
        $user4->roles()->attach($userRole->id);
        $user5->roles()->attach($userRole->id);
        $user6->roles()->attach($userRole->id);
        $user7->roles()->attach($userRole->id);
        $user8->roles()->attach($userRole->id);
        $user9->roles()->attach($userRole->id);
        $user10->roles()->attach($userRole->id);
    }
}
