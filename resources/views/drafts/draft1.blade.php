@extends('layouts.app1')
@section('content')
<div class="container-xl">
	<div class="row">
		<div class="col-md-12">
			<h2>Featured <b>Products</b></h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
			<!-- Carousel indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>   
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
				<div class="item carousel-item active">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="/comestic/anh1.jpg" class="img-fluid" alt="">									
								</div>
								<div class="thumb-content">
									<h4>Product 1</h4>									
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="/comestic/anh2.jpg" class="img-fluid" alt="Headphone">
								</div>
								<div class="thumb-content">
									<h4>Product 1</h4>									
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<p class="item-price"><strike>$25.00</strike> <b>$23.99</b></p>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>		
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="/comestic/anh3.jpg" class="img-fluid" alt="Macbook">
								</div>
								<div class="thumb-content">
									<h4>Product 1</h4>									
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<p class="item-price"><strike>$899.00</strike> <b>$649.00</b></p>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>								
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="/comestic/anh4.jpg" class="img-fluid" alt="Nikon">
								</div>
								<div class="thumb-content">
									<h4>Product 1</h4>									
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<p class="item-price"><strike>$315.00</strike> <b>$250.00</b></p>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
					</div>
				</div>
				<div class="item carousel-item">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="/comestic/anh5.jpg" class="img-fluid" alt="Play Station">
								</div>
								<div class="thumb-content">
									<h4>Product 1</h4>
									<p class="item-price"><strike>$289.00</strike> <span>$269.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="/comestic/anh6.jpg" class="img-fluid" alt="Macbook">
								</div>
								<div class="thumb-content">
									<h4>Product 1</h4>
									<p class="item-price"><strike>$1099.00</strike> <span>$869.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="/comestic/anh7.jpg" class="img-fluid" alt="Speaker">
								</div>
								<div class="thumb-content">
									<h4>Product 1</h4>
									<p class="item-price"><strike>$109.00</strike> <span>$99.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="/comestic/anh8.jpg" class="img-fluid" alt="Galaxy">
								</div>
								<div class="thumb-content">
									<h4>Product 1</h4>
									<p class="item-price"><strike>$599.00</strike> <span>$569.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>						
					</div>
				</div>
				<div class="item carousel-item">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="/comestic/anh9.jpg" class="img-fluid" alt="iPhone">
								</div>
								<div class="thumb-content">
									<h4>Apple iPhone</h4>
									<p class="item-price"><strike>$369.00</strike> <span>$349.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="/comestic/anh11.jpg" class="img-fluid" alt="Canon">
								</div>
								<div class="thumb-content">
									<h4>Canon DSLR</h4>
									<p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="/comestic/anh10.jpg" class="img-fluid" alt="Pixel">
								</div>
								<div class="thumb-content">
									<h4>Google Pixel</h4>
									<p class="item-price"><strike>$450.00</strike> <span>$418.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>	
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<span class="wish-icon"><i class="fa fa-heart-o"></i></span>
								<div class="img-box">
									<img src="/comestic/anh12.jpg" class="img-fluid" alt="Watch">
								</div>
								<div class="thumb-content">
									<h4>Apple Watch</h4>
									<p class="item-price"><strike>$350.00</strike> <span>$330.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>						
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Carousel controls -->
			<a class="carousel-control-prev ccp1" href="#myCarousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-control-next cpp2" href="#myCarousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
		</div>
	</div>
    <div class="container">
        <div class="row mt-5">
            <h3 class="list-product-title">TOP REVIEWED</h3>
            <div class="product-group">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card card-product mb-3">
                            <img class="card-img-top" src="./asset/img/sanpham/sp1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title product-title">Product</h5>
                                <div class="card-text product-price">
                                    <span class="del-price">100.000 vnd</span>
                                    <span class="new-price">80.000 vnd</span>
                                </div>
                                <a class="btn btn-info btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                                <a class="btn btn-outline-success btn-detail">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card card-product mb-3">
                            <img class="card-img-top" src="./asset/img/sanpham/sp2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title product-title">Product</h5>
                                <div class="card-text product-price">
                                    <span class="del-price">100.000 vnd</span>
                                    <span class="new-price">80.000 vnd</span>
                                </div>
                                <a class="btn btn-success btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                                <a class="btn btn-outline-success btn-detail">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card card-product mb-3">
                            <img class="card-img-top" src="./asset/img/sanpham/sp3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title product-title">Product</h5>
                                <div class="card-text product-price">
                                    <span class="del-price">100.000 vnd</span>
                                    <span class="new-price">80.000 vnd</span>
                                </div>
                                <a class="btn btn-success btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                                <a class="btn btn-outline-success btn-detail">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card card-product mb-3">
                            <img class="card-img-top" src="./asset/img/sanpham/sp4.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title product-title">Product</h5>
                                <div class="card-text product-price">
                                    <span class="del-price">100.000 vnd</span>
                                    <span class="new-price">80.000 vnd</span>
                                </div>
                                <a class="btn btn-success btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                                <a class="btn btn-outline-success btn-detail">Xem chi tiết</a>
                                <h3 class="sale-sticky">Sale</h3>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <h3 class="list-product-title">TOP REVIEWED</h3>
            <div class="product-group">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card card-product mb-3">
                            <img class="card-img-top" src="./asset/img/sanpham/sp1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title product-title">Product</h5>
                                <div class="card-text product-price">
                                    <span class="del-price">100.000 vnd</span>
                                    <span class="new-price">80.000 vnd</span>
                                </div>
                                <a class="btn btn-info btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                                <a class="btn btn-outline-success btn-detail">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card card-product mb-3">
                            <img class="card-img-top" src="./asset/img/sanpham/sp2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title product-title">Product</h5>
                                <div class="card-text product-price">
                                    <span class="del-price">100.000 vnd</span>
                                    <span class="new-price">80.000 vnd</span>
                                </div>
                                <a class="btn btn-success btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                                <a class="btn btn-outline-success btn-detail">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card card-product mb-3">
                            <img class="card-img-top" src="./asset/img/sanpham/sp3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title product-title">Product</h5>
                                <div class="card-text product-price">
                                    <span class="del-price">100.000 vnd</span>
                                    <span class="new-price">80.000 vnd</span>
                                </div>
                                <a class="btn btn-success btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                                <a class="btn btn-outline-success btn-detail">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card card-product mb-3">
                            <img class="card-img-top" src="./asset/img/sanpham/sp4.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title product-title">Product</h5>
                                <div class="card-text product-price">
                                    <span class="del-price">100.000 vnd</span>
                                    <span class="new-price">80.000 vnd</span>
                                </div>
                                <a class="btn btn-success btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                                <a class="btn btn-outline-success btn-detail">Xem chi tiết</a>
                                <h3 class="sale-sticky">Sale</h3>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <h3 class="list-product-title">TOP REVIEWED</h3>
            <div class="product-group">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card card-product mb-3">
                            <img class="card-img-top" src="./asset/img/sanpham/sp1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title product-title">Product</h5>
                                <div class="card-text product-price">
                                    <span class="del-price">100.000 vnd</span>
                                    <span class="new-price">80.000 vnd</span>
                                </div>
                                <a class="btn btn-info btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                                <a class="btn btn-outline-success btn-detail">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card card-product mb-3">
                            <img class="card-img-top" src="./asset/img/sanpham/sp2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title product-title">Product</h5>
                                <div class="card-text product-price">
                                    <span class="del-price">100.000 vnd</span>
                                    <span class="new-price">80.000 vnd</span>
                                </div>
                                <a class="btn btn-success btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                                <a class="btn btn-outline-success btn-detail">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card card-product mb-3">
                            <img class="card-img-top" src="./asset/img/sanpham/sp3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title product-title">Product</h5>
                                <div class="card-text product-price">
                                    <span class="del-price">100.000 vnd</span>
                                    <span class="new-price">80.000 vnd</span>
                                </div>
                                <a class="btn btn-success btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                                <a class="btn btn-outline-success btn-detail">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card card-product mb-3">
                            <img class="card-img-top" src="./asset/img/sanpham/sp4.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title product-title">Product</h5>
                                <div class="card-text product-price">
                                    <span class="del-price">100.000 vnd</span>
                                    <span class="new-price">80.000 vnd</span>
                                </div>
                                <a class="btn btn-success btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                                <a class="btn btn-outline-success btn-detail">Xem chi tiết</a>
                                <h3 class="sale-sticky">Sale</h3>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

 