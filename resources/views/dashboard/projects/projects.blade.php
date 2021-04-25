@extends('layouts.master')

@section('content')
    <div class="card p-4">
        <div class="card-title">
            <h5>Projects</h5>
            <a href="{{ route('projects.create') }}" class="btn btn-primary">New Project</a>
        </div>

        <div class="card-content">
            @if( $projects->count() > 0  )
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Project ID</th>
                        <th>Project Title</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $projects as $project )
                        <tr>
                            <td>#{{ $project->id }}</td>
                            <td><a href="{{ route('projects.show' , ['project' => $project]) }}"
                                   class="btn btn-link">{{ $project->title }}</a></td>
                            <td>
                                <form action="{{ route('projects.destroy' , ['project' => $project]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Delete Project</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    @else
                        <h4>You dont have projects</h4>
            @endif
        </div>
    </div>
@endsection
