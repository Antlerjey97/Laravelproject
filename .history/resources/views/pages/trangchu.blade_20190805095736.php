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
							<a href="">{{$tl->Ten}}</a> | 	
								<ul>@foreach ($tl->loaitin as $lt)
										<small><a href="tintuc/{{$tl->id}}"><i>{{$lt->Ten}}</i></a>/</small>
							
						
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
								<a class="btn btn-primary" href="news/{{$tin['id']}}">Thông Tin chi tiết <span class="glyphicon glyphicon-chevron-right"></span></a>
								</div>

							</div>
							{{-- @endforeach --}}
						
							<div class="col-md-4">
								@foreach ($data->all() as $tt)
									
								
								<a href="detail.html">
										<img class="img-responsive" src="upload/tintuc/{{$tin['Hinh']}}" alt="">
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
