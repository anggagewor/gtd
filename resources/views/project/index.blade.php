@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-white">
                    <span class="float-left">Projects</span>
                    <button type="button" class="btn btn-primary btn-sm float-right" data-backdrop="static" data-toggle="modal"
                        data-target="#createProjectModal">
                        Create Project
                    </button>
                </div>
                <table class="table table-bordered table-striped mb-0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>User</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                        <tr>
                            <td>
                                {{ $project->name }}
                            </td>
                            <td>
                                {{ $project->user->name }}
                            </td>
                            <td>
                            <a href="{{ route('projects.show',['id'=>$project->id]) }}" class="btn btn-sm btn-info">view</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="createProjectModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">
    <form action="{{ route('projects.store') }}" method="post">
        @csrf
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Project Name</label>
                        <input type="text" name="name" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Enter Project Name</small>
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea class="form-control" name="description" id="" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
