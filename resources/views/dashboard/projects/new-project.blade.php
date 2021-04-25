@extends('layouts.master')

@section('content')

    <div class="card p-4">
        <div class="card-title">
            <h5>New Project</h5>
        </div>

        <div class="card-content">
            <form
                action="{{ !isset($project) ? route('projects.store') :  route('projects.update' , ['project' => $project]) }}"
                method="post">

                @if(isset($project))
                    @method('put')
                @endif
                @csrf
                <div class="form-group mb-4">
                    <label for="title">Project Title</label>
                    <input type="text" name="title" id="title" required class="form-control"
                           value="{{ isset($project) ? $project->title : ''  }}">
                </div>
                <div class="form-group mt-4 mb-4">
                    <label for="description">Project Description</label>
                    <textarea name="description" id="description" cols="30" rows="10"
                              class="form-control">{{ isset($project) ? $project->description : '' }}</textarea>
                </div>
                <div class="form-group mt-4">
                    <button type="submit"
                            class="btn btn-primary">{{ !isset($project) ? 'Create New' : 'Update' }}
                        Project
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
