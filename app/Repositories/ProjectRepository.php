<?php


namespace App\Repositories;


use App\HyperTask\ModelRepository;
use App\Models\Project;
use Illuminate\Database\Eloquent\Model;

class ProjectRepository implements ModelRepository
{

    public function save(array $data): Project
    {
        // TODO: Implement save() method.
    }

    public function update(array $data,Project|Model $model): Project
    {
        // TODO: Implement update() method.
    }
}
