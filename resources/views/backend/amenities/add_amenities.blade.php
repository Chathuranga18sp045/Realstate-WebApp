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

                                    <h6 class="card-title">Add Amenities</h6>

                                    <form id="myForm" method="POST" action="{{route('store.amenitie')}}" class="forms-sample">
                                        @csrf
                                
                                        <div class="mb-3 form-group">
                                            <label for="exampleInputEmail" class="from-label">Amenities Name</label>
                                            <input type="text" name="amenitis_name" class="form-control ">
                                        
                                        </div>
                                        <button type="submit" class="btn btn-primary me-2">Save Changes</button>

                                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                amenitis_name: {
                    required : true,
                }, 
                
            },
            messages :{
                amenitis_name: {
                    required : 'Please Enter Amenitis Name',
                }, 
                 

            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>
@endsection