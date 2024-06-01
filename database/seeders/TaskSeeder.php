<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;


class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            "name" => "Mtk",
            "description" => "ini tugas mtk",
            "deadline" => "2024-12-1",
            "status" => "belum selesai"
        ]);
        
    }
}
