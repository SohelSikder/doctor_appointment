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
<div id="content">

<div class="content-admin-main">
    
    <div class="aon-admin-heading d-flex justify-content-between">
        <div class="aon-admin-heading-right">
            
            <h3>All Docter list </h3>
        </div>
       
    </div>
    @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
    @endif 
    <div class="row">
    @foreach($allDoctor as $data)
  
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
       
            <div class="aon-team-wrap">
           
                <div class="dropdown action-dropdown dropdown-left">
                    <button  type="button" class="action-button btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-v"></i>
                    </button>
                    <ul class="dropdown-menu"  >
                        <li><a class="dropdown-item" href="{{url('editDoctor/'.$data->id)}}"><i class="feather-edit"></i> Edit</a></li>
                        <li><a class="dropdown-item" href="{{url('delete/'.$data->id)}}"></i> Delete</a></li>
                    </ul>
                </div>
                <div class="aon-team-pic"><img src="{{ asset($data->doc_image) }}" /></div>
                <h5 class="aon-team-name">{{$data->name}}</h5>
                <p class="aon-team-name">{{$data->specialist->name ?? "-"}}</p>
                <!-- <div class="aon-team-postion">{{$data->specialist}}</div>  -->
             
            </div>
            
        </div>
     @endforeach
        
    </div>

    <div class="paginate">
    {!! $allDoctor->links() !!}
   </div>
    
    <!-- <div class="site-pagination s-p-center">
      <ul class="pagination">
      
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1"><i class="fa fa-chevron-left"></i></a>
        </li>
        <li class="page-item"><a class="page-link" href="#"></a></li>
        <li class="page-item active">
          <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
        </li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-ellipsis-h"></i></a></li>
        <li class="page-item"><a class="page-link" href="#">11</a></li>
        <li class="page-item">
          <a class="page-link" href="#"><i class="fa fa-chevron-right"></i></a>

        </li>
      </ul>
    </div> -->
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