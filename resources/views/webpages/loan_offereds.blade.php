@extends('layouts.master')
<link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}">
@section('contents')
           

    <!--Services One Start-->
    <section class="services-one" style="padding-top: 30px !important">
    <div class="services-one__top">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 text-center">
                    <div class="services-one__top-left">
                        <div class="section-title text-left">
                            <div class="section-sub-title-box">
                                <p class="section-sub-title">{{ $title}}</p>
                                <div class="section-title-shape-1">
                                    <img src="{{ asset('assets/images/shapes/section-title-shape-1.png')}}" alt="">
                                </div>
                                <div class="section-title-shape-2">
                                    <img src="{{ asset('assets/images/shapes/section-title-shape-2.png')}}" alt="">
                                </div>
                            </div>
                            <h2 class="section-title__title" style="font-size: 38px !important">We bring together Lenders and borrowers</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="services-one__bottom">
        <div class="services-one__container">
            <div class="row" id="loan_offered_container">
                <div class="col-md-12" style="margin-bottom: 10px">
                    <div class="row">
                        <div class="col-md-4">
                            <button id="refineButton"><span class="fa fa-search"></span> Refine Search</button>
                        </div>
                        <div class="col-md-8">
                            <p>All lenders</p>
                        </div>

                    </div>
                    <div class="row" id="searchInputs" style="display: none">
                        <div class="col-md-6">
                            <label for=""> Amount</label>
                            <input type="text" class="form-control" placeholder="Write amount ......">
                        </div>
                        <div class="col-md-6">
                            <label for=""> Plan</label>
                            <select name="" class="form-control" id="">
                                <option value="" selected> Please choose plan</option>
                                @for ($i = 1; $i < 31; $i++)
                                   <option>{{ $i }}</option> 
                                @endfor
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for=""> Rate</label>
                            <input type="text" class="form-control" placeholder="Write Rate ......">
                        </div>
                        <div class="col-md-12 text-center" style="margin-top: 10px">
                            <button class="btn btn-primary"><span class="search-toggler icon-magnifying-glass"> </span>Update Search</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    @for ($i = 1; $i < 6; $i++)
                    <div id="container" style="margin-top: 10px">
                        <div id="topContainer">
                            <div>
                                <h4 id="containerHeader">Bank Name</h4>
                            </div>
                            <div>
                                <button class="btn btn-primary">
                                    <span class="search-toggler icon-magnifying-glass" id="buttonText"> </span> View All
                                </button>
                            </div>
                        </div>
                        <div id="middleContainer" class="middleContainer" data-index="{{ $i}}">
                            <div id="leftMiddleContainer">
                                <p id="middleTitle">What offered</p>
                            </div>
                            <div id="rightMiddleContainer">
                                <span class="far fa-arrow-alt-circle-down" id="iconStyle"></span>
                            </div>
                        </div>
                        <div id="bottomContainer"> 
                            <div>
                                <ul style="list-style-type: none; margin: 0; padding: 0">
                                    <li><span class="fa fa-close"></span> <span id="listTextStyle">Requirement 1</span> </li>
                                    <li><span class="fa fa-check" style="color: #025FC9; font-size: 12px"></span> <span id="listTextStyle">Requirement 2</span> </li>
                                    <li><span class="fa fa-check" style="color: #025FC9; font-size: 12px"></span> <span id="listTextStyle">Requirement 3</span> </li>
                                </ul>
                            </div>
                            <div>
                                <ul style="list-style-type: none; margin: 0; padding: 0">
                                    <li><span class="fa fa-close"></span> <span id="listTextStyle">Requirement 1</span> </li>
                                    <li><span class="fa fa-check" style="color: #025FC9; font-size: 12px"></span> <span id="listTextStyle">Requirement 2</span> </li>
                                    <li><span class="fa fa-check" style="color: #025FC9; font-size: 12px"></span> <span id="listTextStyle">Requirement 3</span> </li>
                                </ul>
                            </div>
                            <div id="rateBottomContainer">
                                <p id="rateStyle">4.8%</p>
                                <p id="rateTextStyle">Rate per Variable</p>
                            </div>
                            <div id="rateBottomContainer">
                                <p id="rateStyle">4.8%</p>
                                <p id="rateTextStyle">Rate per Variable</p>
                            </div>
                            <div id="rateBottomContainer">
                                <p id="rateStyle">4.8%</p>
                                <p id="rateTextStyle">Comparison</p>
                            </div>
                            {{-- <div>4</div> --}}
                            {{-- <div>5</div> --}}
                        </div>
                        <div id="hiddenContainer" class="hiddenContainer" style="display: none" data-index="{{ $i }}"> 
                            <div style="width: 60%">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                     Repellendus beatae molestias officiis nemo modi vero amet 
                                     ad ducimus, dolorum necessitatibus reprehenderit facere?
                                      Recusandae reprehenderit laboriosam earum porro fugiat, aliquam tenetur!</p>
                            </div>
                            <div id="buttonContainer">
                                <button id="hiddenContainerButton">View More Details</button>
                            </div>
                        </div>
                    </div> 
                    @endfor
                   
                  
                </div>
            </div>
           
        </div>
    </div>
</section>
<!--Services One End-->
    
    
@endsection
@push('scripts')
<script>
    $('#refineButton').on('click',function(){
        $('#searchInputs').toggle();
    });

    $('.middleContainer').on('click',function(){
    var index = $(this).data("index");
    $(".hiddenContainer[data-index=" + index + "]").toggle();
    });
</script>
    
@endpush