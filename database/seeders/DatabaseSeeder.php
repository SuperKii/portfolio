<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\BasicComponent;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Cookie',
            'email' => 'Ella@adm.com',
            'password' => Hash::make('CookieElla19.')
        ]);

        BasicComponent::create([
            'logo' => 'R',
            'home_name' => 'Cookie.',
            'home_description' => 'Junior Backend Developer, building scalable and efficient web applications',
            'home_image' => 'images/home_image.jpg',
            'about_description' => "I'm a junior backend developer who enjoys crafting efficient and structured web applications.",
            'about_skill' => 'HTML, CSS, JavaScript, Laravel, Git & GitHub, PHP.',
            'about_image' => 'images/about_image.jpg',
        ]);
    }
}
