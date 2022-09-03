@extends('layouts.master')
@section('home_content')
<div class="aon-pro-banner-content bg-dark">
</div>
<div class="container">
   
   <div class="panel-group">
   <div class="panel panel-primary">
     <form action="{{route('Booking_Form')}}" class="form-horizontal" id="multistep_form" method="POST" enctype="multipart/form-data">
         @csrf
         <input type="hidden" name="doctors_id"  value="{{$doctor->id}}">
         <!-- Form One-->
           <fieldset id="account">
             <div class="panel-body">
                 <!-- Search Bar Home START -->
                   <div class="aon-booking-wrap d-flex align-items-center justify-content-center">
                     <div class="aon-booking-form">
                           <div class="row">
                               <div class="col-md-12">
                                   <a href="index.html" class="site-button-link btn-back-to-home">Back to Home</a>
                                   <div class="aon-form-logo">
                                       <img src="{{asset('fontend/images/logo-dark.png')}}" alt=""/>
                                   </div>
                                   
                               </div>
                               
                               <div class="col-md-12">
                                   <div class="aon-form-top d-flex justify-content-between align-items-center">
                                       <div class="aon-form-top-left d-flex">
                                           <div class="aon-form-doc-pic">
                                               <img src="{{asset('fontend/images/team/pic1.jpg')}}" alt=""/>
                                           </div>
                                           <div class="aon-form-doc-info">
                                               <strong>{{$doctor->name}}</strong>
                                               <span>{{$doctor->id}}</span>
                                           </div>                                         
                                           
                                       </div>
                                       <div class="aon-form-top-right">
                                           <div class="aon-form-consul-free">
                                               <strong>Consultancy Fee</strong>
                                               <span>$124</span>
                                           </div>
                                       </div>
                                   </div>
                               </div> 
                               
                               <div class="col-md-12">
                                   <h2 class="aon-form-title">Book an appointment</h2>
                               </div>
                               <div class="col-md-12">
                                   <div class="form-group">
                                   
                                       
                                       <div class="aon-inputicon-box mt-3 mb-3">
                                           <input class="form-control sf-form-control" name="name"  type="text" placeholder="Name">
                                           <i class="fa-solid fa-person-simple"></i>
                                       </div>
                                       <div class="aon-inputicon-box mt-3 mb-3">
                                           <input class="form-control sf-form-control" name="phone_number" type="number" placeholder="Phone">
                                           <i class="aon-input-icon fa fa-award"></i>
                                       </div>
                                       <div class="aon-inputicon-box mt-3 mb-3">
                                           <input class="form-control sf-form-control" name="email" type="email" placeholder="Email">
                                           <i class="aon-input-icon fa fa-eye"></i>
                                       </div>
                                       <div class="aon-inputicon-box mt-3 mb-3">
                                           <input class="form-control sf-form-control" name="booking_date" type="date" placeholder="Date of Birth">
                                           <i class="aon-input-icon fa fa-eye"></i>
                                       </div>
                                      
                                   </div>
                               </div>
                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label >What's the reason for your viisit?</label>
                                       <div class="aon-inputicon-box"> 
                                          <input class="form-control sf-form-control" type="text" name="visiting_reason" id="">
                                           <i class="aon-input-icon fa fa-eye"></i>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label >Has the paitient seen this doctor before?</label>
                                       <div class="sf-radio-row d-flex">
                                           <div class="checkbox sf-radio-checkbox col-6">
                                               <input id="td111" name="seen_before" value="No" type="radio">
                                               <label for="td111">No</label>
                                           </div>
                                           <div class="checkbox sf-radio-checkbox col-6">
                                               <input id="td55" name="seen_before" value="Yes" type="radio">
                                               <label for="td55">Yes</label>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label >What's the reason for your viisit?</label>
                                       <div class="aon-inputicon-box"> 
                                        <input  class="form-control sf-form-control" valu="document"type="file" name="document" id="">
                                           <i class="aon-input-icon fa fa-eye"></i>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-md-12">
                               <button id="next1" type="submit" class="next site-button w-100 mb-3" name= 'submit' >
                                 Continue Booking <i class="feather-arrow-right"></i> 
                               </button>
                           </div>

                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label >Doctor available time</label>
                                       <div class="aon-calen-box">
                                           <div class="tab-content" id="pills-tabContent">
                                           <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                               <!-- Timing slots start-->
                                                   <div class="sf-doc-timing-slots">
                                                       <div class="row">
                                                           <div class="col-lg-6">
                                                               <div class="sf-doc-timing-slots-detail">
                                                                   <span>9AM - 12PM</span>
                                                               </div>
                                                           </div>
                                                           <div class="col-lg-6">
                                                               <div class="sf-doc-timing-slots-detail">
                                                                   <span>9AM - 12PM</span>
                                                               </div>
                                                           </div>
                                                           <div class="col-lg-6">
                                                               <div class="sf-doc-timing-slots-detail">
                                                                   <span>9AM - 12PM</span>
                                                               </div>
                                                           </div>
                                                           <div class="col-lg-6">
                                                               <div class="sf-doc-timing-slots-detail">
                                                                   <span>9AM - 12PM</span>
                                                               </div>
                                                           </div>
                                                           <div class="col-lg-6">
                                                               <div class="sf-doc-timing-slots-detail">
                                                                   <span>9AM - 12PM</span>
                                                               </div>
                                                           </div>
                                                           <div class="col-lg-6">
                                                               <div class="sf-doc-timing-slots-detail">
                                                                   <span>9AM - 12PM</span>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       </div>
                                                   </div>
                                               <!-- Timing slots list End-->
                                           </div>
                                       </div>                                       
                                       </div>
                               </div>
                           </div>                             
                     </div>
                   </div>
                 <!-- Search Bar Home END --> 
             </div>
           </fieldset>
       </form>
     </div>
   </div>
</div>
@endsection