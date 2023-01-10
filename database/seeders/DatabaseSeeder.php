<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory(1)->create([
            'name'=>'hr alamin',
            'type'=>'admin',
            'email'=>'hralamin2020@gmail.com',
            'email_verified_at' => now(),
            'password'=>Hash::make('000000')
        ]);

         \App\Models\Setup::factory(1)->create();
//         \App\Models\Work::factory(10)->create();
//         \App\Models\Ability::factory(9)->create();
//         \App\Models\Skill::factory(10)->create();
//         \App\Models\Resume::factory(9)->create();
//         \App\Models\Contact::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
