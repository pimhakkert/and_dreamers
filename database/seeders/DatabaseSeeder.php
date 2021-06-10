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

        $user->name = 'and.dreamers';
        $user->password = Hash::make('LXDk5d8J2t7Y3Y65');
        $user->email = 'andrea@andreamengelberg.com';

        $user->save();


        if($_ENV['APP_ENV'] !== 'prod')
        {
            $devUser = new User();

            $devUser->name = 'Developer';
            $devUser->password = Hash::make('test12345');
            $devUser->email = 'contact@loud-mouth.eu';

            $devUser->save();
        }
        // \App\Models\User::factory(10)->create();
    }
}
