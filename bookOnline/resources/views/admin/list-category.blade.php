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
<link rel="stylesheet" href="{{asset('vendor/DataTables/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('vendor/DataTables/Responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('vendor/DataTables/Buttons/css/buttons.dataTables.min.css')}}">
<link rel="stylesheet" href="{{asset('vendor/DataTables/Buttons/css/buttons.bootstrap4.min.css')}}">

<!-- Neptune CSS -->
<link rel="stylesheet" href="{{asset('css/admin/core.css')}}">
<style type="text/css">
	.delete:before {
		content: "\e61d";
	}
</style>
@endsection()
@section('content')
	<div class="content-area py-1">
		<div class="container-fluid">
			<h4>Data Tables</h4>
			<ol class="breadcrumb no-bg mb-1">
				<li class="breadcrumb-item"><a href="tables-datatable.html#">Home</a></li>
				<li class="breadcrumb-item"><a href="tables-datatable.html#">Tables</a></li>
				<li class="breadcrumb-item active">Data Tables</li>
			</ol>
			<div class="box box-block bg-white">
				@if( Session::has('flash_message'))
	                <div class="alert alert-{{ Session::get('flash_level')}}">
	                    {{ Session::get('flash_message')}}
	                </div>
	            @endif
				<h5 class="mb-1">Exporting Table Data</h5>
				<table class="table table-striped table-bordered dataTable" id="table-2">
					<thead>
						<tr>
							<th>STT</th>
							<th>Thể loại</th>
							<th>abc</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$stt =1;
						?>
						@foreach($categorys as $cate)
						<tr>
							<td>{{$stt++}}</td>
							<td>{{$cate->name}}</td>
							<td class="jsgrid-cell jsgrid-control-field jsgrid-align-center " style="width: 50px;">
								<a href=""><button class="jsgrid-button jsgrid-edit-button ti-trash" type="button" title="Delete" ></button></a>
								<a href="{{URL::route('editCategory',[$cate->id,$cate->parents_id])}}"><button class="jsgrid-button jsgrid-delete-button ti-pencil-alt" type="button" title="Edit"></button></a>
							</td>
						</tr>
						
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="box box-block bg-white">
				
			</div>
		</div>
	</div>
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
		<script type="text/javascript" src="{{asset('vendor/DataTables/js/jquery.dataTables.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('vendor/DataTables/js/dataTables.bootstrap4.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('vendor/DataTables/Responsive/js/dataTables.responsive.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('vendor/DataTables/Responsive/js/responsive.bootstrap4.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('vendor/DataTables/Buttons/js/dataTables.buttons.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('vendor/DataTables/Buttons/js/buttons.bootstrap4.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('vendor/DataTables/JSZip/jszip.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('vendor/DataTables/pdfmake/build/pdfmake.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('vendor/DataTables/pdfmake/build/vfs_fonts.js')}}"></script>
		<script type="text/javascript" src="{{asset('vendor/DataTables/Buttons/js/buttons.html5.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('vendor/DataTables/Buttons/js/buttons.print.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('vendor/DataTables/Buttons/js/buttons.colVis.min.js')}}"></script>

		<!-- Neptune JS -->
		<script type="text/javascript" src="{{asset('js/admin/app.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/admin/demo.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/admin/tables-datatable.js')}}"></script>
@endsection()