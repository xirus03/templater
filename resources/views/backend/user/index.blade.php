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
            
            <table id="users-table">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </thead>
            </table>

        </div>
        <div class="d-block text-center card-footer">
            <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
            <button class="btn-wide btn btn-success">Save</button>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
$('#users-table').DataTable({
    serverSide: true,
    ajax: "{{ route('user.datatables') }}",
    columns: [
        { name: 'id' },
        { name: 'name' },
        { name: 'email' },
        { name: 'action', orderable: false, searchable: false }
    ]
});
</script>
@endpush