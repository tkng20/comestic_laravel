@extends('layouts.app')
@section('content')
<!-- slid -->
<div id="carouselExampleIndicators" class="carousel slide mt-1" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="./asset/img/Untitled3.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="./asset/img/Untitled6.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="./asset/img/Untitled7.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <div class="btn-shop">
        <a href="#" id="btn-shop">SHOP NOW</a>

    </div>
    <div class="icon-contrainer">
        <a href=""><i class="fas fa-camera"></i></a>
        <a href=""><i class="fas fa-camera"></i></a>
        <a href=""><i class="fas fa-camera" aria-hidden="true"></i></a>
    </div>

</div>
<!-- end slide -->

<!-- list product -->
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
                            <a class="btn btn-outline-success btn-detail">Xem chi ti???t</a>
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
                            <a class="btn btn-outline-success btn-detail">Xem chi ti???t</a>
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
                            <a class="btn btn-outline-success btn-detail">Xem chi ti???t</a>
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
                            <a class="btn btn-outline-success btn-detail">Xem chi ti???t</a>
                            <h3 class="sale-sticky">Sale</h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- end list product -->
<!--gioithieu-section-->
<div class="gioithieu-section">
    <div class="content-section">
        <h3>Beauty With a Conscience</h3>
        <h5>For every purchase made, we donate to help our global community</h5>
        <div class="about-img">
            <div class="container">
                <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-12"><img src="./asset/img/icon/86815757-hand-holding-plant-icon-seeding-in-hand-iconic-symbol-inside-a-circle-on-white-background-vector-ico-removebg-preview.png" alt=""></div>
                    <div class="col-md-3 col-sm-6 col-12"><img src="./asset/img/icon/86815757-hand-holding-plant-icon-seeding-in-hand-iconic-symbol-inside-a-circle-on-white-background-vector-ico-removebg-preview.png" alt=""></div>
                    <div class="col-md-3 col-sm-6 col-12"><img src="./asset/img/icon/depositphotos_361271500-stock-illustration-charity-and-donation-concept-solidarity-removebg-preview.png" alt=""></div>
                    <div class="col-md-3 col-sm-6 col-12"><img src="./asset/img/icon/86815757-hand-holding-plant-icon-seeding-in-hand-iconic-symbol-inside-a-circle-on-white-background-vector-ico-removebg-preview.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--new product-->
<div class="container">
    <div class="row mt-5">
        <h3 class="list-product-title">New product</h3>
        <div class="product-group">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card card-product mb-3">
                        <img class="card-img-top" src="./asset/img/sanpham/sp5.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title product-title">Product</h5>
                            <div class="card-text product-price">
                                <span class="del-price">100.000 vnd</span>
                                <span class="new-price">80.000 vnd</span>
                            </div>
                            <a class="btn btn-success btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-success btn-detail">Xem chi ti???t</a>
                            <h3 class="badge rounded-pill bg-danger" id="new">New</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card card-product mb-3">
                        <img class="card-img-top" src="./asset/img/sanpham/sp8.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title product-title">Product</h5>
                            <div class="card-text product-price">
                                <span class="del-price">100.000 vnd</span>
                                <span class="new-price">80.000 vnd</span>
                            </div>
                            <a class="btn btn-success btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-success btn-detail">Xem chi ti???t</a>
                            <h3 class="badge rounded-pill bg-danger" id="new">New</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card card-product mb-3">
                        <img class="card-img-top" src="./asset/img/sanpham/sp7.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title product-title">Product</h5>
                            <div class="card-text product-price">
                                <span class="del-price">100.000 vnd</span>
                                <span class="new-price">80.000 vnd</span>
                            </div>
                            <a class="btn btn-success btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-success btn-detail">Xem chi ti???t</a>
                            <h3 class="badge rounded-pill bg-danger" id="new">New</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card card-product mb-3">
                        <img class="card-img-top" src="./asset/img/sanpham/sp6.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title product-title">Product</h5>
                            <div class="card-text product-price">
                                <span class="del-price">100.000 vnd</span>
                                <span class="new-price">80.000 vnd</span>
                            </div>
                            <a class="btn btn-success btn-add-to-cart"><i class="fas fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-success btn-detail">Xem chi ti???t</a>
                            <h3 class="badge rounded-pill bg-danger" id="new">New</h3>
                            <a class="heart"><i class="fas fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- end list product -->
</div>
<!--about gioithieu-->
<div class="container">
    <div class="row cosmetic">
        <div class="col-md-6">
            <img src="./asset/img/Thi???t k??? kh??ng t??n.jpg" alt="" width="100%">

        </div>
        <div class="col-md-6">
            <div class="inner-cosmetic">
                <h2>Genuine Cosmetic</h2>
                <h3>Customers Satisfaction</h3>
                <h4>
                    Organic cream
                </h4>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi libero debitis perspiciatis asperiores deserunt qui temporibus voluptates. Ducimus, expedita rerum laborum earum eos accusamus veritatis repellendus nihil corrupti distinctio aliquam!

                </p>
                <h4>
                    Natural
                </h4>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi libero debitis perspiciatis asperiores deserunt qui temporibus voluptates. Ducimus, expedita rerum laborum earum eos accusamus veritatis repellendus nihil corrupti distinctio aliquam!

                </p>
                <h4>
                    Quality
                </h4>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi libero debitis perspiciatis asperiores deserunt qui temporibus voluptates. Ducimus, expedita rerum laborum earum eos accusamus veritatis repellendus nihil corrupti distinctio aliquam!

                </p>
                <h4>
                    Quality
                </h4>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi libero debitis perspiciatis asperiores deserunt qui temporibus voluptates. Ducimus, expedita rerum laborum earum eos accusamus veritatis repellendus nihil corrupti distinctio aliquam!

                </p>
            </div>
        </div>
    </div>
</div>
<!--about blog-->
<div class="container">
    <div class="row mt-5">
        <h3 class="list-product-title">From our bolg</h3>
        <div class="product-group">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="card card-product mb-3">
                        <img class="card-img-top" src="./asset/img/team/blog1.jpg" alt="Card image cap">
                        <div class="card-body" id="blog-card">
                            <h5 class="card-title product-title">Quy tr??nh SKINCARE</h5>
                            <div class="card-text product-price">


                            </div>

                            <a class="btn btn-outline-success btn-detail">Xem chi ti???t</a>
                            <h3 class="badge rounded-pill bg-danger" id="new">New</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="card card-product mb-3">
                        <img class="card-img-top" src="./asset/img/team/blog2.jpg" alt="Card image cap">
                        <div class="card-body " id="blog-card">
                            <h5 class="card-title product-title">Quy tr??nh SKINCARE</h5>
                            <div class="card-text product-price">


                            </div>

                            <a class="btn btn-success btn-detail">Xem chi ti???t</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="card card-product mb-3">
                        <img class="card-img-top" src="./asset/img/team/blog9.jpg" alt="Card image cap">
                        <div class="card-body" id="blog-card">
                            <h5 class="card-title product-title">Quy tr??nh SKINCARE</h5>
                            <div class="card-text product-price">


                            </div>

                            <a class="btn btn-outline-success btn-detail">Xem chi ti???t</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection