@extends('layouts.master')

@section('NoiDung')
{{-- Đây là chú thích --}}
{{--
@if($khoaHoc != "")
{{$khoaHoc}}

@else
{{"không có khóa học"}}

@endif
--}}

{{$khoaHoc or "không có biến khoaHoc"}}
<br>

@for($i=1; $i<=10; $i++)
{{$i.""}}

@endfor
<br>

<?php $khoahoc = array('PHP','IOS','HTML','Laravel');  ?>

 <!-- @if(!empty($khoahoc))
     @foreach($khoahoc as $value)
    {{$value}}
     @endforeach()

@else
    {{"mảng rỗng"}}
@endif -->

@forelse($khoahoc as $value)
    @continue($value=="Laravel")
	{{$value}}
      
@empty
      {{"mảng rỗng"}}
@endforelse

@endsection
