<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LabelTaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('label_task')->insert([
            [
                'task_id' => 1,
                'label_id' => 2,
            ],
            [
                'task_id' => 1,
                'label_id' => 3,
            ],
            [
                'task_id' => 2,
                'label_id' => 1,
            ],
            [
                'task_id' => 2,
                'label_id' => 4,
            ],
            [
                'task_id' => 2,
                'label_id' => 4,
            ],
            [
                'task_id' => 3,
                'label_id' => 1,
            ],
            [
                'task_id' => 3,
                'label_id' => 2,
            ],
            [
                'task_id' => 3,
                'label_id' => 3,
            ],
            [
                'task_id' => 4,
                'label_id' => 2,
            ],
            [
                'task_id' => 4,
                'label_id' => 4,
            ],
            [
                'task_id' => 5,
                'label_id' => 3,
            ],
            [
                'task_id' => 6,
                'label_id' => 1,
            ],
            [
                'task_id' => 6,
                'label_id' => 4,
            ],
            [
                'task_id' => 7,
                'label_id' => 1,
            ],
            [
                'task_id' => 7,
                'label_id' => 1,
            ],
        ]);
    }
}
