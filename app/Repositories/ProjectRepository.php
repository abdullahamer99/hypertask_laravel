<?php


namespace App\Repositories;


use App\HyperTask\ModelRepository;
use App\Models\Project;
use Illuminate\Database\Eloquent\Model;

class ProjectRepository
{

    public function save(array $data): Project
    {
        return Project::create($data);
    }

    public function update(array $data,Project $project): Project
    {
        $project->update($data);

        $project->refresh();

        return $project;
    }
}
