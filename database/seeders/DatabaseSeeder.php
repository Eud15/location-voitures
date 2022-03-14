<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        if(!User::where('email', 'admineudo@gmail.com')->first()){
            $user = new User([
                'email' => 'admineudo@gmail.com',
                'name' => 'Admin Eudo',
                'role' => 1,
                'password' => Hash::make('Eudoxie15@'),
            ]);
            $user->save();

        }
    }
}


