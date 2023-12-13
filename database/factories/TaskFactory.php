<?php

namespace Database\Factories;

use App\Http\Resources\TaskResource;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $statusId = random_int(1, count(Status::get()));
        $maxIdUser = count(User::all());
        $assignedId = User::find(random_int(1, $maxIdUser));

        $creatorId = User::find(random_int(1, $maxIdUser));
        return [
            'status_id' => $statusId,
            'name' => fake()->unique()->name(),
            'description' => fake()->unique()->text(100),
            'created_by_id' => $creatorId,
            'assigned_to_id' => $assignedId,
        ];
    }
}
