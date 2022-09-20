@extends('layouts.master')
@section('home_content')
       
       <!-- Content -->
        <div class="page-content">
            <!--Banner-->
            <div class="aon-page-benner-area">
              <div class="aon-page-banner-row">
                <div class="aon-page-benner-overlay" ></div>
                <div class="sf-banner-heading-wrap">
                  <div class="sf-banner-heading-area">
                    <div class="sf-banner-heading-large">All Specialist Category</div>
                    <div class="sf-banner-breadcrumbs-nav">
                      <ul class="list-inline">
                       
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>            
            <!--Banner-->
            <div class="section-content">

                <div class="aon-med-srv-cat-section">
                
                   <ul class="justify-content-center">
               
                   @foreach($allSpecialist as $data)
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
               
            </div>
            
    </div>

        <!-- Content END-->
@endsection
