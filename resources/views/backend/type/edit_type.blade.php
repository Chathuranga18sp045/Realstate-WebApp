@extends('admin.admin_dashboard')

@section('admin')
<!-- JavaScript Link CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">
<div class="row profile-body">
  
  <!-- middle wrapper start -->
  <div class="col-md-8 col-xl-8 middle-wrapper">
    <div class="row">
           <div class="card">
              <div class="card-body">

								<h6 class="card-title">Edit Property Type</h6>

                <form method="POST" action="{{ route('update.type') }}" enctype="multipart/form-data" class="forms-sample">                                      @csrf
								
                                    <input type="hidden" name="id" value="{{$types->id}}">  
                                    
									<div class="mb-3">
                                    <label for="exampleInputEmail" class="from-label">Type Name</label> 
										<input type="text" name="type_name" class="form-control @error('type_name') is-invalid @enderror" value="{{$types->type_name}}">
                                        @error('type_name')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
								  </div>
                  <div class="mb-3">
                      <label for="type_icon" class="form-label">Type Icon</label>
                      <input type="file" name="type_icon" id="type_icon" class="form-control @error('type_icon') is-invalid @enderror">
                      @error('type_icon')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror

                      <!-- Display current icon -->
                      @if($types->type_icon)
                      <div class="mt-2">
                      <label>Current Icon:</label>
                      <img src="{{ asset($types->type_icon) }}" alt="Type Icon" style="width: 100px; height: auto; object-fit: cover;">
   
                      </div>
                      @endif
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