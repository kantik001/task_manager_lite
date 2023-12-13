<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('statuses')->insert([
            [
                'name' => 'новое',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'исполнено',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'выполняется',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => '	в архиве',
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
