@extends('layouts.master')
<link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}">
@section('contents')
           

    <!--Services One Start-->
    <section class="services-one" style="padding-top: 30px !important">
    
    <div class="services-one__bottom">
        <div class="services-one__container">
            <form action="" id="user_auth">
                <div class="form-group row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-6">
                        <label for="">Username</label>
                        <input type="email" name="username" placeholder="write username....." class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-6">
                        <label for="">Password</label>
                        <input type="password" name="password" placeholder="write password......." class="form-control" required>
                    </div>
                </div>
                <div class="form-group row" style="margin-top: 5px">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-6" id="user_auth_alert">
                    </div>
                </div>
                <div class="form-group row" style="margin-top: 5px">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-6" >
                        <button type="submit" id="user_btn" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                </div>
            </form>
           
           
        </div>
    </div>
</section>
<!--Services One End-->
    
    
@endsection
@push('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('#user_auth').on('submit',function(e){
            e.preventDefault();
         var dataz =$(this).serialize();
            $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
            });
  
        $.ajax({
        type:'POST',
        url:"{{ route('authentication')}}",
        data:dataz,
        success:function(response){
            console.log(response);
            $.notify(response.message, "success");
          setTimeout(function(){
            window.location.href=response.url;
          },500);
         
        },
        error:function(response){
            console.log(response.responseText);
            if (jQuery.type(response.responseJSON.errors) == "object") {
              $('#user_auth_alert').html('');
            $.each(response.responseJSON.errors,function(key,value){
                $('#user_auth_alert').append('<div class="alert alert-danger">'+value+'</div>');
            });
            } else {
               $('#user_auth_alert').html('<div class="alert alert-danger">'+response.responseJSON.errors+'</div>');
            }
        },
        beforeSend : function(){
            $('#user_btn').html('<span class="fas fa-spinner fas-pulse fas-spin"></span> Authenticating ---');
            $('#user_btn').attr('disabled', true);
        },
       complete : function(){
            $('#user_btn').html('<span class="fas fa-sign-in-alt"></span> Sign In');
            $('#user_btn').attr('disabled', false);
        }
        });
    });
    });
  </script>
    
@endpush