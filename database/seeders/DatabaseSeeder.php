<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for($i = 0; $i <= 10; $i++)
        {
            DB::table('task')->insert([
                "name" => $faker->name(),
                "description" => $faker->paragraph,
                "deadline" => "2024-12-1",
                "status" => "belum selesai"
            ]);

            DB::table('categories')->insert([
                'nama' => $faker->name()
            ]);
        }
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
