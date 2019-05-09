<div id="wide-nav" class="header-bottom wide-nav nav-dark flex-has-center hide-for-medium">
    <div class="flex-row container">
            
        <div class="flex-col hide-for-medium flex-center">
			<ul class="nav header-nav header-bottom-nav nav-center  nav-line-bottom nav-spacing-xsmall nav-uppercase">
				<?php 
				$cate1 = DB::table('categorys')->select()->get();
				?>
				@foreach($cate1 as $menu1)
					@if($menu1->parents_id == $menu1->id)
						<li id="menu-item-1236" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children  menu-item-1236 has-dropdown">
							<a href="" class="menu-image-title-after nav-top-link">
								<span class="menu-image-title">{{$menu1->name}}</span>
							</a>
							
							<ul class='nav-dropdown nav-dropdown-simple'>
								<?php 
								$cate2 = DB::table('categorys')->where('parents_id',$menu1->id)->get();
								?>
								@foreach($cate2 as $menu2)
								<li id="menu-item-1237" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat  menu-item-1237">
									<a href="" class="menu-image-title-after">
										<span class="menu-image-title">{{$menu2->name}}</span>
									</a>
								</li>
								@endforeach
							</ul>
						</li>
					@endif
				@endforeach
			</ul>
        </div><!-- flex-col -->           
    </div><!-- .flex-row -->
</div>