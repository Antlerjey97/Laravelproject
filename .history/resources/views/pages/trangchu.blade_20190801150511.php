@extends('layout.index')
@section('content')
    <!-- Page Content -->
 <div class="container">

    	@include('layout.slide')

        <div class="space20"></div>


        <div class="row main-left">
           @include('layout.menu')

            <div class="col-md-9">
	            <div class="panel panel-default">            
	            	<div class="panel-heading" style="background-color:#337AB7; color:white;" >
	            		<h2 style="margin-top:0px; margin-bottom:0px;">Laravel Tin Tức</h2>
	            	</div>

	            	<div class="panel-body">
						@foreach ($theloai as $tl)
							
					
	            		<!-- item -->
					    <div class="row-item row">
		                	<h3>
								<a href="category.html">{{$tl->Ten}}</a> | 	
								<ul>@foreach ($tl->loaitin as $lt)
										<small><a href="category.html"><i>{{$lt->Ten}}</i></a>/</small>
							
						
										@endforeach

							</h3>
							<?php
							$data=$tl->tintuc->where('NoiBat',1)->sortByDesc('created_at')->take(5);
							$tin=$data->shift();
							?> 
							{{-- @foreach ($tl->tintuc as $tin) --}}
								
						
		                	<div class="col-md-8 border-right">
		                		<div class="col-md-5">
			                        <a href="detail.html">
									<img class="img-responsive" src="upload/tintuc/{{$tin['Hinh']}}" alt="">
			                        </a>
			                    </div>

			                    <div class="col-md-7">
								<h3>{{$tin['TieuDe']}}</h3>
			                        <p>{{$tin['TomTat']}}</p>
			                        <a class="btn btn-primary" href="detail.html">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
								</div>

							</div>
							{{-- @endforeach --}}
						
							<div class="col-md-4">
								@foreach ($tin->all() as $tt)
									
								
								<a href="detail.html">
									<h4>
										<span class="glyphicon glyphicon-list-alt"></span>
										{{$tt->TieuDe}}
									</h4>
								</a>

								@endforeach
							

							
							</div>
							
							<div class="break"></div>
						</div>
						@endforeach
		                <!-- end item -->
		                <!-- item -->
					    <div class="row-item row">
		                	<h3><a href="category.html">Category</a> | 	
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                	</h3>
		                	<div class="col-md-8 border-right">
		                		<div class="col-md-5">
			                        <a href="detail.html">
			                            <img class="img-responsive" src="image/320x150.png" alt="">
			                        </a>
			                    </div>
			                    <div class="col-md-7">
			                        <h3>Project Five</h3>
			                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident .</p>
			                        <a class="btn btn-primary" href="detail.html">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
								</div>
		                	</div>
		                    

							<div class="col-md-4">
								<a href="detail.html">
									<h4>
										<span class="glyphicon glyphicon-list-alt"></span>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</h4>
								</a>

								<a href="detail.html">
									<h4>
										<span class="glyphicon glyphicon-list-alt"></span>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</h4>
								</a>

								<a href="detail.html">
									<h4>
										<span class="glyphicon glyphicon-list-alt"></span>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</h4>
								</a>

								<a href="detail.html">
									<h4>
										<span class="glyphicon glyphicon-list-alt"></span>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</h4>
								</a>
							</div>
							


							<div class="break"></div>
		                </div>
		                <!-- end item -->
		                <!-- item -->
					    <div class="row-item row">
		                	<h3><a href="category.html">Category</a> | 	
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                	</h3>
		                	<div class="col-md-8 border-right">
		                		<div class="col-md-5">
			                        <a href="detail.html">
			                            <img class="img-responsive" src="image/320x150.png" alt="">
			                        </a>
			                    </div>
			                    <div class="col-md-7">
			                        <h3>Project Five</h3>
			                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident .</p>
			                        <a class="btn btn-primary" href="detail.html">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
								</div>
		                	</div>
		                    

							<div class="col-md-4">
								<a href="detail.html">
									<h4>
										<span class="glyphicon glyphicon-list-alt"></span>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</h4>
								</a>

								<a href="detail.html">
									<h4>
										<span class="glyphicon glyphicon-list-alt"></span>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</h4>
								</a>

								<a href="detail.html">
									<h4>
										<span class="glyphicon glyphicon-list-alt"></span>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</h4>
								</a>

								<a href="detail.html">
									<h4>
										<span class="glyphicon glyphicon-list-alt"></span>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</h4>
								</a>
							</div>
							


							<div class="break"></div>
		                </div>
		                <!-- end item -->
		                <!-- item -->
					    <div class="row-item row">
		                	<h3><a href="category.html">Category</a> | 	
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                		<small><a href="category.html"><i>subtitle</i></a>/</small>
		                	</h3>
		                	<div class="col-md-8 border-right">
		                		<div class="col-md-5">
			                        <a href="detail.html">
			                            <img class="img-responsive" src="image/320x150.png" alt="">
			                        </a>
			                    </div>
			                    <div class="col-md-7">
			                        <h3>Project Five</h3>
			                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident .</p>
			                        <a class="btn btn-primary" href="detail.html">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
								</div>
		                	</div>
		                    

							<div class="col-md-4">
								<a href="detail.html">
									<h4>
										<span class="glyphicon glyphicon-list-alt"></span>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</h4>
								</a>

								<a href="detail.html">
									<h4>
										<span class="glyphicon glyphicon-list-alt"></span>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</h4>
								</a>

								<a href="detail.html">
									<h4>
										<span class="glyphicon glyphicon-list-alt"></span>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</h4>
								</a>

								<a href="detail.html">
									<h4>
										<span class="glyphicon glyphicon-list-alt"></span>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</h4>
								</a>
							</div>
							


							<div class="break"></div>
		                </div>
		                <!-- end item -->

					</div>
	            </div>
        	</div>
        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->
@endsection
