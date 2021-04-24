<?php


namespace App\Repositories;


use App\HyperTask\ModelRepository;
use App\Models\Task;
use Illuminate\Database\Eloquent\Model;

class TaskRepository implements ModelRepository
{

    public function save(array $data): Task
    {
        // TODO: Implement save() method.
    }

    public function update(array $data, Task|Model $model): Task
    {
        // TODO: Implement update() method.
    }
}
