@extends('User.layout.layout')

@section('content')
<div class="shop-page-title category-page-title page-title ">

	<div class="page-title-inner flex-row  medium-flex-wrap container">
	  <div class="flex-col flex-grow medium-text-center">
	  	 	 <div class="is-large">
  <nav class="woocommerce-breadcrumb breadcrumbs"><a href="http://mauweb.monamedia.net/lazada">Trang chủ</a> </nav></div>
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

	   </div><!-- .flex-right -->
	   
	</div><!-- flex-row -->
</div><!-- .page-title -->

<main id="main" class="">
<div class="row category-page-row">
@include('User.layout.site-bar')
<div class="col large-9">
		<div class="row">
			<div class="large-4 col">
				
<div class="product-images relative mb-half has-hover woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4">

  <div class="badge-container is-larger absolute left top z-1">
</div>
  <div class="image-tools absolute top show-on-hover right z-3">
      </div>

  <figure class="woocommerce-product-gallery__wrapper product-gallery-slider slider slider-nav-small mb-half"
        data-flickity-options='{
                "cellAlign": "center",
                "wrapAround": true,
                "autoPlay": false,
                "prevNextButtons":true,
                "adaptiveHeight": true,
                "imagesLoaded": true,
                "lazyLoad": 1,
                "dragThreshold" : 15,
                "pageDots": false,
                "rightToLeft": false       }'>
    <div data-thumb="http://mauweb.monamedia.net/lazada/wp-content/uploads/2017/10/GiayNam-01-180x180.jpg" class="first slide woocommerce-product-gallery__image">
    	<a href="">
    		<img width="600" height="600" src="" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="" data-caption="" data-src="" data-large_image="" data-large_image_width="610" data-large_image_height="610" srcset="" sizes="(max-width: 600px) 100vw, 600px" />
    	</a>
    </div>
    </figure>

  <div class="image-tools absolute bottom left z-3">
        <a href="#product-zoom" class="zoom-button button is-outline circle icon tooltip hide-for-small" title="Zoom">
      <i class="icon-expand" ></i>    </a>
   </div>
</div>


  <div class="product-thumbnails thumbnails slider-no-arrows slider row row-small row-slider slider-nav-small small-columns-4"
    data-flickity-options='{
              "cellAlign": "left",
              "wrapAround": false,
              "autoPlay": false,
              "prevNextButtons":true,
              "asNavFor": ".product-gallery-slider",
              "percentPosition": true,
              "imagesLoaded": true,
              "pageDots": false,
              "rightToLeft": false,
              "contain": true
          }'
    >      
    <div class="col is-nav-selected first">
    	<a><img width="180" height="180" src="" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" srcset="" sizes="(max-width: 180px) 100vw, 180px" /></a>
    </div>
    
			</div>


			<div class="product-info summary entry-summary col col-fit product-summary text-left">
				<nav class="woocommerce-breadcrumb breadcrumbs"><a href="{{URL::route('authIndex')}}">Trang chủ</a> <span class="divider">&#47;</span> <a href="{{URL::route('categories')}}">Danh mục sách</a> <span class="divider">&#47;</span> <a href="">Sách Thiếu Nhi</a></nav><h1 class="product-title entry-title">
	Búp Sen Xanh</h1>

	<div class="is-divider small"></div>
<ul class="next-prev-thumbs is-small show-for-medium"></ul><div class="price-wrapper">
	<p class="price product-page-price ">
  <span class="woocommerce-Price-amount amount">71000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></p>
</div>
<div class="product-short-description">
	<div class="shopee-product-detail__parameters__row">
<div class="shopee-product-detail__parameters__head">Tình trạng: Mới</div>
</div>
<div class="shopee-product-detail__parameters__row">
<div class="shopee-product-detail__parameters__head">Kho hàng: 771</div>
</div>
<div class="shopee-product-detail__parameters__row">
<div class="shopee-product-detail__parameters__head">Vận chuyển từ: Quận Nam Từ Liêm, Hà Nội</div>
</div>
</div>

	
	<form class="cart" method="post" enctype='multipart/form-data'>
			<div class="quantity buttons_added">
		<input type="button" value="-" class="minus button is-form">		<label class="screen-reader-text" for="quantity_5c6d2dfb991b8">Số lượng</label>
		<input type="number" id="quantity_5c6d2dfb991b8" class="input-text qty text" step="1" min="1" max="9999" name="quantity" value="1" title="SL" size="4" pattern="[0-9]*" inputmode="numeric" />
		<input type="button" value="+" class="plus button is-form">	</div>
	
		<button type="submit" name="add-to-cart" value="401" class="single_add_to_cart_button button alt">Thêm vào giỏ</button>

			</form>

	
<div class="row row-collapse"  id="row-565096604">

<div class="col medium-4 small-12 large-4"  ><div class="col-inner"  >


		<div class="icon-box featured-box icon-box-left text-left"  >
					<div class="icon-box-img" style="width: 20px">
				<div class="icon">
					<div class="icon-inner" >
						<?xml version="1.0" encoding="iso-8859-1"?>
<!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
<g>
	<g>
		<path d="M485.325,271.199h-2.157v-91.81c0-23.554-16.735-43.188-39.208-47.428V43.888c0-9.996-8.132-18.128-18.128-18.128h-53.074
			c-4.025,0-7.287,3.262-7.287,7.287c0,4.025,3.262,7.287,7.287,7.287h53.074c1.959,0,3.553,1.594,3.553,3.553v140.602h-11.659
			V82.669c0-2.699-1.492-5.176-3.876-6.44c-8.707-4.612-15.746-11.652-20.359-20.359c-1.264-2.384-3.741-3.876-6.44-3.876H90.958
			c-2.699,0-5.176,1.491-6.439,3.875c-4.613,8.708-11.654,15.747-20.361,20.361c-2.384,1.263-3.875,3.74-3.875,6.439V184.49h-11.66
			V43.888c0-1.959,1.594-3.553,3.553-3.553h267.951c4.025,0,7.287-3.262,7.287-7.287c0-4.025-3.262-7.287-7.287-7.287H52.177
			c-9.996,0-18.128,8.132-18.128,18.128v87.217H33.98c-18.736,0-33.98,15.243-33.98,33.98V452.26
			c0,18.737,15.243,33.981,33.98,33.981h415.209c18.736,0,33.98-15.243,33.98-33.98v-54.848h2.157
			c14.709,0,26.675-11.966,26.675-26.675v-72.86C512,283.166,500.034,271.199,485.325,271.199z M443.96,146.911
			c14.291,3.952,24.633,17.005,24.633,32.478v19.802c-6.633-6.657-15.132-11.447-24.633-13.532V146.911z M74.858,86.879
			c8.253-5.138,15.172-12.056,20.31-20.31h287.674c5.137,8.254,12.056,15.173,20.31,20.31v97.611H298.193
			c7.198-11.189,11.068-24.198,11.068-37.848c0-38.739-31.517-70.257-70.257-70.257c-38.74,0-70.257,31.517-70.257,70.257
			c0,13.65,3.871,26.659,11.068,37.848H74.858V86.879z M242.027,138.761v-19.944c7.592,0.566,10.198,4.193,13.371,4.193
			c4.192,0,6.005-5.212,6.005-7.819c0-6.573-12.011-8.726-19.377-8.952v-2.946c0-1.474-1.926-2.833-3.852-2.833
			c-2.153,0-3.853,1.36-3.853,2.833v3.172c-11.331,1.474-21.982,7.706-21.982,22.097c0,14.504,11.671,18.923,21.982,22.776v22.55
			c-9.972-1.133-13.37-8.498-17.676-8.498c-3.513,0-6.346,4.759-6.346,7.932c0,3.986,4.069,8.372,10.491,11.169h-22.609
			c-9.603-10.328-14.858-23.658-14.858-37.848c0-30.703,24.979-55.682,55.682-55.682s55.682,24.979,55.682,55.682
			c0,14.19-5.255,27.52-14.858,37.848H250.47c7.953-3.744,12.973-10.916,12.973-21.48
			C263.444,147.599,252.113,142.5,242.027,138.761z M249.619,164.482c0,5.326-3.513,8.272-8.498,9.292v-19.716
			C245.993,156.211,249.619,158.93,249.619,164.482z M235.228,119.157v17.11c-5.213-2.039-9.065-4.192-9.065-9.178
			C226.163,122.783,229.563,120.063,235.228,119.157z M33.98,145.679h0.069v38.811H33.98c-10.7,0-19.405-8.706-19.405-19.406
			C14.575,154.384,23.279,145.679,33.98,145.679z M14.575,192.964c0.048,0.034,0.1,0.062,0.149,0.096
			c0.606,0.418,1.224,0.818,1.858,1.197c0.118,0.071,0.239,0.137,0.358,0.206c0.565,0.329,1.141,0.642,1.727,0.939
			c0.126,0.064,0.249,0.13,0.376,0.193c0.665,0.327,1.342,0.631,2.03,0.915c0.146,0.06,0.294,0.116,0.441,0.174
			c0.622,0.246,1.252,0.476,1.891,0.686c0.11,0.036,0.217,0.076,0.328,0.111c0.716,0.227,1.444,0.427,2.18,0.607
			c0.169,0.041,0.338,0.079,0.508,0.117c0.691,0.158,1.389,0.298,2.096,0.413c0.073,0.012,0.144,0.028,0.217,0.039
			c0.761,0.118,1.531,0.204,2.307,0.271c0.186,0.016,0.371,0.03,0.558,0.043c0.789,0.055,1.582,0.093,2.384,0.093h7.357h391.914v0
			c0.475,0,0.947,0.017,1.417,0.036c0.449,0.021,0.919,0.05,1.422,0.09c0.002,0,0.003,0,0.004,0
			c16.511,1.313,29.781,14.135,32.127,30.144c0.003,0.02,0.005,0.04,0.008,0.061c0.075,0.522,0.14,1.047,0.192,1.575
			c0.019,0.193,0.029,0.388,0.044,0.582c0.03,0.368,0.062,0.736,0.081,1.107c0.008,0.168,0.007,0.338,0.013,0.506H14.575V192.964z
			 M468.594,429.759h-0.001H99.567c-4.025,0-7.287,3.262-7.287,7.287c0,4.025,3.262,7.287,7.287,7.287h369.026v7.925
			c0,10.7-8.705,19.405-19.405,19.405H33.98c-10.7,0-19.405-8.706-19.405-19.406v-7.924h33.01c4.025,0,7.287-3.262,7.287-7.287
			c0-4.025-3.262-7.287-7.287-7.287h-33.01V247.74h454.019v23.459h-84.745c-31.534,0-57.741,23.25-62.377,53.508
			c-0.48,3.13-0.729,6.335-0.729,9.598c0,34.797,28.309,63.106,63.106,63.106h84.745V429.759z M497.426,370.735h-0.001
			c0,6.672-5.428,12.101-12.101,12.101H383.849c-26.761,0-48.531-21.771-48.531-48.531s21.771-48.53,48.531-48.53l101.47-0.001
			c0.006,0,0,0,0.006,0c6.672,0,12.101,5.428,12.101,12.102V370.735z"/>
	</g>
</g>
<g>
	<g>
		<path d="M414.016,311.026c-12.834-12.833-33.719-12.834-46.557,0c-12.835,12.836-12.835,33.722,0,46.558
			c6.418,6.417,14.849,9.626,23.278,9.626c8.431,0,16.861-3.209,23.279-9.626C426.851,344.748,426.851,323.862,414.016,311.026z
			 M403.71,347.278c-7.153,7.155-18.793,7.153-25.945,0c-7.153-7.153-7.153-18.792,0-25.945c3.576-3.577,8.274-5.365,12.973-5.365
			c4.698,0,9.396,1.788,12.972,5.365C410.864,328.485,410.864,340.125,403.71,347.278z"/>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
					</div>
				</div>
			</div>
				<div class="icon-box-text last-reset">
									

<p>Thanh toán khi nhận hàng</p>

		</div>
	</div><!-- .icon-box -->
	
	

</div></div>
<div class="col medium-4 small-12 large-4"  ><div class="col-inner"  >


		<div class="icon-box featured-box icon-box-left text-left"  >
					<div class="icon-box-img" style="width: 20px">
				<div class="icon">
					<div class="icon-inner" >
						<?xml version="1.0" encoding="iso-8859-1"?>
<!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
	<g>
		<path d="M501.344,245.336c-5.906,0-10.688,4.773-10.688,10.664c0,31.688-6.188,62.422-18.422,91.344
			c-11.828,27.938-28.734,53.031-50.297,74.594s-46.656,38.469-74.594,50.297c-28.922,12.234-59.656,18.422-91.344,18.422
			s-62.422-6.188-91.336-18.422c-27.938-11.828-53.039-28.734-74.602-50.297c-21.555-21.562-38.477-46.656-50.297-74.594
			c-12.227-28.922-18.43-59.656-18.43-91.344s6.203-62.422,18.43-91.336c11.82-27.945,28.742-53.039,50.297-74.602
			c21.562-21.555,46.664-38.477,74.602-50.297c28.914-12.234,59.648-18.43,91.336-18.43s62.422,6.195,91.344,18.43
			c25.844,10.938,49.281,26.258,69.719,45.57h-39.156c-5.875,0-10.656,4.773-10.656,10.664s4.781,10.664,10.656,10.664h64
			c5.906,0,10.688-4.773,10.688-10.664V32c0-5.891-4.781-10.664-10.688-10.664c-5.875,0-10.656,4.773-10.656,10.664v37.398
			C385.438,26.359,323.812,0,256,0C114.617,0,0,114.617,0,256c0,141.375,114.617,256,256,256c141.375,0,256-114.625,256-256
			C512,250.109,507.219,245.336,501.344,245.336z"/>
	</g>
</g>
<g>
	<g>
		<path d="M106.664,149.336v85.328V320h298.68v-85.336v-85.328H106.664z M384,234.664v63.992H128v-63.992v-64h256V234.664z"/>
	</g>
</g>
<g>
	<g>
		<path d="M255.812,180.664c-29.461,0-53.336,23.883-53.336,53.336s23.876,53.344,53.336,53.344
			c29.453,0,53.328-23.891,53.328-53.344S285.265,180.664,255.812,180.664z M255.812,266c-17.648,0-32-14.359-32-32
			c0-17.648,14.352-32,32-32c17.641,0,32,14.352,32,32C287.812,251.641,273.453,266,255.812,266z"/>
	</g>
</g>
<g>
	<g>
		<path d="M394.656,330.656h-277.32c-5.891,0-10.672,4.781-10.672,10.688c0,5.875,4.781,10.656,10.672,10.656h277.32
			c5.906,0,10.688-4.781,10.688-10.656C405.344,335.438,400.562,330.656,394.656,330.656z"/>
	</g>
</g>
<g>
	<g>
		<path d="M394.656,362.656h-277.32c-5.891,0-10.672,4.781-10.672,10.688c0,5.875,4.781,10.656,10.672,10.656h277.32
			c5.906,0,10.688-4.781,10.688-10.656C405.344,367.438,400.562,362.656,394.656,362.656z"/>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
					</div>
				</div>
			</div>
				<div class="icon-box-text last-reset">
									

<p>Đổi trả dễ dàng trong 14 ngày</p>

		</div>
	</div><!-- .icon-box -->
	
	

</div></div>
<div class="col medium-4 small-12 large-4"  ><div class="col-inner"  >


		<div class="icon-box featured-box icon-box-left text-left"  >
					<div class="icon-box-img" style="width: 20px">
				<div class="icon">
					<div class="icon-inner" >
						<?xml version="1.0" encoding="iso-8859-1"?>
<!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
<g>
	<g>
		<g>
			<path d="M466.395,88.411C395.95,69.109,325.091,39.054,261.478,1.496c-3.379-1.995-7.572-1.995-10.95,0
				C185.08,40.133,118.05,68.562,45.605,88.411c-4.68,1.281-7.924,5.535-7.924,10.388v110.046
				c0,113.323,52.279,188.335,96.137,231.306c47.216,46.265,102.216,71.85,122.185,71.85c19.967,0,74.967-25.585,122.183-71.85
				c43.857-42.97,96.133-117.982,96.133-231.306V98.798C474.319,93.946,471.075,89.692,466.395,88.411z M452.779,208.844
				c0,105.843-48.761,175.838-89.669,215.92c-46.431,45.495-96.074,65.695-107.107,65.695c-11.033,0-60.679-20.2-107.111-65.695
				c-40.907-40.083-89.67-110.077-89.67-215.92V106.974C128.5,87.304,193.018,59.853,256.005,23.25
				c61.414,35.632,129.151,64.448,196.774,83.72V208.844z"/>
			<path d="M160.538,105.769c-2.18-5.535-8.433-8.254-13.969-6.073c-19.24,7.581-38.988,14.559-58.695,20.741
				c-4.491,1.41-7.547,5.57-7.547,10.276v41.591c0,5.948,4.823,10.77,10.77,10.77s10.77-4.822,10.77-10.77v-33.72
				c17.679-5.72,35.339-12.047,52.598-18.848C160,117.557,162.719,111.304,160.538,105.769z"/>
			<path d="M180.997,107.812c1.445,0,2.912-0.291,4.319-0.905l0.198-0.086c5.449-2.388,7.903-8.731,5.515-14.178
				c-2.39-5.449-8.769-7.914-14.212-5.528l-0.174,0.075c-5.452,2.381-7.914,8.719-5.533,14.169
				C172.877,105.405,176.842,107.812,180.997,107.812z"/>
			<path d="M384.322,347.283c-4.977-3.253-11.651-1.854-14.908,3.125c-8.875,13.584-19.287,26.592-30.951,38.659
				c-9.592,9.922-19.986,19.17-30.893,27.485c-4.729,3.606-5.639,10.364-2.034,15.095c2.121,2.779,5.328,4.241,8.572,4.241
				c2.278,0,4.573-0.719,6.523-2.207c11.765-8.971,22.975-18.944,33.317-29.642c12.611-13.044,23.881-27.124,33.499-41.849
				C390.702,357.21,389.301,350.536,384.322,347.283z"/>
			<path d="M282.558,433.443l-0.618,0.364c-5.147,2.981-6.906,9.569-3.926,14.716c1.997,3.45,5.612,5.376,9.331,5.376
				c1.83,0,3.688-0.467,5.385-1.452l0.713-0.419c5.133-3.006,6.857-9.603,3.851-14.736
				C294.286,432.161,287.688,430.44,282.558,433.443z"/>
			<path d="M182.589,234.019c-6.613-6.614-15.408-10.254-24.762-10.254s-18.15,3.641-24.766,10.254
				c-13.653,13.656-13.653,35.876,0,49.531l63.596,63.594c6.614,6.612,15.409,10.253,24.764,10.253s18.15-3.641,24.765-10.255
				L378.947,214.38c13.652-13.659,13.652-35.876-0.002-49.527c-6.614-6.614-15.409-10.254-24.765-10.254
				c-9.355,0-18.15,3.641-24.765,10.254L221.42,272.848L182.589,234.019z M344.647,180.085c2.545-2.545,5.932-3.946,9.534-3.946
				c3.604,0,6.988,1.401,9.535,3.946c5.255,5.255,5.255,13.809-0.002,19.066l-132.759,132.76c-2.545,2.545-5.932,3.946-9.534,3.946
				s-6.989-1.401-9.535-3.946l-63.594-63.592c-5.257-5.257-5.257-13.811-0.002-19.066c2.546-2.545,5.933-3.948,9.536-3.948
				s6.988,1.401,9.533,3.946l46.445,46.446c2.021,2.019,4.759,3.154,7.616,3.154s5.595-1.134,7.614-3.154L344.647,180.085z"/>
		</g>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
					</div>
				</div>
			</div>
				<div class="icon-box-text last-reset">
									

<p>12 Months Invoice</p>

		</div>
	</div><!-- .icon-box -->
	
	

</div></div>


<style scope="scope">

</style>
</div><div class="product_meta">

	
	
	<span class="posted_in">Danh mục: <a href="http://mauweb.monamedia.net/lazada/danh-muc/giay-dep-nam/" rel="tag">Giày dép nam</a>, <a href="http://mauweb.monamedia.net/lazada/danh-muc/giay-dep-nam/giay-the-thao-sneaker/" rel="tag">Giày thể thao / Sneaker</a></span>
	
	
</div>

			</div><!-- .summary -->


			</div><!-- .row -->
			<div class="product-footer">
			
	<div class="woocommerce-tabs container tabbed-content">
		<ul class="product-tabs  nav small-nav-collapse tabs nav nav-uppercase nav-tabs nav-normal nav-left">
							<li class="description_tab  active">
					<a href="#tab-description">Mô tả</a>
				</li>
							<li class="reviews_tab  ">
					<a href="#tab-reviews">Đánh giá (0)</a>
				</li>
					</ul>
		<div class="tab-panels">
		
			<div class="panel entry-content active" id="tab-description">
        				

<p>GIÀY ADIDAS YEEZY 350 SIÊU THOÁNG</p>
<p>~ GIÁ CHỈ : 60K !!!!!!!!!!!!!!!</p>
<p>~ KHÔNG CÒN LO HÔI CHÂN</p>
<p>~ GIÀY NGẤM NƯỚC SAU 15P KHÔ NGAY !!!!!!</p>
<p>Đế cao su non bẻ gập thoải mái, dạng vải lưới thoáng mát</p>
<p>Phối được hầu hết mọi loại trang phục!!!</p>
<p>Phù hợp với Dã ngoại, Thể dục, Đi chơi,&#8230;!!!</p>
<p>&#8211; Dòng thể thao nên thích hợp với chạy bộ, tập thể thao, đi du lịch, dã ngoại, leo núi&#8230;</p>
<p>&#8211; Vải lưới sợi Fabric nhân tạo siêu thoáng khí, lội nước thoải mái chất liệu mau khô.</p>
<p>&#8211; Đế cao su, có gai chống trơn trượt, độ bám cực cao.</p>
<p>&#8211; Có dây rút chắc chắn, phù hợp với nhiều kích cỡ chân. nên thích hợp với chạy bộ, tập thể thao, đi du lịch, dã ngoại, leo núi&#8230;</p>
<p>&#8211; Vải lưới sợi Fabric nhân tạo siêu thoáng khí, lội nước thoải mái chất liệu mau khô.</p>
<p>&#8211; Đế cao su, có gai chống trơn trượt, độ bám cực cao.</p>
<p>&#8211; Có dây rút chắc chắn, phù hợp với nhiều kích cỡ chân. nên thích hợp với chạy bộ, tập thể thao, đi du lịch, dã ngoại, leo núi&#8230;</p>
<p>&#8211; Vải lưới sợi Fabric nhân tạo siêu thoáng khí, lội nước thoải mái chất liệu mau khô.</p>
<p>&#8211; Đế cao su, có gai chống trơn trượt, độ bám cực cao.</p>
<p>&#8211; Có dây rút chắc chắn, phù hợp với nhiều kích cỡ chân.</p>
			</div>

		
			<div class="panel entry-content " id="tab-reviews">
        				<div class="row" id="reviews">
	<div class="col large-12" id="comments">
		<h3 class="normal">Đánh giá</h3>

		
			<p class="woocommerce-noreviews">Chưa có đánh giá nào.</p>

			</div>

	
		<div id="review_form_wrapper" class="large-12 col">
			<div id="review_form" class="col-inner">
				<div class="review-form-inner has-border">
					<div id="respond" class="comment-respond">
		<h3 id="reply-title" class="comment-reply-title">Hãy là người đầu tiên nhận xét &ldquo;Giày Adidas Yeezy 350&rdquo; <small><a rel="nofollow" id="cancel-comment-reply-link" href="/lazada/san-pham/giay-adidas-yeezy-350/#respond" style="display:none;">Hủy</a></small></h3>			<form action="http://mauweb.monamedia.net/lazada/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate>
				<div class="comment-form-rating"><label for="rating">Đánh giá của bạn</label><select name="rating" id="rating" aria-required="true" required>
							<option value="">Xếp hạng&hellip;</option>
							<option value="5">Rất tốt</option>
							<option value="4">Tốt</option>
							<option value="3">Trung bình</option>
							<option value="2">Không tệ</option>
							<option value="1">Rất tệ</option>
						</select></div><p class="comment-form-comment"><label for="comment">Nhận xét của bạn <span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required></textarea></p><p class="comment-form-author"><label for="author">Tên <span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" aria-required="true" required /></p>
<p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="email" value="" size="30" aria-required="true" required /></p>
<p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Gửi đi" /> <input type='hidden' name='comment_post_ID' value='401' id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
</p>			</form>
			</div><!-- #respond -->
					</div>
			</div>
		</div>

	
</div>
			</div>

				</div><!-- .tab-panels -->
	</div><!-- .tabbed-content -->

			</div>
	
    </div><!-- col large-9 -->
</div>
</main>
@endsection()