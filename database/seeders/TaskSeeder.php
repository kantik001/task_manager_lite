<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tasks')->insert([
            [
                'status_id' => 1,
                'name' => 'Исправить баги',
                'description' => 'Я тут баги нашёл, надо бы исправить',
                'created_by_id' => 1,
                'assigned_to_id' => 2,
                'created_at' => Carbon::now(),
            ],
            [
                'status_id' => 2,
                'name' => 'Проблемы с авторизацией',
                'description' => 'Авторизация не работает!',
                'created_by_id' => 2,
                'assigned_to_id' => 3,
                'created_at' => Carbon::now(),
            ],
            [
                'status_id' => 3,
                'name' => 'Нужно подкрутить ajax',
                'description' => 'Ajax не работает',
                'created_by_id' => 2,
                'assigned_to_id' => 1,
                'created_at' => Carbon::now(),
            ],
            [
                'status_id' => 4,
                'name' => 'Фронтенд',
                'description' => 'Какой криворукий делал фронт?? Срочно исправить!',
                'created_by_id' => 1,
                'assigned_to_id' => 3,
                'created_at' => Carbon::now(),
            ],
            [
                'status_id' => 1,
                'name' => 'Пофиксить логику добавления нового цвета у товара',
                'description' => 'Траблы с добавлением, исправь ошибку',
                'created_by_id' => 3,
                'assigned_to_id' => 4,
                'created_at' => Carbon::now(),
            ],
            [
                'status_id' => 2,
                'name' => 'Исправить поиск',
                'description' => 'Поиск не работает корректно',
                'created_by_id' => 5,
                'assigned_to_id' => 6,
                'created_at' => Carbon::now(),
            ],
            [
                'status_id' => 3,
                'name' => 'Добавить интеграцию с облаками',
                'description' => 'Яндекс диск нормально не коннектится',
                'created_by_id' => 1,
                'assigned_to_id' => 3,
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
