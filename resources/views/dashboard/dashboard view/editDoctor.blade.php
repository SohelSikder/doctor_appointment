@extends('dashboard.dashboard_master')

@section('home_content')
<!DOCTYPE html>
<html lang="zxx">

<head>

	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="fontend/images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="fontend/images/favicon.png" />
    
    <!-- PAGE TITLE HERE -->
    <title>Doctors Appointment</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">	
    
    <!-- BOOTSTRAP STYLE SHEET -->
    <link  href="{{asset('fontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- FONTAWESOME STYLE SHEET -->
    <link  href="{{asset('fontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Feather STYLE SHEET -->
    <link href="{{asset('fontend/css/feather.css')}}" rel="stylesheet">

    <!-- Font STYLE SHEET -->
    <link href="{{asset('fontend/css/font.css')}}" rel="stylesheet">    
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link href="{{asset('fontend/css/owl.carousel.min.css')}}" rel="stylesheet">
    <!-- SLICK CAROUSEL STYLE SHEET -->
    <link href="{{asset('fontend/css/slick.min.css')}}" rel="stylesheet">
    <!-- SLICK STYLE SHEET -->
    <link href="{{asset('fontend/css/slick-theme.css')}}" rel="stylesheet">
    <!-- Custome scrollbar STYLE SHEET  -->
    <link href="{{asset('fontend/css/jquery.scrollbar.css')}}" rel="stylesheet">  
    <!-- DropZone STYLE SHEET  --> 
    <link href="{{asset('fontend/css/dropzone.css')}}" rel="stylesheet">       
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link href="{{asset('fontend/css/magnific-popup.min.css')}}" rel="stylesheet">
    <!-- FLATICON STYLE SHEET -->
    <link href="{{asset('fontend/css/flaticon.min.css')}}" rel="stylesheet">
    <!-- Lc light box popup -->
    <link href="{{asset('fontend/css/lc_lightbox.css')}}" rel="stylesheet">     
    <!-- Price Range Slider -->
    <link href="{{asset('fontend/css/bootstrap-slider.min.css')}}" rel="stylesheet">
    <!-- Bootstrap-toggle -->
    <link href="{{asset('fontend/css/bootstrap4-toggle.min.css')}}" rel="stylesheet">
    <!-- Bootstrap-datatables -->
    <link href="{{asset('fontend/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <!-- Date-picker -->
    <link href="{{asset('fontend/css/date-picker.css')}}" rel="stylesheet">
    <!-- Full calendar -->
    <link href="{{asset('fontend/css/fullcalendar.min.css')}}" rel="stylesheet">   
    <!-- MAIN STYLE SHEET -->
    <link href="{{asset('fontend/css/style.css')}}" rel="stylesheet">   

</head>

<body>
<!-- <form class="form group" method="POST">
  <div class="form-group" >
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> -->

<div class="container">
   
   <div class="panel-group">
   <div class="panel panel-primary">
     <form action="{{ url('updateDoctor/'.$editDoctor->id) }}" class="form-horizontal" id="multistep_form" method="POST" enctype="multipart/form-data">
         @csrf

         @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif 
         <!-- Form One-->
         <fieldset id="account">
             <div class="panel-body">
                 <!-- Search Bar Home START -->
                   <div class="aon-booking-wrap d-flex align-items-center justify-content-center">
                     <div class="aon-booking-form">
                           <div class="row">
                               <div class="col-md-12">
                                   <a href="{{url('/')}}" class="site-button-link btn-back-to-home" style="margin-top:-30px;">Back to Home</a>
                                   <div class="aon-form-logo" style= "float: left;">
                                       <img src="{{asset('fontend/images/HELLO DOCTOR DARK.png')}}" alt=""/>
                                   </div>
                                   
                               </div>
 
                               <div class="col-md-12 mt-3">
                                   <h2 class="aon-form-title" style=text-align:center;>Update Your Data</h2>
                               </div>
                               <div class="col-md-12">
                                   <div class="form-group">
                                   <label for="" > Enter Your Name </label>
                                       <div class="aon-inputicon-box mt-3 mb-3">
                                      
                                           <input class="form-control sf-form-control" name="name" value="{{$editDoctor->name}}"  type="text" placeholder="Name">
                                           <i class="aon-input-icon fa fa-eye"></i>
                                       </div>
                                       <label for="" > Your Phone </label>
                                       <div class="aon-inputicon-box mt-3 mb-3">
                                       
                                           <input class="form-control sf-form-control" name="phone_number" 
                                           value="{{$editDoctor->phone}}" type="number" >
                                           <i class="aon-input-icon fa fa-eye"></i>
                                       </div>
                                       <label for="" > Enter Your Email </label>
                                       <div class="aon-inputicon-box mt-3 mb-3">
                                      
                                         
                                           <input class="form-control sf-form-control" type="email" value="{{$editDoctor->email}}" name="email" id="" placeholder="Email">
                                          
                                           <i class="aon-input-icon fa fa-eye"></i>
                                       </div>
                                      
                                       <!-- <div class="aon-inputicon-box mt-3 mb-3 ">
                                           <input class="form-control sf-form-control" name="specialist"  type="text" placeholder="Specialist">
                                           <i class="fa-solid fa-person-simple"></i>
                                        
                                       </div> -->
                                       <label for="" > Specialist</label>
                                       <div class="aon-inputicon-box mt-3 mb-3">
                                       <select class="form-select form-select-sm form-control sf-form-control"value="{{$editDoctor ->specialist_id}}" name="specialist_id" aria-label=".form-select-sm example">
                                          <option selected>Select Specialist</option>
                                          @foreach($specialist as $data)
                    
                                          <option value="{{$data->id}}">{{$data->name}}</option>
                                          @endforeach
                                          
                                        </select>
                                        <i class="aon-input-icon fa fa-eye"></i>
                                       </div>
                                       <label for="" > Enter Your Address </label>
                                       <div class="aon-inputicon-box mt-3 mb-3">
                                           <input class="form-control sf-form-control" name="address" value="{{$editDoctor->address}}" type="text" placeholder="Address ">
                                           <i class="aon-input-icon fa fa-eye"></i>
                                       </div>
                                       <label for="" > Enter Your Education</label>
                                       <div class="aon-inputicon-box mt-3 mb-3">
                                           <input class="form-control sf-form-control" name="education" value="{{$editDoctor->education}}" type="ecucation" placeholder="Education ">
                                           <i class="aon-input-icon fa fa-eye"></i>
                                       </div>

                                       <label for="" >Date Of Birth</label>
                                       <div class="aon-inputicon-box mt-3 mb-3">
                                      
                                           <input class="form-control sf-form-control" name="date_of_birth" value="{{$editDoctor->date_of_birth}}" type="date" placeholder="Date of Birth">
                                           <i class="aon-input-icon fa fa-eye"></i>
                                       </div>
                                       <label for="" >Consultant fee  </label>
                                       <div class="aon-inputicon-box mt-3 mb-3">
                                      
                                           <input class="form-control sf-form-control" name="visit" value="{{$editDoctor->price}}" type="text" placeholder="Enter Consultant Fee ">
                                           <i class="aon-input-icon fa fa-eye"></i>
                                       </div>
                                       <label for="" > Doctor details </label>
                                       <div class="aon-inputicon-box mt-3 mb-3">
                                      
                                           
                                           <textarea class="form-control" name="description" value="{{$editDoctor->description}}" placeholder="Doctor details" type="text" rows="3"></textarea>
                                           <i class="aon-input-icon fa fa-eye"></i>
                                       </div>
                                   </div>
                               </div>

                               <div class="col-md-12">
                                   <div class="form-group">
    
                                       <div class="aon-inputicon-box"> 
                                        <input  class="form-control sf-form-control" valu="doc_img"type="file" name="doc_image" id="">
                                           <i class="aon-input-icon fa fa-eye"></i>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-md-12">
                               <button id="next1" type="submit" class="next site-button w-100 mb-3" name= 'submit' >
                                 Update Doctor Info <i class="feather-arrow-right"></i> 
                               </button>
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
<!-- JAVASCRIPT  FILES ========================================= --> 
<script  src="{{asset('fontend/js/jquery-3.6.0.min.js')}}"></script><!-- JQUERY.MIN JS -->
<script  src="{{asset('fontend/js/popper.min.js')}}"></script><!-- POPPER.MIN JS -->
<script  src="{{asset('fontend/js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->
    
<script  src="{{asset('fontend/js/jquery.bootstrap-touchspin.js')}}"></script><!-- FORM JS -->
<script  src="{{asset('fontend/js/bootstrap-slider.min.js')}}"></script><!-- BOOTSTRAP Slider --> 
<script  src="{{asset('fontend/js/magnific-popup.min.js')}}"></script><!-- MAGNIFIC-POPUP JS -->
<script  src="{{asset('fontend/js/waypoints.min.js')}}"></script><!-- WAYPOINTS JS -->
<script  src="{{asset('fontend/js/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
<script  src="{{asset('fontend/js/waypoints-sticky.min.js')}}"></script><!-- STICKY HEADER -->
<script  src="{{asset('fontend/js/isotope.pkgd.min.js')}}"></script><!-- MASONRY  -->
<script  src="{{asset('fontend/js/owl.carousel.min.js')}}"></script><!-- OWL  SLIDER  -->
<script  src="{{asset('fontend/js/slick.min.js')}}"></script><!-- Slick SLIDER  -->
<script  src="{{asset('fontend/js/theia-sticky-sidebar.js')}}"></script><!-- STICKY SIDEBAR  -->
<script  src="{{asset('fontend/js/jquery.scrollbar.min.js')}}"></script><!-- MY ACCOUNT LEFT PANEL SCROLLER -->
<script  src="{{asset('fontend/js/dropzone.js')}}"></script><!--IMAGE UPLOAD-->  
<script  src="{{asset('fontend/js/bootstrap4-toggle.min.js')}}"></script><!-- BOOTSTRAP TOOGLE-->
<script  src="{{asset('fontend/js/jquery.dataTables.min.js')}}"></script><!--DATA TABLE-->
<script  src="{{asset('fontend/js/dataTables.bootstrap4.min.js')}}"></script><!-- DATA TABLE-->
<script  src="{{asset('fontend/js/lc_lightbox.lite.js')}}" ></script><!-- IMAGE POPUP -->
<script  src="{{asset('fontend/js/datepicker.min.js')}}"></script><!-- DATEPICKER -->
<script  src="{{asset('fontend/js/fullcalendar.min.js')}}"></script><!-- DATEPICKER -->
<script src="{{asset('fontend/js/recaptcha-api.js')}}"></script><!-- RECAPTCHA-->
<script  src="{{asset('fontend/js/custom.js')}}"></script><!-- CUSTOM FUCTIONS  -->




</body>

</html>


@endsection