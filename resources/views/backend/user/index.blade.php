@extends('layouts.backend')

@section('content')

<div class="row">
    <div class="main-card col-md-12 card">
        <div class="card-header">
            <div class="btn-actions-pane-right">
                <div role="group" class="btn-group-sm btn-group">
                    <!-- <button class="active btn btn-focus">Last Week</button>
                    <button class="btn btn-focus">All Month</button> -->
                </div>
            </div>
        </div>
        <div class="table-responsive">

            <table id="users-table" class="table table-hover table-striped table-bordered">
                <thead>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @if(count($users))
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->fullname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ implode(',', $user->roles->pluck('name')->toArray()) }}</td>
                            <td>
                                <div class="d-block text-center">
                                    <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger">
                                        <i class="pe-7s-trash btn-icon-wrapper"></i>
                                    </button> 
                                    <button class="btn-wide btn-icon-only btn btn-warning">
                                        <i class="pe-7s-pen btn-icon-wrapper"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    @else
                    <p>No records found.</p>
                    @endif
                </tbody>
            </table>

        </div>
        <div class="d-block text-center card-footer">
        </div>
    </div>
</div>
@endsection