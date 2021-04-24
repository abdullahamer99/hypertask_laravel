<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\HyperTask\Managable;
use App\HyperTask\ModelRepository;
use App\Models\Project;
use App\Repositories\ProjectRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ProjectController extends Controller implements Managable
{


    /**
     * ProjectController constructor.
     */
    public function __construct()
    {

    }

    public function index()
    {
        // TODO: Implement index() method.
    }

    public function show(Project|Model $project)
    {
        // TODO: Implement show() method.
    }

    public function store(ProjectRequest|Request $projectRequest, ProjectRepository|ModelRepository $projectRepository)
    {
        return view('projects.project')->withProject($projectRepository->save( $projectRequest->validated() ));
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function edit(Project|Model $project)
    {
        // TODO: Implement edit() method.
    }

    public function update(Project|Model $project,ProjectRequest|Request $projectRequest,ProjectRepository|ModelRepository $projectRepository)
    {
        // TODO: Implement update() method.
    }

    public function delete(Project|Model $project)
    {
        // TODO: Implement delete() method.
    }
}
