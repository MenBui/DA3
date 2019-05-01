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
			<li class="breadcrumb-item"><a href="forms-basic.html#">Danh mục sách</a></li>
			<li class="breadcrumb-item active">Thêm URL danh mục sách</li>
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
			<form action="{{URL::route('postAddUrlCategory')}}" method="POST">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="form-group">
					<label for="exampleInputEmail1">URL</label>
					<input type="text" class="form-control" name="url" placeholder="URL" value="{{old('url')}}">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Tiêu đề</label>
					<input type="text" class="form-control" name="title" placeholder="Tiêu đề" value="{{old('title')}}">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Keyword_seo</label>
					<input type="text" class="form-control" name="keyword_seo" placeholder="Keyword_seo" value="{{old('keyword_seo')}}">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Description_seo</label>
					<input type="text" class="form-control" name="description_seo" placeholder="Description" value="{{old('description_seo')}}">
				</div>	
				<div class="form-group">
					<label for="exampleInputFile">Ảnh đại diện</label>
					<input type="file" class="form-control-file" name="image_seo" value="{{old('image_seo')}}}">
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