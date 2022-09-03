
@extends('layouts.master')
@section('home_content')
<div class="aon-pro-banner-content bg-dark">
</div>

<div class="container">
    <div class="row">
    @foreach($doctor as $data)
    <div class="col-lg-3 mt-3">
                            <div class="sf-appoint-doc-wrap">


                                <div class="sf-appoint-doc-info">
                                    <img src="{{asset('fontend/images/team/pic1.jpg')}}" alt="">
                                    <p>{{$data->specialist->name}}</p>
                                    <h4>{{$data ->name}}</h4>
                                    <p>Clinic</p>
                                    <h4>Doe Clinic</h4>
                                    <ul class="sf-appint-control">
                                        <li>
                                            <a href="javascript:;">
                                                <span><i class="feather-phone-call"></i></span>
                                                <p>Call Clinic</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" class="give-feedback-btn">
                                                <span><i class="feather-file-text"></i></span>
                                                <p>Give Feedback</p>
                                            </a>
                                        </li>
                                    </ul>
                                </div> 
                                <div class="sf-appoint-doc-date">
                                    <p>Date and Time</p>
                                    <h5>Thursday, 24 December , 06:26 PM</h5>
                                    <a href="#" class="site-button-link"><i class="fa fa-pencil"></i> Edit Date & Time</a>
                                </div>
                            </div>
                        </div>
                        
                        @endforeach
    </div>
   
</div>

                        
    @endsection