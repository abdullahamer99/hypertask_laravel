<?php


namespace App\Repositories;


use App\HyperTask\ModelRepository;
use App\Models\TaskGroup;
use Illuminate\Database\Eloquent\Model;

class TaskGroupRepository implements ModelRepository
{

    public function save(array $data): TaskGroup
    {
        // TODO: Implement save() method.
    }

    public function update(array $data, TaskGroup|Model $model): TaskGroup
    {
        // TODO: Implement update() method.
    }
}
