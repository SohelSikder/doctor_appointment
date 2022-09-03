@extends('layouts.master')
@section('home_content')
 






<div class="aon-pro-banner-content bg-dark">
</div>

<section class=" bg-light-gray">
                <div class="container">
                    <!--search-->
                    <div class="aon-search1-bar-wrap">
              <div class="container">
                 <div class="aon-search1-area">
                     <div class="aon-search1-row">
                         <ul class="nav aon-search1-tabs d-flex">
                             <li><a href="#hospital-tab" class="nav-link active" data-bs-toggle="pill"><i class="fa fa-hospital-o"></i> Hospital</a></li>
                             <li><a href="#doctor-tab" class="nav-link" data-bs-toggle="pill"><i class="fa fa-user-md"></i> Doctor</a></li>
                             <li><a href="#labs-tab" class="nav-link" data-bs-toggle="pill"><i class="fa fa-thermometer-0"></i> Labs</a></li>
                         </ul>
                         
                         <!-- Tab panes -->
                        <div class="tab-content">
                          <div class="tab-pane container active" id="hospital-tab">
                                <form class="aon-search1-form">
                                    <div class="aon-search1-left">
                                        <div class="aon-search1-table">
                                            <div class="aon-search1-col aon-search-col">
    
                                                <div class="aon-inputicon-box aon-inputicon-bg">
                                                    <i class="aon-input-icon feather-plus-square"></i>
                                                    <label>Action</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option>Hospital</option>
                                                        <option>Clinice</option>
                                                        <option>Doctor</option>
                                                        <option>Medical</option>
                                                    </select>
    
                                                </div>
                                            </div>
    
                                            <div class="aon-search1-col aon-category-col">
                                                <div class="aon-inputicon-box aon-inputicon-bg">
                                                    <i class="aon-input-icon feather-map-pin"></i>
                                                    <label>Date</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option>Country</option>
                                                        <option>India</option>
                                                        <option>Japan</option>
                                                        <option>US</option>
                                                    </select>
    
                                                </div>
                                            </div>
                                            <div class="aon-search1-col aon-category-col">
                                                <div class="aon-inputicon-box aon-inputicon-bg">
                                                    <i class="aon-input-icon feather-map-pin"></i>
                                                    <label>Country</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option>City</option>
                                                        <option>India</option>
                                                        <option>Japan</option>
                                                        <option>US</option>
                                                    </select>
    
                                                </div>
                                            </div>
                                            <div class="aon-search1-col aon-category-col">
                                                <div class="aon-inputicon-box aon-inputicon-bg">
                                                    <i class="aon-input-icon feather-map-pin"></i>
                                                    <label>City</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option>Select Location</option>
                                                        <option>India</option>
                                                        <option>Japan</option>
                                                        <option>US</option>
                                                    </select>
                                                </div>
                                            </div>                       
                                        </div> 
                                    </div>
                                    <div class="aon-search1-right">
                                        <div class="aon-search1-col aon-search-btn">
                                            <button class="aon-search1-btn site-button" type="submit">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                          <div class="tab-pane container fade" id="doctor-tab">
                                <form class="aon-search1-form">
                                    <div class="aon-search1-left">
                                        <div class="aon-search1-table">
                                            <div class="aon-search1-col aon-search-col">
    
                                                <div class="aon-inputicon-box aon-inputicon-bg">
                                                    <i class="aon-input-icon feather-plus-square"></i>
                                                    <label>Action</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option>Hospital</option>
                                                        <option>Clinice</option>
                                                        <option>Doctor</option>
                                                        <option>Medical</option>
                                                    </select>
    
                                                </div>
                                            </div>
    
                                            <div class="aon-search1-col aon-category-col">
                                                <div class="aon-inputicon-box aon-inputicon-bg">
                                                    <i class="aon-input-icon feather-map-pin"></i>
                                                    <label>Date</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option>Country</option>
                                                        <option>India</option>
                                                        <option>Japan</option>
                                                        <option>US</option>
                                                    </select>
    
                                                </div>
                                            </div>
                                            <div class="aon-search1-col aon-category-col">
                                                <div class="aon-inputicon-box aon-inputicon-bg">
                                                    <i class="aon-input-icon feather-map-pin"></i>
                                                    <label>Country</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option>City</option>
                                                        <option>India</option>
                                                        <option>Japan</option>
                                                        <option>US</option>
                                                    </select>
    
                                                </div>
                                            </div>
                                            <div class="aon-search1-col aon-category-col">
                                                <div class="aon-inputicon-box aon-inputicon-bg">
                                                    <i class="aon-input-icon feather-map-pin"></i>
                                                    <label>City</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option>Select Location</option>
                                                        <option>India</option>
                                                        <option>Japan</option>
                                                        <option>US</option>
                                                    </select>
                                                </div>
                                            </div>                       
                                        </div> 
                                    </div>
                                    <div class="aon-search1-right">
                                        <div class="aon-search1-col aon-search-btn">
                                            <button class="aon-search1-btn site-button" type="submit">Search</button>
                                        </div>
                                    </div>
                                </form>
                          </div>
                          <div class="tab-pane container fade" id="labs-tab">
                                <form class="aon-search1-form">
                                    <div class="aon-search1-left">
                                        <div class="aon-search1-table">
                                            <div class="aon-search1-col aon-search-col">
    
                                                <div class="aon-inputicon-box aon-inputicon-bg">
                                                    <i class="aon-input-icon feather-plus-square"></i>
                                                    <label>Action</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option>Hospital</option>
                                                        <option>Clinice</option>
                                                        <option>Doctor</option>
                                                        <option>Medical</option>
                                                    </select>
    
                                                </div>
                                            </div>
    
                                            <div class="aon-search1-col aon-category-col">
                                                <div class="aon-inputicon-box aon-inputicon-bg">
                                                    <i class="aon-input-icon feather-map-pin"></i>
                                                    <label>Date</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option>Country</option>
                                                        <option>India</option>
                                                        <option>Japan</option>
                                                        <option>US</option>
                                                    </select>
    
                                                </div>
                                            </div>
                                            <div class="aon-search1-col aon-category-col">
                                                <div class="aon-inputicon-box aon-inputicon-bg">
                                                    <i class="aon-input-icon feather-map-pin"></i>
                                                    <label>Country</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option>City</option>
                                                        <option>India</option>
                                                        <option>Japan</option>
                                                        <option>US</option>
                                                    </select>
    
                                                </div>
                                            </div>
                                            <div class="aon-search1-col aon-category-col">
                                                <div class="aon-inputicon-box aon-inputicon-bg">
                                                    <i class="aon-input-icon feather-map-pin"></i>
                                                    <label>City</label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option>Select Location</option>
                                                        <option>India</option>
                                                        <option>Japan</option>
                                                        <option>US</option>
                                                    </select>
                                                </div>
                                            </div>                       
                                        </div> 
                                    </div>
                                    <div class="aon-search1-right">
                                        <div class="aon-search1-col aon-search-btn">
                                            <button class="aon-search1-btn site-button" type="submit">Search</button>
                                        </div>
                                    </div>
                                </form>
                          </div>
                        </div>  
                    </div>
                </div>
              </div>
            </div>
    
                    <!--Title Section Start-->
                    <div class="section-head center">
                        <span class="aon-sub-title">Team</span>
                        <h2 class="aon-title">All Doctors</h2>
                       
                    </div>
                    <!--Title Section End-->
    
                    <div class="section-content">
                        <div class="aon-med-team-section">
                            <div class="row">
                            @foreach($doctor as $data)
                                <div class="col-lg-6 col-md-6">
                                    <div class="aon-med-team">
                                        <div class="aon-med-team-pic">
                                            <a href="profile1.html"><img src="{{asset('/fontend/images/team-2/pic1.jpg')}}" alt="#"></a>
                                        </div>
                                        
                                        <div class="aon-med-team-info">
                                            <h4 class="aon-title"><a href="{{url('doctor_profile/'.$data->id)}}">{{$data->name}}</a></h4>
                                            <p class="aon-med-team-discription">{{$data->education}}</p>
                                            <span class="aon-med-team-location"><i class="feather-map-pin"></i>{{$data->address}}</span>
                                            <div class="sf-doc-position mt-4">
                                                  <span>{{$data->specialist->name}}</span> <br><br>
                                            </div>
                                            <!-- <a class="btn btn-success">Details<a> -->
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
                                <a href="javascripr:;" class="aon-addplus"><i class="feather-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
@endsection