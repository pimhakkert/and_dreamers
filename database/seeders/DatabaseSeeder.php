<?php

namespace Database\Seeders;

use App\Models\User;
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
        $user = new User();

        $user->name = 'Andrea';
        $user->password = Hash::make('LXDk5d8J2t7Y3Y65');
        $user->email = 'andrea@andreamengelberg.com';

        $user->save();
        // \App\Models\User::factory(10)->create();
    }
}
