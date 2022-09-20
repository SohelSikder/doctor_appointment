
@extends('layouts.master')
@section('home_content')

<div class="page-content">
            
           
            <!-- Banner Section -->
            <section class="aon-banner-wrap">
                <div class="aon-banner-row">
                    <div class="container">
                        <div class="row">
                            <!--Left Section-->
                            <div class="col-lg-6 aon-banner-colLeft">
                                <div class="aon-banner-pic">
                                    <img src="{{asset('fontend/images/banner/doctor.png')}}" alt=""/>
                                </div>
                                <div class="aon-banner-bg">
                                    <span class="star-one">+</span>
                                    <span class="star-two animte-pluse2">+</span>
                                    <span class="star-three animte-pluse2">+</span>
                                    <span class="star-four animte-pluse">+</span>
                                </div>
                            </div>
                            <!--Right Section-->
                            <div class="col-lg-6 aon-banner-colRight d-flex align-items-center">
                                <div class="aon-banner-right">
                                    <h2 class="aon-banner-heading">Your Trust is Our Greatest <span>Incentive</span>!</h2>
                                    <div class="aon-banner-text">There are many variations of passages of worem Ipsum available, but the majority have suffered alteration in some form,</div>
                                    <div class="aon-banner-bottom">
                                        <div class="row">
                                            <div class="col-sm-6">
                                              <div class="aon-banner-bot-col d-flex mb-4">
                                                <div class="aon-banner-bot-icon">
                                                    <img src="{{asset('fontend/images/banner/icon1.png')}}"  alt=""/>
                                                </div>
                                                <div class="aon-banner-bot-text">
                                                    <strong>Doctor</strong>
                                                    <span>Book an appointment</span>
                                                </div> 
                                              </div> 
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="aon-banner-bot-col d-flex mb-4">
                                                <div class="aon-banner-bot-icon">
                                                    <img src="{{asset('fontend/images/banner/icon2.png')}}" alt=""/>
                                                </div>
                                                <div class="aon-banner-bot-text">
                                                    <strong>Consult</strong>
                                                    <span>Consult with top doctors</span>
                                                </div> 
                                              </div> 
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="aon-banner-bot-col d-flex mb-4">
                                                <div class="aon-banner-bot-icon">
                                                    <img src="{{asset('fontend/images/banner/icon3.png')}}" alt=""/>
                                                </div>
                                                <div class="aon-banner-bot-text">
                                                    <strong>Pharmacy</strong>
                                                    <span>Medicines & health products</span>
                                                </div> 
                                              </div> 
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="aon-banner-bot-col d-flex mb-4">
                                                <div class="aon-banner-bot-icon">
                                                    <img src="{{asset('fontend/images/banner/icon4.png')}}"  alt=""/>
                                                </div>
                                                <div class="aon-banner-bot-text">
                                                    <strong>Diagnostics</strong>
                                                    <span>Book tests & checkups</span>
                                                </div> 
                                              </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Banner Section End -->  
          
          
    
            <!-- Team Section -->
            <section class="aon-med-team-area aon-med-team-area1 bg-light-gray">
                <div class="container">
    
                    <!--Title Section Start-->
                    <div class="section-head center">
                        <span class="aon-sub-title">Team</span>
                        <h2 class="aon-title">Top Rated Doctors</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry the standard dummy text ever since the  when an printer took.</p>
                    </div>
                    <!--Title Section End-->
    
                    <div class="section-content">
                        <div class="aon-med-team-section">
                            <div class="row">
                            @foreach($doctor as $data)
                            
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
                            <div class="aon-addmore-btn-section">
                               
                                <a href="{{route('doctors')}}" type="button" class="btn btn-primary">View All Doctors</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- Team Section End -->
    
            <!-- Service Categories Section -->
            <section class="aon-med-srv-cat-area bg-white">
                <div class="container">
    
                    <!--Title Section Start-->
                    <div class="section-head center">
                        <span class="aon-sub-title">Categories</span>
                        <h2 class="aon-title">Top Searched Specialties</h2>
                        <p> You Can Find Here A Specialist Doctor As Par Your Problem  </p>
                    </div>
                    <!--Title Section End-->
                    
                    <div class="section-content">

                            <div class="aon-med-srv-cat-section">
                            
                               <ul class="justify-content-center">
                           
                               @foreach($specialist as $data)
                                   <li>
                                       <!--one-->
                                       <div class="aon-med-sevices-cat aon-icon-effect">
                                           <div class="media">
                                               <span class="aon-icon">
                                                   <img src="{{asset('/fontend/images/s-category/1.png')}}" alt="">
                                               </span>
                                           </div>
                                           <div class="aon-med-serices-cat-info">
                                               
                                               
                                               <h4><a href="{{url('/specialist',$data->id)}}">{{$data->name}}</a></h4>
                                               <p>24 listing</p>
                                           </div>
                                       </div>
                                   </li>
                                   @endforeach
                               
                               </ul> 
                            
                            </div>
                           
                            <div class="aon-addmore-btn-section">
                                <a href="{{route('All_Specialist')}}" class="aon-addplus"><i class="feather-plus"></i></a>
                            </div>
                        </div>
                        
                </div>
            </section>
            <!-- Service Categories End -->
                
                
           <!-- Working Section -->
           
           <!-- Working Categories End --> 
                
            
            <!-- Appointment Section -->
            <section class="aon-med-appoint-area">
                <div class="container">
    
                    <!--Title Section Start-->
                    <div class="section-head center white">
                        <span class="aon-sub-title">Registration</span>
                        <h2 class="aon-title">Want to Make an Appointment Easily</h2>
                        <p>Regain your health and mobility. Leave your pain behind. Do the things you love. 
                            Our team of health professionals is dedicated to providing you with the best medical solutions for your injury or condition. Our specialists collaborate to find pain treatments </p>
                            <a href="{{route('doctors')}}" class="site-button">Book Now</a>
                    </div>
                    <!--Title Section End-->
                    <div class="section-content">
                       
                        <div class="media animate-v">
                            <img src= "{{asset('/fontend/images/heart.png')}}" alt="">
                        </div>
                       
                    </div>
                    
                </div>
            </section>
            <!-- Appointment Categories End --> 
    
           
            <!-- Achivment Section -->
            <section class="aon-med-help-area bg-light-gray">
                <div class="container">
                    <div class="section-content">
                        <div class="aon-med-help-section">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6">
                                    <div class="aon-med-help-media shine-hover">
                                        <div class="media curve-left animate-curve">
                                            <div class="shine-box zoom-box">
                                                <img src="{{asset('/fontend/images/personal.jpg')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="aon-med-help-media-info">
                                        <h2 class="aon-title">We Can Help You Find <span> Specialist Doctor</span></h2>
                                        <p>You can find Best specialist doctor from here.
                                        </p>
                                        <div class="aone-find-doc">
                                            <form>
                                                <input type="text" class="form-control" placeholder="Find Doctors & Dentist">
                                                <button type="button"><i class="feather-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Achivment section End --> 
            
            <!-- Statics Section -->
            <section class="aon-med-statics-area bg-white">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="aon-med-static-section aon-icon-effect">
                                    <div class="media">
                                        <span class="aon-icon"><img src="{{asset('/fontend/images/statics-icon/1.png')}}" alt="#"></span>
                                    </div>
                                    <div class="counter-area"><span class="counter">432</span>+</div>
                                    <div class="aon-med-static-name">Doctor</div>
                                </div>
                            </div>
    
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="aon-med-static-section aon-icon-effect">
                                    <div class="media">
                                        <span class="aon-icon"><img src="{{asset('fontend/images/statics-icon/2.png')}}" alt="#"></span>
                                    </div>
                                    <div class="counter-area"><span class="counter">127</span>+</div>
                                    <div class="aon-med-static-name">Customers</div>
                                </div>
                            </div>
    
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="aon-med-static-section  aon-icon-effect">
                                    <div class="media">
                                        <span class="aon-icon"><img src="{{asset('fontend/images/statics-icon/3.png')}}" alt="#"></span>
                                    </div>
                                    <div class="counter-area"><span class="counter">752</span>+</div>
                                    <div class="aon-med-static-name">Hospital</div>
                                </div>
                            </div>
    
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="aon-med-static-section  aon-icon-effect">
                                    <div class="media">
                                        <span class="aon-icon"><img src="{{asset('fontend/images/statics-icon/4.png')}}" alt="#"></span>
                                    </div>
                                    <div class="counter-area"><span class="counter">432</span>+</div>
                                    <div class="aon-med-static-name">Labs</div>
                                </div>
                            </div>
    
                        </div>
                    </div>
                </div>
            </section>
            <!-- Statics Section End -->             
            
            <!-- Faq Section -->
           <section class="aon-med-faq-area ">
            <div class="container">
    
                <!--Title Section Start-->
                <div class="section-head center">
                    <span class="aon-sub-title">FAQs for Patients</span>
                    <h2 class="aon-title" style="color:white;" >Frequently Ask Questions?</h2>
                    
                </div>
                <!--Title Section End-->
    
                <div class="section-content">
                    <div class="aon-med-faq-section">
                        <div class="accordion aon-med-faq" id="sf-faq-accordion">
                            <!--One-->
                            <div class="accordion-item">
    
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#FAQ1" aria-expanded="false" >
                                    Can I book an appointment behalf or someone else?
                                </button>
    
                                <div id="FAQ1" class="accordion-collapse collapse" data-bs-parent="#sf-faq-accordion">
                                    <div class="accordion-body">
                                    Best service are provide us. simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.
                                    </div>
                                </div>
    
                            </div>
    
                            <!--Two-->
                            <div class="accordion-item">
                              
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#FAQ2" aria-expanded="false">
                                    Do I need a referral to see a Physiotherapist?
                                </button>
    
                                <div id="FAQ2" class="accordion-collapse collapse"  data-bs-parent="#sf-faq-accordion">
                                    <div class="accordion-body">
                                    Best service are provide us. simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.
                                    </div>
                                </div>
    
                            </div>
    
                            <!--Three-->
                            <div class="accordion-item">
                                
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#FAQ3" aria-expanded="false">
                                    Can I book an appointment behalf or someone else?
                                </button>
    
                                <div id="FAQ3" class="accordion-collapse collapse"  data-bs-parent="#sf-faq-accordion">
                                    <div class="accordion-body">
                                    Best service are provide us. simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.
                                    </div>
                                </div>
                            </div>
    
                            <!--Four-->
                            <div class="accordion-item">
                                
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#FAQ4" aria-expanded="false">
                                    Do you have venue option for appointments?
                                </button>
    
                                <div id="FAQ4" class="accordion-collapse collapse"  data-bs-parent="#sf-faq-accordion">
                                    <div class="accordion-body">
                                    Best service are provide us. simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.
                                    </div>
                                </div>
                            </div>
    
                            <!--Five-->
                            <div class="accordion-item">
                                
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#FAQ5" aria-expanded="false">
                                    Can I book an appointment behalf or someone else?
                                </button>
    
                                <div id="FAQ5" class="accordion-collapse collapse"  data-bs-parent="#sf-faq-accordion">
                                    <div class="accordion-body">
                                    Best service are provide us. simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.
                                    </div>
                                </div>
                            </div>
    
                            <!--Six-->
                            <div class="accordion-item">
                                
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#FAQ6" aria-expanded="false">
                                    Will I need a referral to see a Physiotherapist?
                                </button>
    
                                <div id="FAQ6" class="accordion-collapse collapse"  data-bs-parent="#sf-faq-accordion">
                                    <div class="accordion-body">
                                    Best service are provide us. simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.
                                    </div>
                                </div>
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
           </section>
           <!-- Faq Categories End -->

            <!-- Latest Blog -->
            <section class="aon-med-blog-area">
                <div class="container">
                    
                    <!--Title Section Start-->
                    <div class="section-head center">
                        <span class="aon-sub-title">Blog</span>
                        <h2 class="aon-title">Latest News & Articles</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry the standard dummy text ever since the  when an printer took.</p>
                    </div>
                    <!--Title Section End-->
                    
    
                    <div class="section-content">
                        <div class="aon-med-blog-section">
                            <div class="row d-flex justify-content-center">
                                <!-- COLUMNS 1 -->
                                @foreach($posts as $post)
                                <div class="col-lg-4 col-md-6">
                                    <div class="aon-med-blog-style-1 shine-hover">
                                        <div class="post-bx">
                                            <!-- Content section for blogs start -->
                                            <div class="post-thum shine-box"> 
                                                <img title="title" alt="" src="{{asset('fontend/images/blog/blog-grid/1.jpg')}}">
                                            </div>
                                            <div class="post-info">
    
                                                <div class="post-date">
                                                    <span class="date-dd">18</span>
                                                    <span>Aug</span>
                                                    <span>2022</span>
                                                </div> 
    
                                                <div class="post-meta">
                                                    <ul>
                                                        <li class="post-author"><i class="feather-user"></i> By <a href="#">Admin</a></li>
                                                        <li class="post-comment"><i class="feather-message-square"></i> 8 Comment</li>
                                                    </ul>
                                                </div>
    
                                                <div class="post-text">
                                                    <h4 class="post-title">
                                                    <a href="{{url('Details/'.$post->id)}}">
 {{$post->title}}</a>
                                                    </h4>
                                                    <p>{{$post->description;}}</p>
                                                    <a href="blog-detail.html" class="site-btn-link">Read More</a>
                                                </div>
    
                                            </div>
                                            <!-- Content section for blogs end -->
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- COLUMNS 2 -->
                                
                            </div>
                        </div>
                    </div>
    
                </div>
            </section>
            <!-- Latest Blog End -->
                 
                
                
            </div>
            @endsection