@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $project->title }}</div>

                <div class="card-body">
                    <p>{{ $project->description }}</p>
                    @if($project->type)
                        <p><strong>Type:</strong> {{ $project->type->name }}</p>
                    @endif
                    @if($project->technologies->isNotEmpty())
                        <p><strong>Technologies:</strong>
                            @foreach($project->technologies as $technology)
                                <span class="badge bg-secondary">{{ $technology->name }}</span>
                            @endforeach
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
