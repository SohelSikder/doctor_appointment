@extends('layouts.master')
@section('home_content')

<div class="page-content">
            
            <!-- Banner Area -->
            <div class="aon-page-benner-area">
             <div class="aon-page-banner-row">
                <div class="aon-page-benner-overlay" ></div>
                <div class="sf-banner-heading-wrap">
                  <div class="sf-banner-heading-area">
                    <div class="sf-banner-heading-large">Blog Grid</div>
                    <div class="sf-banner-breadcrumbs-nav">
                      <ul class="list-inline">
                        <li><a href="https://aonetheme.com/latest-service-finder/"> Home </a></li>
                        <li><a href="https://aonetheme.com/latest-service-finder/providers-category/packers-and-movers/">Blog Grid</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Banner Area End -->
            
            <!-- Left & right section -->
            <div class="aon-page-jobs-wrap">
                <div class="container">
                    <div class="row">

                        

                        <!-- Left part start -->
                        <div class="col-lg-12">
                                                      

                            <div class="row">
                                <!-- COLUMNS 1 -->
                                @foreach($all_posts as $post)
                                <div class="col-lg-4 col-md-12">
                                    <div class="aon-blog-style-1">
                                        <div class="post-bx">
                                            <!-- Content section for blogs start -->
                                            <div class="post-thum"> 
                                              <img title="title" alt="" src="{{asset('fontend/images/blog/blog-grid/1.jpg')}}">
                                            </div>
                                            <div class="post-info">
                                              <div class="post-categories"><a href="#">Logistics</a></div>
                                              <div class="post-meta">
                                                <ul>
                                                  <li class="post-date"><span>June 18, 2022</span></li>
                                                  <li class="post-author">By
                                                    <a href="#" title="Posts by admin" rel="author">Nina Brown</a>
                                                  </li>
                                                  
                                                </ul>
                                              </div>
                                                                                    
                                              <div class="post-text">
                                                <h4 class="post-title">
                                   
                                                  <a href="{{url('Details/'.$post->id)}}">{{$post->title}}</a>
                                                </h4>
                                              </div>
                                                
                                              <div class="post-read-more">
                                                  <a href="#" class="site-button-link">Read More</a>
                                              </div>                                                
                                              
                                            </div>
                                            <!-- Content section for blogs end -->
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>                                

                        </div>
                        <!-- Left part END --> 
                        
                        <!-- Side bar start -->
                      
                        <!-- Side bar END -->

                    </div>
                </div>
            </div> 
            <!-- Left & right section  END -->
            
        </div>
        @endsection