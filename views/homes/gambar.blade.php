@extends('layouts.laysite')

@section('content')
<section class="banner-area relative about-banner" id="home" style="background: url('{{config('sekolah.image_banner_url')}}');">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								NEWS		
							</h1>	
							
						</div>	
					</div>
				</div>
			</section>
<section class="course-details-area pt-120">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 left-contents">
							<div class="main-image">
                            <img class="img-fluid" src="{{$author->getPicture()}}" alt="">
							</div>
							<div class="jq-tab-wrapper horizontal-tab" id="horizontalTab">
	                            <h1>{{$author->title}}</h1>
	                            <div class="jq-tab-content-wrapper">
	                                <div class="jq-tab-content active" data-tab="1">
                                    
                                        {{$author->content}}
                                                                    
	                            </div>
	                        </div>
						</div>
						
					</div>
				</div>	
			</section>
@stop