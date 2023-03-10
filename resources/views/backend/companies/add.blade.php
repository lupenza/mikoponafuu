@extends('backend.layouts.master')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Company Detail</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Add</a></li>
                            <li class="breadcrumb-item active">Company Detail</li>
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
                        <h4 class="card-title mb-4 text-center">Add Company</h4>

                        <div id="vertical-example" class="vertical-wizard">
                            <!-- Seller Details -->
                            <h3>Company KYC Details</h3>
                            <section>
                                <form id="company_kyc">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="verticalnav-firstname-input">Company name</label>
                                                <input type="text" class="form-control" name="name" id="verticalnav-name-input" placeholder="write Company name....." required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="verticalnav-lastname-input">Phone Number</label>
                                                <input type="number" class="form-control" name="contact" id="verticalnav-phone-input" placeholder="Write phone number......." required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="verticalnav-phoneno-input">Email</label>
                                                <input type="email" class="form-control" name="email" id="verticalnav-email-input" placeholder="Write email.......">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="verticalnav-email-input">Licence No</label>
                                                <input type="number" class="form-control" name="licence_number" id="verticalnav-email-input" placeholder="Write Licence no.......">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="verticalnav-address-input">TIN No</label>
                                                <input type="number" class="form-control" id="verticalnav-email-input" name="tin_number" placeholder="Write TIN no......">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </section>

                            <!-- Company Document -->
                            <h3>Company Location</h3>
                            <section>
                                <form id="company_location">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="verticalnav-pancard-input">Region</label>
                                                <select name="region_id" class="form-control" >
                                                    <option value="" selected>Region</option>
                                                    @foreach ($regions as $region)
                                                    <option value="{{ $region->id}}">{{ $region->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="verticalnav-vatno-input">District</label>
                                                <input type="text" class="form-control" id="verticalnav-vatno-input" name="district_id" placeholder="Write District....">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="verticalnav-cstno-input">Physical Address</label>
                                                <textarea name="location" class="form-control" placeholder="Write Physical address......"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </section>

                            <!-- Bank Details -->
                            <h3>Contact Person</h3>
                            <section>
                                <div>
                                    <form id="company_personel">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label for="verticalnav-namecard-input">Full Name</label>
                                                    <input type="text" name="full_name" class="form-control" id="verticalnav-namecard-input" placeholder="Write Fullname....">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label for="verticalnav-namecard-input">Phone Number</label>
                                                    <input type="text" name="user_phone_number" class="form-control" id="verticalnav-namecard-input" placeholder="Write phone number.......">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label for="verticalnav-namecard-input">Email</label>
                                                    <input type="email" name="user_email" class="form-control" id="verticalnav-namecard-input" placeholder="Write email....">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div id="reg_alert"></div>
                                            </div>

                                        </div>
                                    </form>
                                  </div>
                            </section>

                            <!-- Confirm Details -->
                            {{-- <h3>Confirm Detail</h3>
                            <section>
                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="text-center">
                                            <div class="mb-4">
                                                <i class="mdi mdi-check-circle-outline text-success display-4"></i>
                                            </div>
                                            <div>
                                                <h5>Confirm Detail</h5>
                                                <p class="text-muted">If several languages coalesce, the grammar of the resulting</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section> --}}
                        </div>
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- container-fluid -->
</div>
@endsection
@push('scripts')
 <!-- jquery step -->
 <script src="{{ asset('backend/assets/libs/jquery-steps/build/jquery.steps.min.js')}}"></script>
 <script>
    $(function () {
    $("#vertical-example").steps({ headerTag: "h3",
     bodyTag: "section",
      transitionEffect: "slide",
       stepsOrientation: "vertical",
       onFinished: function () {
                submitVerticalForm();
            }, });
    });

    function submitVerticalForm(){
        const company_kyc_data  =$('#company_kyc').serialize();
        const company_location  =$('#company_location').serialize();
        const company_personel  =$('#company_personel').serialize();

        const combinedFormData = company_kyc_data + '&' + company_location + '&' + company_personel;
        $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
        $.ajax({
        type:'POST',
        url:" {{ route('companies.store') }}",
        data :combinedFormData,
        success:function(response){
            console.log(response);
            $('#reg_alert').html('<div class="alert alert-success">'+response.message+'</div>');
        setTimeout(function(){
         window.location="{{ route('companies.index')}}";
      },500);
      },
      error:function(response){
          console.log(response.responseText);
          if (jQuery.type(response.responseJSON.errors) == "object") {
            $('#reg_alert').html('');
          $.each(response.responseJSON.errors,function(key,value){
              $('#reg_alert').append('<div class="alert alert-danger">'+value+'</div>');
          });
          } else {
             $('#reg_alert').html('<div class="alert alert-danger">'+response.responseJSON.errors+'</div>');
          }
      },
      beforeSend : function(){
                   $('#update_btn').html('<i class="fa fa-spinner fa-pulse fa-spin"></i> Loading...........');
                   $('#update_btn').attr('disabled', true);
              },
              complete : function(){
                $('#update_btn').html('<i class="fa fa-edit"></i> Update');
                $('#update_btn').attr('disabled', false);
              }
      });
    }

    
 </script>
    
@endpush