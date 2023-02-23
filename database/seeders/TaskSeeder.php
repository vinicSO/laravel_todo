<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'title' => 'Minha Task Exemplo',
            'description' => 'descrição',
            'due_date' => '2023-12-12 00:00:00',
            'user_id' => 1,
            'category_id' => 1
        ]);
    }
}
