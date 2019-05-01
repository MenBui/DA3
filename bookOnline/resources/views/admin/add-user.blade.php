@extends('admin.layout.layout')
@section('css')
<!-- Vendor CSS -->
<link rel="stylesheet" href="{{asset('vendor/bootstrap4/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('vendor/themify-icons/themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('vendor/animate.css/animate.min.css')}}">
<link rel="stylesheet" href="{{asset('vendor/jscrollpane/jquery.jscrollpane.css')}}">
<link rel="stylesheet" href="{{asset('vendor/waves/waves.min.css')}}">
<link rel="stylesheet" href="{{asset('vendor/switchery/dist/switchery.min.css')}}">

<!-- Neptune CSS -->
<link rel="stylesheet" href="{{asset('css/admin/core.css')}}">
@endsection()
@section('content')
<div class="content-area py-1">
	<div class="container-fluid">
		<h4>Basic Form Elements</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="forms-basic.html#">Trang chủ</a></li>
			<li class="breadcrumb-item"><a href="forms-basic.html#">Danh sách khách hàng</a></li>
			<li class="breadcrumb-item active">Thêm khách hàng</li>
		</ol>
		<div class="box box-block bg-white">
			@if( count($errors) > 0)
		    	<div class="alert alert-danger">
		    		<ul>
		    			@foreach($errors->all() as $error)
		    				<li>{{$error}}</li>
		    			@endforeach
		    		</ul>
		    	</div>
		    	@endif
			<h5>Form controls</h5>
			<p class="font-90 text-muted mb-1">Bootstrap provides several form control styles, layout options, and custom components for creating a wide variety of forms.</p>
			<form action="{{URL::route('postAddUser')}}" method="POST" > 
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="form-group">
					<label for="exampleInputEmail1">Họ và tên</label>
					<input type="text" class="form-control" name="name" placeholder="Họ và tên" value="{{old('name')}}">
					
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Email</label>
					<input type="email" class="form-control" name="email" placeholder="Email" value="{{old('email')}}">
				</div>

				<div class="form-group">
					<label for="exampleInputEmail1">Địa chỉ</label>
					<input type="text" class="form-control" name="address" placeholder="Địa chỉ" value="{{old('address')}}">
				</div>

				<div class="form-group">
					<label for="exampleInputEmail1">Password</label>
					<input type="password" class="form-control" name="password" placeholder="Password" value="{{old('password')}}">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Nhập lại Password</label>
					<input type="password" class="form-control" name="confirm_password" placeholder="Password" value="{{old('password')}}">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Số điện thoại</label>
					<input type="text" class="form-control" name="phone" placeholder="Số điện thoại" value="{{old('phone')}}">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">CMND</label>
					<input type="text" class="form-control" name="cmnd" placeholder="CMND" value="{{old('cmnd')}}">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Ngày sinh</label>
					<input type="date" class="form-control-file" name="date" placeholder="Ngày sinh" value="{{old('date')}}}">
								
				</div>

				<div class="form-group">
					<label for="exampleSelect1">Giới tính</label>
					<select class="form-control" id="exampleSelect1" name="sex">
						<option value="1">Nam</option>
						<option value="0">Nữ</option>
						
					</select>
				</div>	
				<div class="form-group">
					<label for="exampleSelect1">Phân quyền</label>
					<select class="form-control" id="exampleSelect1" name="role">
						<option value="0">quản trị viên</option>
						<option value="1">biên tập viên</option>
						<option value="2">khách hàng</option>
					</select>
				</div>			

				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
		<div class="box box-block bg-white">
			
			
@endsection()
@section('js')
<!-- Vendor JS -->
		<script type="text/javascript" src="{{asset('vendor/jquery/jquery-1.12.3.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('vendor/tether/js/tether.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('vendor/bootstrap4/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('vendor/detectmobilebrowser/detectmobilebrowser.js')}}"></script>
		<script type="text/javascript" src="{{asset('vendor/jscrollpane/jquery.mousewheel.js')}}"></script>
		<script type="text/javascript" src="{{asset('vendor/jscrollpane/mwheelIntent.js')}}"></script>
		<script type="text/javascript" src="{{asset('vendor/jscrollpane/jquery.jscrollpane.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('vendor/jquery-fullscreen-plugin/jquery.fullscreen-min.js')}}"></script>
		<script type="text/javascript" src="{{asset('vendor/waves/waves.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('vendor/switchery/dist/switchery.min.js')}}"></script>

		<!-- Neptune JS -->
		<script type="text/javascript" src="{{asset('js/admin/app.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/admin/demo.js')}}"></script>
@endsection()