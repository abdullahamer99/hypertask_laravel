<?php

namespace App\Http\Controllers;

use App\HyperTask\Managable;
use App\HyperTask\ModelRepository;
use App\Models\Project;
use App\Repositories\ProjectRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ProjectController extends Controller implements Managable
{

    public function index()
    {
        // TODO: Implement index() method.
    }

    public function show(Project|Model $project)
    {
        // TODO: Implement show() method.
    }

    public function store(Request $request, ProjectRepository|ModelRepository $projectRepository)
    {
        // TODO: Implement store() method.
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function edit(Project|Model $project)
    {
        // TODO: Implement edit() method.
    }

    public function update(Project|Model $project, Request $request,ProjectRepository|ModelRepository $projectRepository)
    {
        // TODO: Implement update() method.
    }

    public function delete(Project|Model $project)
    {
        // TODO: Implement delete() method.
    }
}
