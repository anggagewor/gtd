@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-header">{{$project->name}}</div>

                <div class="card-body">
                    {{$project->description}}
                </div>
            </div>
            <div class="card">
                <div class="card-header">Backlog</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action">asds</a>
                    <a class="list-group-item list-group-item-action">asds</a>
                    <a class="list-group-item list-group-item-action">asds</a>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Backlog name
                </div>
                <div class="card-body" style="min-height:50rem;">
                    Backlog name
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card">
                <div class="card-header">
                    Backlog name
                </div>
                <div class="card-body" style="min-height:50rem;">
                    Backlog name
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
