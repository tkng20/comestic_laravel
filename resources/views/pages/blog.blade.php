@extends('frontend.layouts.master')

@section('title','E-SHOP || Blog Page')

@section('main-content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="#">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0);">Blog Grid Sidebar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
        
    <!-- Start Blog Single -->
    <section class="blog-single shop-blog grid section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                                <!-- Start Single Blog  -->
                            <div class="shop-single-blog">
                                <img src="/storage/photo/blog/blog1.jpg" alt="">
                                    <div class="content">
                                        <p class="date"><i class="fa fa-calendar" aria-hidden="true"></i> 1.11.2021
                                            <span class="float-right">
                                                <i class="fa fa-user" aria-hidden="true"></i> 
                                                            Anonymous
                                            </span>
                                            </p>
                                            <a href="#" class="title">Đây là tiêu đề</a>
                                            <p>đây là tóm tắt</p>
                                            <a href="#" class="more-btn">Continue Reading</a>
                                    </div>
                            </div>
                                <!-- End Single Blog  -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                                <!-- Start Single Blog  -->
                            <div class="shop-single-blog">
                                <img src="/storage/photo/blog/blog2.jpg" alt="">
                                    <div class="content">
                                        <p class="date"><i class="fa fa-calendar" aria-hidden="true"></i> 1.11.2021
                                            <span class="float-right">
                                                <i class="fa fa-user" aria-hidden="true"></i> 
                                                            Anonymous
                                            </span>
                                            </p>
                                            <a href="#" class="title">Đây là tiêu đề</a>
                                            <p>đây là tóm tắt</p>
                                            <a href="#" class="more-btn">Continue Reading</a>
                                    </div>
                            </div>
                                <!-- End Single Blog  -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                                <!-- Start Single Blog  -->
                            <div class="shop-single-blog">
                                <img src="/storage/photo/blog/blog3.jpg" alt="">
                                    <div class="content">
                                        <p class="date"><i class="fa fa-calendar" aria-hidden="true"></i> 1.11.2021
                                            <span class="float-right">
                                                <i class="fa fa-user" aria-hidden="true"></i> 
                                                            Anonymous
                                            </span>
                                            </p>
                                            <a href="#" class="title">Đây là tiêu đề</a>
                                            <p>đây là tóm tắt</p>
                                            <a href="#" class="more-btn">Continue Reading</a>
                                    </div>
                            </div>
                                <!-- End Single Blog  -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="main-sidebar">
                        <!-- Single Widget -->
                        <div class="single-widget search">
                            <form class="form" method="GET" action="#">
                                <input type="text" placeholder="Search Here..." name="search">
                                <button class="button" type="sumbit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        <div class="single-widget category">
                            <h3 class="title">Blog Categories</h3>
                            <ul class="categor-list">
                                HOW TO
                            <form action="#" method="POST">
                                    <li>
                                        <a href="#">Đây là blog 1 </a>
                                    </li>
                                    <li>
                                        <a href="#">Đây là blog 2 </a>
                                    </li>
                                </form>
                            </ul>
                        </div>
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        <div class="single-widget recent-post">
                            <h3 class="title">Recent post</h3>
                                <!-- Single Post -->
                                <div class="single-post">
                                    <div class="image">
                                        <img src="storage/photo/sanpham/sp1.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <h5><a href="#">Đây là blog ví dụ 1</a></h5>
                                        <ul class="comment">
                                            <li><i class="fa fa-calendar" aria-hidden="true"></i>1.11.2021</li>
                                            <li><i class="fa fa-user" aria-hidden="true"></i> 
                                                        Anonymous
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-post">
                                    <div class="image">
                                        <img src="storage/photo/sanpham/sp1.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <h5><a href="#">Đây là blog ví dụ 1</a></h5>
                                        <ul class="comment">
                                            <li><i class="fa fa-calendar" aria-hidden="true"></i>1.11.2021</li>
                                            <li><i class="fa fa-user" aria-hidden="true"></i> 
                                                        Anonymous
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Single Post -->
                        </div>
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        <div class="single-widget side-tags">
                            <h3 class="title">Tags</h3>
                            <ul class="tag">
                                <form action="#" method="POST">
                                        <li>
                                            <li>
                                                <a href="#">Tiêu đề 1 </a>
                                            </li>
                                        </li>
                                        <li>
                                            <li>
                                                <a href="#">Tiêu đề 2 </a>
                                            </li>
                                        </li>
                                        <li>
                                            <li>
                                                <a href="#">Tiêu đề 3 </a>
                                            </li>
                                        </li>
                                </form>
                            </ul>
                        </div>
                        <!--/ End Single Widget -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Blog Single -->
@endsection
@push('styles')
    <style>
        .pagination{
            display:inline-flex;
        }
    </style>
@endpush