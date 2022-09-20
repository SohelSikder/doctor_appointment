@extends('layouts.master')
@section('title')
	{{ ('Search List') . ' | '. env('APP_NAME') }}
@endsection

@section('home_content')
  
<!-- Start of Main -->
<div class="page-content">
            <!--Banner-->
            <div class="aon-page-benner-area">
              <div class="aon-page-banner-row">
                <div class="aon-page-benner-overlay" ></div>
                <div class="sf-banner-heading-wrap">
                  <div class="sf-banner-heading-area">
                    <div class="sf-banner-heading-large">Search Result</div>
                    <div class="sf-banner-breadcrumbs-nav">
                      <ul class="list-inline">
                        <li><a href="{{ route('home') }}"> Home </a></li>
                        <li><a href="#">Search </a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>  
<main class="main">
            <!-- Start of Breadcrumb -->
          
            <!-- End of Breadcrumb -->

            <!-- Start of Page Content -->
            <div class="page-content mb-10">
                
                <div class="container-fluid">
                    <!-- Start of Shop Content -->
                    <div class="shop-content">
                        <!-- Start of Shop Main Content -->
                        <div class="main-content">
                            
                            <div class="product-wrapper row cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                                
                               
                                <div class="section-content p-5">
                        <div class="aon-med-team-section">
                        <div class="section-content">
                        <div class="aon-med-team-section">
                            <div class="row">
                            @foreach($doctors as $data)
                            
                                <div class="col-lg-6 col-md-6">
                                    <div class="aon-med-team">
                                        <div class="aon-med-team-pic">
                                            <a href="profile1.html"><img src="{{asset($data->doc_image)}}" alt="#"></a>
                                        </div>
                                        
                                        <div class="aon-med-team-info">
                                            <h4 class="aon-title"><a href="{{url('doctor_profile/'.$data->id)}}">{{$data->name}}</a></h4>
                                            <p class="aon-med-team-discription">{{$data->education}}</p>
                                            <!--  -->
                                            <span class="aon-med-team-location"><i class="feather-map-pin"></i>{{$data->address}}</span>
                                            <div class="sf-doc-position mt-2">
                                                  <span>{{$data->specialist->name}}</span> <br><br>
                                            </div>
                                            <a href="{{url('doctor_profile/'.$data->id)}}" type="button" class="btn btn-primary">Get Appointment</a>
                                            <!-- <div class="aon-df-rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="aon-df-lable">(124)</span>
                                            </div> -->
                                        </div>
                                    </div>
                                    
                                </div>
                        
                                @endforeach
                            
                            </div>
                            
                        </div>
                    </div>
                            
                        </div>
                    </div>
                                
                               
                            </div>

                            <div class="toolbox toolbox-pagination justify-content-between">
                                <!-- <p class="showing-info mb-2 mb-sm-0">
                                    Showing<span>1-12 of 60</span>Products
                                </p> -->
                                
                            </div>
                        </div>
                        <!-- End of Shop Main Content -->

                        
                    </div>
                    <!-- End of Shop Content -->
                </div>
            </div>
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->

@endsection