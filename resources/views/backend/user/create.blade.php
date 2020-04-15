@extends('layouts.backend')

@push('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
@endpush

@section('content')

<div class="row">
    <div class="main-card col-md-8 card" style="margin:0 auto">
        <div class="card-header">
            <i class="header-icon pe-7s-add-user icon-gradient bg-plum-plate"></i>
            Create User
            <div class="btn-actions-pane-right">
                <div role="group" class="btn-group-sm btn-group">
                    <!--  -->
                </div>
            </div>
        </div>
        <div class="card-body">
          <form action="{{ route('user.store') }}">
            <!-- Personal Information -->
            <legend class="col-form-label row">Personal Information</legend>
            <div class="position-relative row form-group">
              <label class="col-sm-3" for="first_name">First Name</label>
              <input type="text" class="form-control col-sm-9" name="first_name">
            </div>
            <div class="position-relative row form-group">
              <label class="col-sm-3" for="last_name">Last Name</label>
              <input type="text" class="form-control col-sm-9" name="last_name">
            </div>
            <div class="position-relative row form-group">
              <label class="col-sm-3" for="last_name">Middle Name</label>
              <input type="text" class="form-control col-sm-9" name="middle_name">
            </div>
            <div class="position-relative row form-group">
              <label class="col-sm-3" for="email">Email</label>
              <input type="email" class="form-control col-sm-9" name="email">
            </div>
            <div class="position-relative row form-group">
              <label class="col-sm-3" for="birthdate">Birthdate</label>
              <input type="date" class="form-control col-sm-9" name="birthdate" data-toggle="datepicker">
            </div>
            <!-- Personal Information End -->

            <!-- User role and permission -->
            <legend class="col-form-label row">Roles and Permissions</legend>
            <div class="position-relative form-group">
              <label class="col-sm-3" for="birthdate">Role</label>
              <select id="select_role" name="roles[]" class="form-control" multiple="multiple">
                @foreach($roles as $role)
                <option value="{{ $role->id }}">{{ ucfirst($role->name) }}</option>
                @endforeach
              </select>
            </div>
            <div class="position-relative form-group">
              <label class="col-sm-3" for="birthdate">Permission</label>
              <select id="select_permission" name="permissions[]" class="form-control" multiple="multiple">
              </select>
            </div>
            <!-- User role and permission end-->

          </form>
        </div>
        <div class="d-block text-center card-footer">
          <button type="button" class="mb-2 mr-2 btn-icon btn btn-primary">
            <i class="pe-7s-add-user btn-icon-wrapper"> </i>
            Save
          </button>
        </div>
    </div>

    <div class="row"></div>
</div>
@endsection

@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script>
  $('#select_role').select2({
    placeholder: 'Select Roles...'
  });
  $('#select_permission').select2({
    placeholder: 'Select Permissions...'
  });
</script>
@endpush()