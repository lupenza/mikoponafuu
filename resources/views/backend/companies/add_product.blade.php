@extends('backend.layouts.master')
@section('content')
<style>
    .form-group{
        margin-top: 10px;
    }
</style>
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Product Details</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">View</a></li>
                            <li class="breadcrumb-item active">Product Details</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title text-center">Product Detail</h4>
                        <hr>
                        <form id="registration_form" method="POST">
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label for="">Product Name <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="name" placeholder="Write product name......." required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label for=""> Product Category <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-8">
                                    <select name="product_category" class="form-control" required>
                                        <option value="" selected >Product Category</option>
                                        @foreach ($categories as $item)
                                           <option value="{{ $item->id}}">{{ $item->name }}</option> 
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label for="">  Max Amount <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" name="max_amount" placeholder="Write Max amount......." required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label for="">  Min Amount <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" name="min_amount" placeholder="Write Min amount......." required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label for="">Interest</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" name="interest" placeholder="Write interest.......">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label for="">Admin Fees</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" name="adminstration_fee" placeholder="Write Adminstration.......">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label for="">Other Fees</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" name="other_fee" placeholder="Write Other Fees.......">
                                </div>
                            </div>
                            <div class="form-group row" style="margin-top: 10px;">
                                <div class="col-md-2">
                                    <label for="">product Requirements</label>

                                </div>
                                <div class="col-md-8">
                                    <div>
                                        @foreach ($requirements as $item)
                                        
                                        <input type="checkbox" class="requirements" name="requirements[]" value="{{ $item->id }}" >
                                        <label for="permission"> {{ $item->name }}</label> <br>   
                                        @endforeach
                                    </div>
                                    
                                </div>
                            </div>
                            <div id="age_block" style="display: none">
                                <div class="form-group row">
                                    <div class="col-md-2">
                                        <label for="">Age Requirement</label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="number" class="form-control" name="max_value[]" placeholder="Max Age">
                                        <input type="hidden" name="requirement_id[]" value="6">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="number" class="form-control" name="min_value[]" placeholder="Min Age">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="number" class="form-control" name="exact_value[]" placeholder="Exactly Age">
                                    </div>
                                    <div class="col-md-2">
                                        <select name="mandatory[]" class="form-control">
                                            <option value="" selected>Mandator status</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div id="credit_score" style="display: none">
                                <div class="form-group row">
                                    <div class="col-md-2">
                                        <label for="">Credit Score value Requirement</label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="number" class="form-control" name="max_value[]" placeholder="Max Value">
                                        <input type="hidden" name="requirement_id[]" value="8">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="number" class="form-control" name="min_value[]" placeholder="Min Value">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="number" class="form-control" name="exact_value[]" placeholder="Exactly Value">
                                    </div>
                                    <div class="col-md-2">
                                        <select name="mandatory[]" class="form-control">
                                            <option value="" selected>Mandator status</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div id="credit_grade" style="display: none">
                                <div class="form-group row">
                                    <div class="col-md-2">
                                        <label for="">Credit Score Grade Requirement</label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="number" class="form-control" name="max_value[]" placeholder="Max Value">
                                        <input type="hidden" name="requirement_id[]" value="9">

                                    </div>
                                    <div class="col-md-2">
                                        <input type="number" class="form-control" name="min_value[]" placeholder="Min Value">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="number" class="form-control" name="exact_value[]" placeholder="Exactly Value">
                                    </div>
                                    <div class="col-md-2">
                                        <select name="mandatory[]" class="form-control">
                                            <option value="" selected>Mandator status</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row" style="margin-top: 10px">
                                <div id="alert">

                                </div>
                            </div>
                            <div class="form-group row" style="margin-top: 10px;">
                                <div class="text-center">
                                    <button class="btn btn-primary" type="submit" id="reg_btn"><span class="fa fa-plus"> </span> Register Product</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end select2 -->

            </div>


        </div>
        <!-- end row -->

    </div> <!-- container-fluid -->
</div>
    
@endsection
@push('scripts')
<script>
    $(document).ready(function(){
      $('#registration_form').on('submit',function(e){ 
          e.preventDefault();
        var data =$(this).serialize();
      $.ajaxSetup({
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
          });
      $.ajax({
      type:'POST',
      url:"{{ route('products.store')}}",
      data: data,
      success:function(response){
        console.log(response);
        $('#alert').html('<div class="alert alert-success">'+response.message+'</div>');
        setTimeout(function(){
         history.back();
      },500);
      },
      error:function(response){
          console.log(response.responseText);
          if (jQuery.type(response.responseJSON.errors) == "object") {
            $('#alert').html('');
          $.each(response.responseJSON.errors,function(key,value){
              $('#alert').append('<div class="alert alert-danger">'+value+'</div>');
          });
          } else {
             $('#alert').html('<div class="alert alert-danger">'+response.responseJSON.errors+'</div>');
          }
      },
      beforeSend : function(){
                   $('#reg_btn').html('<i class="fa fa-spinner fa-pulse fa-spin"></i> Submiting .........');
                   $('#reg_btn').attr('disabled', true);
              },
              complete : function(){
                $('#reg_btn').html('<i class="fa fa-plus"></i> Register Product');
                $('#reg_btn').attr('disabled', false);
              }
      });
  });
  });
</script>

<script>
    $('.requirements').on('click',function(){
        var value =$(this).val();
        
        if (value == 6) {
            $('#age_block').toggle();
        }

        if (value == 8) {
            $('#credit_score').toggle();
        }

        if (value == 9) {
            $('#credit_grade').toggle();
        }
    })
</script>
    
@endpush