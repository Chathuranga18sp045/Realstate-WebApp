@extends('admin.admin_dashboard')

@section('admin')
<!-- JavaScript Link CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">
  <div class="row profile-body">
    <!-- left wrapper start -->
    <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
      <div class="rounded card">
        <div class="card-body">
          <div class="mb-2 d-flex align-items-center justify-content-between">
          
            <div>
            <img class="wd-100 rounded-circle" src="{{ (!empty($profileData->photo)) ? url('upload/admin_images/'.$profileData->photo) : url('upload/no_image.jpg') }}" alt="profile">
            <span class="h4 ms-3 ">{{$profileData->username}}</span>
            </div>
          
          </div>
          
          <div class="mt-3">
            <label class="mb-0 tx-11 fw-bolder text-uppercase">Name:</label>
            <p class="text-muted">{{$profileData->name}}</p>
          </div>
          <div class="mt-3">
            <label class="mb-0 tx-11 fw-bolder text-uppercase">Email:</label>
            <p class="text-muted">{{$profileData->email}} </p>
          </div>
          <div class="mt-3">
            <label class="mb-0 tx-11 fw-bolder text-uppercase">phone:</label>
            <p class="text-muted">{{$profileData->phone}}</p>
          </div>
          <div class="mt-3">
            <label class="mb-0 tx-11 fw-bolder text-uppercase">Address:</label>
            <p class="text-muted">{{$profileData->address}}</p>
          </div>
          <div class="mt-3 d-flex social-links">
            <a href="javascript:;" class="border btn btn-icon btn-xs me-2">
              <i data-feather="github"></i>
            </a>
            <a href="javascript:;" class="border btn btn-icon btn-xs me-2">
              <i data-feather="twitter"></i>
            </a>
            <a href="javascript:;" class="border btn btn-icon btn-xs me-2">
              <i data-feather="instagram"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- left wrapper end -->
    <!-- middle wrapper start -->
    <div class="col-md-8 col-xl-8 middle-wrapper">
      <div class="row">
            <div class="card">
                <div class="card-body">

                  <h6 class="card-title">Admin Change Password</h6>

                  <form method="POST" action="{{route('admin.update.password')}}" class="forms-sample" enctype="multipart/form-data">
                                        @csrf
                  <!-- OLD Password -->
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Old Password</label>
                      <input type="password" name="old_password" class="form-control @error('old-password') is-invalid @enderror " id="old_password" autocomplete="off" >
                                          @error('old_password')
                                          <span class="text-danger">{{$message}}</span>
                                          @enderror
                  </div>

                  <!-- New Password -->
                                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">New Password</label>
                      <input type="password" name="new_password" class="form-control @error('new-password') is-invalid @enderror " id="new_password" autocomplete="off" >
                                          @error('old_password')
                                          <span class="text-danger">{{$message}}</span>
                                          @enderror
                  </div>

                                  <!-- Confirm Password -->
                                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Confirm New Password</label>
                      <input type="password" name="new_password_confirmation" class="form-control" id="new_password_confirmation" autocomplete="off" >
                  </div>
                                      
                    <button type="submit" class="btn btn-primary me-2">Save Changes</button>

                  </form>

                </div>
          </div>
      </div>
    </div>
  </div>
</div>

@endsection