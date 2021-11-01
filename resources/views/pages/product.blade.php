@extends('frontend.layouts.master')

@section('title','E-SHOP || PRODUCT PAGE')

@section('main-content')
	
		<!-- Breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<ul class="bread-list">
								<li><a href="#">Home<i class="ti-arrow-right"></i></a></li>
								<li class="active"><a href="#">Shop List</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->

		<form action="#" method="POST">
			<!-- Product Style 1 -->
			<section class="product-area shop-sidebar shop-list shop section">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-4 col-12">
                            <div class="shop-sidebar">
                                <!-- Single Widget -->
                                <div class="single-widget category">
                                    <h3 class="title">Categories</h3>
                                    <ul class="categor-list">
                                        <li>
                                                        <li><a href="#">CATEGORY 1</a>
                                                            <ul>
                                                                    <li><a href="#">PRODUCT 1</a></li>
                                                                    <li><a href="#">PRODUCT 2</a></li>
                                                                    <li><a href="#">PRODUCT 3</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">CATEGORY 2</a>
                                                            <ul>
                                                                    <li><a href="#">PRODUCT 1</a></li>
                                                                    <li><a href="#">PRODUCT 2</a></li>
                                                                    <li><a href="#">PRODUCT 3</a></li>
                                                            </ul>
                                                        </li>
                                        </li>
                                    </ul>
                                </div>
                                <!--/ End Single Widget -->
                                <!-- Shop By Price -->
                                <div class="single-widget range">
                                        <h3 class="title">Shop by Price</h3>
                                        <div class="price-filter">
                                            <div class="price-filter-inner">
                                                <div id="slider-range" data-min="0" data-max="10"></div>
                                                <div class="product_filter">
                                                <button type="submit" class="filter_button">Filter</button>
                                                <div class="label-input">
                                                    <span>Range:</span>
                                                    <input style="" type="text" id="amount" readonly/>
                                                    <input type="hidden" name="price_range" id="price_range" value="0"/>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                    <!--/ End Shop By Price -->
                                <!-- Single Widget -->
                                    {{-- <div class="single-widget recent-post">
                                        <h3 class="title">Recent post</h3>
                                            <div class="single-post first">
                                                <div class="image">
                                                    <img src="#">
                                                </div>
                                                <div class="content">
                                                    <h5><a href="#">PRODUCT 1</a></h5>
                                                    <p class="price"><del class="text-muted">100000</del>   ĐỒNG  </p>
                                                    
                                                </div>
                                            </div>
                                            <div class="single-post first">
                                                <div class="image">
                                                    <img src="#">
                                                </div>
                                                <div class="content">
                                                    <h5><a href="#">PRODUCT 1</a></h5>
                                                    <p class="price"><del class="text-muted">0</del>   ĐỒNG  </p>
                                                    
                                                </div>
                                            </div>
                                </div> --}}
                                <!--/ End Single Widget -->
                        </div>
						</div>
                        <div class="col-lg-9 col-md-8 col-12">
							<div class="row">
								<div class="col-12">
									<!-- Shop Top -->
									<div class="shop-top">
                                        <div class="shop-shorter">
                                            <div class="single-shorter">
                                                <label>Show :</label>
                                                <select class="show" name="show" onchange="this.form.submit();">
                                                    <option value="">Default</option>
                                                    <option value="9"  selected >09</option>
                                                    <option value="15" selected >15</option>
                                                    <option value="21" selected >21</option>
                                                    <option value="30" selected >30</option>
                                                </select>
                                            </div>
                                            <div class="single-shorter">
                                                <label>Sort By :</label>
                                                <select class='sortBy' name='sortBy' onchange="this.form.submit();">
                                                    <option value="">Default</option>
                                                    <option value="title" selected >Name</option>
                                                    <option value="price"  selected >Price</option>
                                                    <option value="category" selected >Category</option>
                                                    <option value="brand"  selected>Brand</option>
                                                </select>
                                            </div>
                                        </div>
                                        <ul class="view-mode">
                                            <li class="active"><a href="javascript:void(0)"><i class="fa fa-th-large"></i></a></li>
                                            <li><a href="#"><i class="fa fa-th-list"></i></a></li>
                                        </ul>
                                    </div>
									<!--/ End Shop Top -->
								</div>
							</div>
							<div class="row">
								{{-- @if(count($products)) --}}
									{{-- @foreach($products as $product) --}}
									 	{{-- {{$product}} --}}
										<!-- Start Single List -->
										<div class="col-12">
											<div class="row">
												<div class="col-lg-4 col-md-6 col-sm-6">
													<div class="single-product">
														<div class="product-img">
															<a href="#">
															<img class="default-img" src="storage/photo/sanpham/sp1.jpg" alt="">
															<img class="hover-img" src="storage/photo/sanpham/sp1.jpg" alt="">
															</a>
															<div class="button-head">
																<div class="product-action">
																	<a data-toggle="modal" data-target="#" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																	<a title="Wishlist" href="#" class="wishlist" data-id="0"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																</div>
																<div class="product-action-2">
																	<a title="Add to cart" href="#">Add to cart</a>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-8 col-md-6 col-12">
													<div class="list-content">
														<div class="product-content">
															<div class="product-price">
																<span>$10000</span>
																<del>$5000</del>
															</div>
															<h3 class="title"><a href="#">PRODUCT 1</a></h3>
														</div>
														<p class="des pt-2">nature</p>
														<a href="javascript:void(0)" class="btn cart" data-id="0">Buy Now!</a>
													</div>
												</div>
											</div>
										</div>
							</div>
							 <div class="row">
                            <div class="col-md-12 justify-content-center d-flex">
                            </div>
                          </div>
						</div>
							 <div class="row">
                            <div class="col-md-12 justify-content-center d-flex">
                                {{-- {{$products->appends($_GET)->links()}}  --}}
                            </div>
                          </div>
						</div>
					</div>
				</div>
			</section>
			<!--/ End Product Style 1  -->	
		</form>
@endsection
@push ('styles')
<style>
	 .pagination{
        display:inline-flex;
    }
	.filter_button{
        /* height:20px; */
        text-align: center;
        background:#6ed4a4;
        padding:8px 16px;
        margin-top:10px;
        color: white;
    }
</style>
@endpush
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script>
        $(document).ready(function(){
        /*----------------------------------------------------*/
        /*  Jquery Ui slider js
        /*----------------------------------------------------*/
        if ($("#slider-range").length > 0) {
            const max_value = parseInt( $("#slider-range").data('max') ) || 500;
            const min_value = parseInt($("#slider-range").data('min')) || 0;
            const currency = $("#slider-range").data('currency') || '';
            let price_range = min_value+'-'+max_value;
            if($("#price_range").length > 0 && $("#price_range").val()){
                price_range = $("#price_range").val().trim();
            }
            
            let price = price_range.split('-');
            $("#slider-range").slider({
                range: true,
                min: min_value,
                max: max_value,
                values: price,
                slide: function (event, ui) {
                    $("#amount").val(currency + ui.values[0] + " -  "+currency+ ui.values[1]);
                    $("#price_range").val(ui.values[0] + "-" + ui.values[1]);
                }
            });
            }
        if ($("#amount").length > 0) {
            const m_currency = $("#slider-range").data('currency') || '';
            $("#amount").val(m_currency + $("#slider-range").slider("values", 0) +
                "  -  "+m_currency + $("#slider-range").slider("values", 1));
            }
        })
</script>
@endpush