            @extends('layouts.master')
            @section('home_content')
            <!-- Content -->
            <div class="page-content">
                        
                        <!--Provider Banner Area -->
                        <div class="aon-pro-benner-area">
                        <div class="aon-pro-banner-row">
                        <div class="aon-pro-banner-content">
                                <div class="sf-doc-pro-card-media">
                                <div class="sf-doc-pr-media-inner">
                                    <img src="{{asset('/fontend/images/pro-card.jpg')}}" alt="">
                                    
                                    <i class="fa fa-check"></i>
                                </div>
                                </div>
                                <div class="aon-doc-pro-card-name">
                                    <h3>{{$doctor->name}}</h3>
                                   
                                    <p>{{$doctor->category}}</p>
                                    <div class="aon-doc-pro-location">{{$doctor->address}}</div>
                                    <div class="aon-doc-pro-conInfo">
                                        <span>{{$doctor->email}}</span>
                                        <span><a href="tel:+415225563256">{{$doctor->phone}}</a></span>
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                        </div>
                        <!--Provider Banner Area End -->
                        
                        <!-- Left & right section -->
                        <div class="aon-profile1-page-wrap p-b90">
                            <div class="container">
                                <div class="row">

                                    <!-- Left Part bar start -->
                                    <div class="col-lg-8">
                                        
                                        <!--Profile Info-->
                                        <div class="sf-doc-full-detail card-shadow-box mb-4" id="aon-about-area">
                                            <div class="massage">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                    <h5>Special Massage:</h5>
                                                    </div>
                                                    <div class="col-md-9">
                                                    <b><marquee>Friday off </marquee></b>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                
                                            <div class="sf-doc-full-detail-head">
                                                <div class="sf-doc-info-wrap">
                                                    <h3>{{$doctor->name}}</h3>
                                                    <div class="sf-doct-info">{{$doctor->education}}</div>
                                                </div>
                                                <div class="sf-doc-position">
                                                  <span>{{$doctor->specialist->name}}</span>
                                                </div>
                                            </div>

                                            <p>{{$doctor->description}} </p>
                                            <ul class="aon-doctorAddto-share m-b0">
                                            <a href="{{url('booking_form',$doctor->id)}}" type="button" class="btn btn-primary">Get Appointment</a>
                                            </ul>
                                            
                                        </div>
                                        <!--Doctor Education-->
                                       
                                        <!--Doctor Education End-->                            
                                    </div>
                                    <!-- Right part start -->
                                    <div class="col-lg-4 rightSidebar  ">


                                        <div class="sf-doc-timeing-card card-shadow-box mb-4">
                                        <ol class="list-group ">
                                            <li class="list-group-item d-flex justify-content-between align-items-start bg-dark">
                                            <div class="ms-1 me-auto">
                                                <div class="fw-bold text-warning">Days</div>
                                                
                                            </div>
                                                <span class="fw-bold text-warning">Time</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="ms-1 me-auto">
                                                <div class="fw-bold">Saturday</div>
                                              
                                                </div>
                                                <span class="fw-bold ">5:30 pm To 80:30 pm</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="ms-1 me-auto">
                                                <div class="fw-bold">Sunday</div>
                                              
                                                </div>
                                                <span class="fw-bold">5:30 pm To 80:30 pm</span>
                                            </li>
                                            </ol>
                                        </div> 
                                    </div>
                                    <!-- Right part END -->      
                                </div>
                            </div>
                        </div> 
                        <!-- Left & right section  END -->
                        </div>
                    <!-- Content END-->
                    @endsection