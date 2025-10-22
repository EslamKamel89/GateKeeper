<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     */
    public function run(): void {
        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
        ]);

        Article::factory(14)
            ->recycle($user)
            ->create();

        Article::factory(15)->create();
    }
}
