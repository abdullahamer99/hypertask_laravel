@extends('layouts.master')

@section('content')
    <div class="card p-4">
        <div class="card-title">
            <h5>{{ $project->title }}</h5>
        </div>
        <div class="card-content">
            <p>{{ $project->description }}</p>


            <a href="{{ route('projects.edit' , ['project' => $project]) }}" class="btn btn-primary">Edit Project</a>
        </div>
    </div>
@endsection
