<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\HyperTask\Managable;
use App\HyperTask\ModelRepository;
use App\Models\Project;
use App\Repositories\ProjectRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ProjectController extends Controller
{


    /**
     * ProjectController constructor.
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        // TODO: Implement index() method.
        return view('dashboard.projects.projects')->with([
            'projects' => auth()->user()->projects
        ]);
    }

    public function show(Project $project)
    {
        return view('dashboard.projects.project')->withProject($project);
    }

    public function store(ProjectRequest $projectRequest, ProjectRepository $projectRepository)
    {
        $projectRepository->save( array_merge( $projectRequest->validated() , ['user_id' => auth()->id()]  ) );
        return redirect(route('projects.index'));
    }

    public function create()
    {
        return view('dashboard.projects.new-project');
    }

    public function edit(Project $project)
    {
        return view('dashboard.projects.new-project')->withProject($project);
    }

    public function update(Project $project,ProjectRequest $projectRequest,ProjectRepository $projectRepository)
    {
        $projectRepository->update( $projectRequest->validated() , $project );
        return redirect(route('projects.index'));
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect(route('projects.index'));
    }
}
