@extends('frontend.layouts.master')

@section('title','E-TECH || Blog Detail page')

@section('main-content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="#">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0);">Blog Single Sidebar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
        
    <!-- Start Blog Single -->
    <section class="blog-single section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="blog-single-main">
                        <div class="row">
                            <div class="col-12">
                                <div class="image">
                                    <img src="storage/photo/blog/blog1.jpg" alt="">
                                </div>
                                <div class="blog-detail">
                                    <h2 class="blog-title">TIÊU ĐỀ BLOG 1</h2>
                                    <div class="blog-meta">
                                        <span class="author"><a href="#"><i class="fa fa-user"></i>By TÁC GIẢ</a><a href="#"><i class="fa fa-calendar"></i>1.11.2021</a><a href="#"><i class="fa fa-comments"></i>Comment (0)</a></span>
                                    </div>
                                    <div class="sharethis-inline-reaction-buttons"></div>
                                    <div class="content">
                                        <blockquote> <i class="fa fa-quote-left"></i> empty</blockquote>
                                        <p>What Are Humectants?
                                            The most straightforward and easiest explanation is that humectants are hydrators, which bind water to the skin. They work by attracting water molecules from the air, and pulling them into the skin’s surface. This match made in hydration heaven leaves your skin plump and supple.
                                            
                                            Humectants work best in humid climates, since there’s plenty of moisture to pull from the air into the skin. But if you’re in drier environments or heading into colder temperatures, you may find humectants can’t do the job alone.
                                            
                                            The most common humectants are hyaluronic acid, glycerin, and any type of water of hydrosol. Other star humectant ingredients you may see are amino acids (urea), sugar alcohols (sorbitol), honey, aloe vera gel, ceramides, and alpha-hydroxy acids (lactic acid).</p>
                                    </div>
                                </div>
                                <div class="share-social">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="content-tags">
                                                <h4>Tags:</h4>
                                                <ul class="tag-inner">
                                                    <li><a href="#">skincare</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @auth
                            <div class="col-12 mt-4">			
                                <div class="reply">
                                    <div class="reply-head comment-form" id="commentFormContainer">
                                        <h2 class="reply-title">Leave a Comment</h2>
                                        <!-- Comment Form -->
                                        <form class="form comment_form" id="commentForm" action="#" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group  comment_form_body">
                                                        <label>Your Message<span>*</span></label>
                                                        <textarea name="comment" id="comment" rows="10" placeholder=""></textarea>
                                                        <input type="hidden" name="post_id" value="0" />
                                                        <input type="hidden" name="parent_id" id="parent_id" value="" />
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group button">
                                                        <button type="submit" class="btn"><span class="comment_btn comment">Post Comment</span><span class="comment_btn reply" style="display: none;">Reply Comment</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- End Comment Form -->
                                    </div>
                                </div>			
                            </div>
                            	
                            @else 
                            <p class="text-center p-5">
                                You need to <a href="#" style="color:rgb(54, 54, 204)">Login</a> OR <a style="color:blue" href="#">Register</a> for comment.

                            </p>

                           
                            <!--/ End Form -->
                            @endauth										
                            <div class="col-12">
                                <div class="comments">
                                    <h3 class="comment-title">Comments (0)</h3>
                                    <!-- Single Comment -->
                                    
                                    <!-- End Single Comment -->
                                </div>									
                            </div>	
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
                                <li><a href="#">Tiêu đề </a></li>
                            </ul>
                        </div>
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        <div class="single-widget recent-post">
                            <h3 class="title">Recent post</h3>
                                <!-- Single Post -->
                                <div class="single-post">
                                    <div class="image">
                                        <img src="storage/photo/blog/blog3.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <h5><a href="#">Tiêu đề</a></h5>
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
                                    <li><a href="">skincare</a></li>
                                    <li><a href="">eyes</a></li>
                                    <li><a href="">lips</a></li>
                            </ul>
                        </div>
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        <!--/ End Single Widget -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Blog Single -->
@endsection
@push('styles')
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f2e5abf393162001291e431&product=inline-share-buttons' async='async'></script>
@endpush
@push('scripts')
<script>
$(document).ready(function(){
    
    (function($) {
        "use strict";

        $('.btn-reply.reply').click(function(e){
            e.preventDefault();
            $('.btn-reply.reply').show();

            $('.comment_btn.comment').hide();
            $('.comment_btn.reply').show();

            $(this).hide();
            $('.btn-reply.cancel').hide();
            $(this).siblings('.btn-reply.cancel').show();

            var parent_id = $(this).data('id');
            var html = $('#commentForm');
            $( html).find('#parent_id').val(parent_id);
            $('#commentFormContainer').hide();
            $(this).parents('.comment-list').append(html).fadeIn('slow').addClass('appended');
          });  

        $('.comment-list').on('click','.btn-reply.cancel',function(e){
            e.preventDefault();
            $(this).hide();
            $('.btn-reply.reply').show();

            $('.comment_btn.reply').hide();
            $('.comment_btn.comment').show();

            $('#commentFormContainer').show();
            var html = $('#commentForm');
            $( html).find('#parent_id').val('');

            $('#commentFormContainer').append(html);
        });
        
 })(jQuery)
})
</script>
@endpush