@extends('layout.index')
@section('content')
    <!-- Page Content -->
 <div class="container">

    	<!-- slider -->
    	<div class="row carousel-holder">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="panel panel-default">
                      <div class="panel-heading">Đăng ký tài khoản</div>
                      @if (session('thongbao'))
                          
                <div class="alert alert-success">{{session('thongbao')}}</div>
                          
                      @endif
				  	<div class="panel-body">
							@if (count($errors)>0)
							<div class="alert alert-danger">
							@foreach ($errors->all() as $err)
								{{$err}}<br>
							@endforeach    
						</div>
								
							@endif
				    	<form action="dangky" method="POST" >
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            @csrf
				    		<div>
				    			<label>Họ tên</label>
							  	<input type="text" class="form-control" placeholder="Username" name="name" aria-describedby="basic-addon1">
							</div>
							<br>
							<div>
				    			<label>Email</label>
							  	<input type="email" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1"
							  	>
							</div>
							<br>	
							<div>
								<input type="checkbox" class="" name="checkpassword">
				    			<label>Nhập mật khẩu</label>
							  	<input type="password" class="form-control" name="password" aria-describedby="basic-addon1">
							</div>
							<br>
							<div>
				    			<label>Nhập lại mật khẩu</label>
							  	<input type="password" class="form-control" name="passwordAgain" aria-describedby="basic-addon1">
							</div>
							<br>
							<div class="form-group">
									<label> Status</label>
									<label class="radio-inline">
										{{-- <input name="rdoStatus" value="1" checked="" type="radio">Admin --}}
									</label>
									<label class="radio-inline">
										<input name="rdoStatus" value="0" type="radio">User
									</label>
								</div>
								<br>
							<button type="submit" class="btn btn-default">Đăng ký
							</button>

				    	</form>
				  	</div>
				</div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <!-- end slide -->
    </div>
    <!-- end Page Content -->
@endsection
