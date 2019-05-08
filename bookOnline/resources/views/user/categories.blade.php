@extends('User.layout.layout')
@section('content')
<div class="shop-page-title category-page-title page-title ">

	<div class="page-title-inner flex-row  medium-flex-wrap container">
	  <div class="flex-col flex-grow medium-text-center">
	  	 	 <div class="is-large">
  <nav class="woocommerce-breadcrumb breadcrumbs"><a href="{{URL::route('categories')}}">Trang chủ</a> <span class="divider">&#47;</span> Sách Thiếu Nhi</nav></div>
<div class="category-filtering category-filter-row show-for-medium">
	<a href="#" data-open="#shop-sidebar" data-visible-after="true" data-pos="left" class="filter-button uppercase plain">
		<i class="icon-menu"></i>
		<strong>Lọc</strong>
	</a>
	<div class="inline-block">
			</div>
</div>
	  </div><!-- .flex-left -->
	  
	   <div class="flex-col medium-text-center">
	  	 	<p class="woocommerce-result-count hide-for-medium">
	Xem tất cả kết quả</p>
<form class="woocommerce-ordering" method="get">
	<select name="orderby" class="orderby">
					<option value="menu_order"  selected='selected'>Thứ tự mặc định</option>
					<option value="popularity" >Thứ tự theo mức độ phổ biến</option>
					<option value="rating" >Thứ tự theo điểm đánh giá</option>
					<option value="date" >Thứ tự theo sản phẩm mới</option>
					<option value="price" >Thứ tự theo giá: thấp đến cao</option>
					<option value="price-desc" >Thứ tự theo giá: cao xuống thấp</option>
			</select>
	</form>
	   </div><!-- .flex-right -->
	   
	</div><!-- flex-row -->
</div><!-- .page-title -->

<main id="main" class="">
<div class="row category-page-row">

		@include('User.layout.site-bar')

		<div class="col large-9">
		<div class="shop-container">
		
		
			

	<div class="woof_products_top_panel"></div>
	
			<div class="products row row-small large-columns-4 medium-columns-3 small-columns-2 has-shadow row-box-shadow-1">
				
				
					
<div class="product-small col has-hover post-424 product type-product status-publish has-post-thumbnail product_cat-bach-hoa-online product_cat-do-hop-dong-goi first instock shipping-taxable purchasable product-type-simple">
	<div class="col-inner">
	
<div class="badge-container absolute left top z-1"></div>

	<div class="product-small box ">
		@foreach($books as $bk)
		<div class="box-image">
			<div class="image-fade_in_back">
				<a href="{{URL::route('book')}}">
					<img width="350" height="350" src="" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="" sizes="(max-width: 200px) 100vw, 200px" />
					<img width="200" height="200" src="{{asset('images/icons/'.$bk->images)}}" class="" alt="" srcset="" sizes="(max-width: 200px) 100vw, 200px" />				
				</a>
			</div>
			<div class="image-tools is-small top right show-on-hover">
							</div>
			<div class="image-tools is-small hide-for-small bottom left show-on-hover">
							</div>
			<div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
							</div>
		</div><!-- box-image -->

		<div class="box-text box-text-products text-center grid-style-2">
			<div class="title-wrapper">		<p class="category uppercase is-smaller no-text-overflow product-cat op-7">
			HUBook	</p> <p class="name product-title"><a href="{{URL::route('book')}}">{{$bk->name}}</a></p></div><div class="price-wrapper">
			<span class="price"><span class="woocommerce-Price-amount amount">{{$bk->price}}<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
		    </div>		
		</div>
		@endforeach<!-- box-text -->
			</div>
<!-- box -->
		</div><!-- .col-inner -->
</div><!-- col -->
			
			</div><!-- row -->
			
		
		</div><!-- shop container -->
		</div>
</div>

</main><!-- #main -->
@endsection()