<div id="product-sidebar" class="col large-3 hide-for-medium shop-sidebar ">
		<aside id="woof_widget-3" class="widget WOOF_Widget">        <div class="widget widget-woof">
            <span class="widget-title shop-sidebar">Lọc sản phẩm</span><div class="is-divider small"></div>

            
            



            <div class="woof woof_sid woof_sid_widget" data-sid="widget" data-shortcode="woof sid='widget' start_filtering_btn='0' price_filter='3' redirect='' ajax_redraw='0' " data-redirect="" data-autosubmit="1" data-ajax-redraw="0">

    		<a href="#" class="woof_edit_view" data-sid="widget">show blocks helper</a>
    		<div></div>
    
                <!--- here is possible drop html code which is never redraws by AJAX ---->

                <div class="woof_redraw_zone" data-woof-ver="2.1.7">
    

    	<div data-css-class="woof_text_search_container" class="woof_text_search_container woof_container">
    <div class="woof_container_overlay_item"></div>
    <div class="woof_container_inner">
        
        <div class="woof_show_text_search_container">
            <img width="36" class="woof_show_text_search_loader" style="display: none;" src="http://mauweb.monamedia.net/lazada/wp-content/plugins/woocommerce-products-filter/ext/by_text/img/loader.gif" alt="loader" />
            <a href="javascript:void(0);" data-uid="woof_text_search_5c6d2dfbb8f4d" class="woof_text_search_go woof_text_search_5c6d2dfbb8f4d"></a>
            <input type="search" class="woof_show_text_search woof_text_search_5c6d2dfbb8f4d" id="woof_text_search_5c6d2dfbb8f4d" data-uid="woof_text_search_5c6d2dfbb8f4d" data-auto_res_count="0" data-auto_search_by="" placeholder="Bạn muốn tìm gì?" name="woof_text" value="" />
        </div>
    </div>
</div>	<div data-css-class="woof_container_product_cat" class="woof_container woof_container_checkbox woof_container_product_cat woof_container_1 woof_container_danhmcsnphm">
	    <div class="woof_container_overlay_item"></div>
	    <div class="woof_container_inner woof_container_inner_danhmcsnphm">
    	<h4>Danh mục Sách	    
            <a href="javascript: void(0);" title="toggle" class="woof_front_toggle woof_front_toggle_opened" data-condition="opened">+</a>
	    </h4>
		<div class="woof_block_html_items" >
	<ul class="woof_list woof_list_checkbox">
    
    <?php 
        $cate1 = DB::table('categorys')->select()->get();
    ?>
    @foreach($cate1 as $menu1)
    @if($menu1->parents_id == $menu1->id)
    <li class="woof_term_207 " >
        
        <input type="checkbox"  id="woof_207_5c6d2dfbb91fe" class="woof_checkbox_term woof_checkbox_term_207" data-tax="product_cat" name="bach-hoa-online" data-term-id="207" value="207"  />
        <label class="woof_checkbox_label " for="woof_207_5c6d2dfbb91fe">{{$menu1->name}}<span class="woof_checkbox_count"></span></label>
        <ul class="woof_childs_list woof_childs_list_207" style="display: none;">
            <?php 
                $cate2 = DB::table('categorys')->where('parents_id',$menu1->id)->get();
            ?>
            @foreach($cate2 as $menu2)
            <li >                
               <input type="checkbox"  id="woof_208_5c6d2dfbb9285" class="woof_checkbox_term woof_checkbox_term_208" data-tax="product_cat" name="an-vat-banh-keo" data-term-id="208" value="208"  />
                <label class="woof_checkbox_label " for="woof_208_5c6d2dfbb9285">{{$menu2->name}}<span class="woof_checkbox_count"></span></label>
                <input type="hidden" value="Ăn vặt &amp; Bánh kẹo" data-anchor="woof_n_product_cat_an-vat-banh-keo" />            
            </li>     
            @endforeach               
        </ul>
   
    <input type="hidden" value="Bách hóa online" data-anchor="woof_n_product_cat_bach-hoa-online" />
    </li>
 @endif
@endforeach
    </div>
    </div>
    </div>
</div>
</div>
</aside>	
</div><!-- col large-3 -->