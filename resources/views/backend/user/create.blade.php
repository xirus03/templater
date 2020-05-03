@extends('layouts.backend')

@push('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
@endpush

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

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
          <form action="{{ route('user.store') }}" id="user_form" method="post">
            @csrf
            <!-- Personal Information -->
            <legend class="col-form-label row">Personal Information</legend>
            <div class="position-relative row form-group">
              <label class="col-sm-3" for="first_name">First Name</label>
              <input type="text" 
                class="form-control col-sm-9 @error('first_name') is-invalid @enderror" 
                name="first_name"
                value="{{ old('first_name') }}">
            </div>
            <div class="position-relative row form-group">
              <label class="col-sm-3" for="last_name">Last Name</label>
              <input type="text" 
                class="form-control col-sm-9 @error('last_name') is-invalid @enderror" 
                name="last_name"
                value="{{ old('last_name') }}">
            </div>
            <div class="position-relative row form-group">
              <label class="col-sm-3" for="last_name">Middle Name</label>
              <input type="text" 
                class="form-control col-sm-9" 
                name="middle_name"
                value="{{ old('middle_name') }}">
            </div>
            <div class="position-relative row form-group">
              <label class="col-sm-3" for="email">Email</label>
              <input type="email" 
                class="form-control col-sm-9 @error('email') is-invalid @enderror" 
                name="email"
                value="{{ old('email') }}">
            </div>
            <div class="position-relative row form-group">
              <label class="col-sm-3" for="birthdate">Birthdate</label>
              <input type="date" 
                class="form-control col-sm-9 @error('birthdate') is-invalid @enderror" 
                name="birthdate" 
                data-toggle="datepicker"
                value="{{ old('birthdate') }}">
            </div>
            <!-- Personal Information End -->

            <input type="hidden" name="password" value="secret">

            <!-- User role -->
            <legend class="col-form-label row">Roles and Permissions</legend>
            <div class="position-relative form-group">
              <label class="col-sm-3" for="birthdate">Role</label>
              <select id="select_role" name="roles[]" class="form-control" multiple="multiple">
                @foreach($roles as $role)
                <option>{{ ucfirst($role) }}</option>
                @endforeach
              </select>
            </div>
            <!-- User role end-->

          </form>
        </div>
        <div class="d-block text-center card-footer">
          <button type="submit" class="mb-2 mr-2 btn-icon btn btn-primary" form="user_form">
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