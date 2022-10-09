<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
        $this->myUser();
    }

    private function myUser()
    {
        User::create(
            [
                'name' => 'Daniel Larson',
                'email' => 'danlarson1990@outlook.com.au',
                'email_verified_at' => now(),
                'password' => Hash::make('AsDf!23Ll'), // password
                'remember_token' => Str::random(10),
            ]
        );
    }
}
