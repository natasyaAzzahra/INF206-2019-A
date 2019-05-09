<style>
	    /* Category Area css
======================================================================= */
	    .single-category {
	        background: #fff;
	        margin-bottom: 20px;
	    }

	    .single-category .short_details {
	        margin-top: -92px;
	        right: -3%;
	        width: 94%;
	        padding: 30px;
	        z-index: 555;
	        position: relative;
	        background: #fff;
	        transition: all 300ms linear 0s;
	    }

	    @media (max-width: 1199px) {
	        .single-category .short_details {
	            padding: 15px;
	        }
	    }

	    .single-category .short_details a {
	        color: #33353b;
	        font-weight: 600;
	    }

	    .single-category .short_details a:hover {
	        color: #ff7a7f;
	    }

	    .single-category .short_details h4 {
	        font-size: 20px;
	    }

	    .single-category .thumb {
	        overflow: hidden;
	        position: relative;
	    }

	    .single-category .thumb img {
	        width: 100%;
	        transition: all 300ms linear 0s;
	    }

	    .single-category .meta-bottom {
	        margin-bottom: 15px;
	    }

	    .single-category .meta-bottom a {
	        display: inline-block;
	        color: #797979;
	        position: relative;
	        font-size: 13px;
	        text-transform: uppercase;
	        transition: all 300ms linear 0s;
	        margin-right: 12px;
	    }

	    .single-category .meta-bottom a i {
	        margin-right: 5px;
	    }

	    .single-category .meta-bottom a:hover {
	        color: #ff7a7f;
	    }

	    .single-category .meta-top {
	        margin-bottom: 6px;
	    }

	    .single-category .meta-top a {
	        display: inline-block;
	        font-size: 11px;
	        color: #ff7a7f;
	        text-transform: uppercase;
	        position: relative;
	        font-weight: 600;
	        font-family: "Open Sans", sans-serif;
	        transition: all 300ms linear 0s;
	    }

	    .single-category .meta-top a:hover {
	        color: #ff7a7f;
	    }

	    .single-category.small .short_details {
	        margin-top: 0;
	        right: 0;
	        width: 100%;
	        padding: 10px;
	    }

	    .single-category.small .thumb {
	        overflow: hidden;
	    }

	    .single-category.small .meta-bottom {
	        margin-bottom: 15px;
	    }

	    .single-category.small .meta-bottom a {
	        display: inline-block;
	        color: #797979;
	        position: relative;
	        font-size: 13px;
	        text-transform: uppercase;
	        transition: all 300ms linear 0s;
	        margin-right: 12px;
	    }

	    .single-category.small .meta-bottom a i {
	        margin-right: 5px;
	    }

	    .single-category.small .meta-bottom a:hover {
	        color: #ff7a7f;
	    }

	    .single-category.small .meta-top {
	        margin-bottom: 6px;
	    }

	    .single-category.small .meta-top a {
	        display: inline-block;
	        font-size: 11px;
	        color: #ff7a7f;
	        text-transform: uppercase;
	        position: relative;
	        font-weight: 600;
	        font-family: "Open Sans", sans-serif;
	        transition: all 300ms linear 0s;
	    }

	    .single-category.small .meta-top a:hover {
	        color: #ff7a7f;
	    }

	    .single-category.small h4 {
	        font-size: 20px;
	        margin-bottom: 10px;
	        font-weight: 600;
	        line-height: 27px;
	        transition: all 300ms linear 0s;
	    }

	    @media (max-width: 1199px) {
	        .single-category.small h4 {
	            font-size: 18px;
	        }
	    }

	    @media (max-width: 991px) {
	        .single-category.small h4 {
	            margin-bottom: 8px;
	        }
	    }

	    .single-category:hover img {
	        transform: scale(1);
	    }

	    .category-page .main_btn {
	        display: inline-block;
	        background: #ff7a7f;
	        padding: 0px 18px;
	        color: #fff;
	        font-family: "Open Sans", sans-serif;
	        font-size: 15px;
	        font-weight: 400;
	        line-height: 48px;
	        border-radius: 0px;
	        outline: none !important;
	        box-shadow: none !important;
	        text-align: center;
	        border: 1px solid #ff7a7f;
	        cursor: pointer;
	        text-transform: capitalize;
	        margin-top: 15px;
	        transition: all 300ms linear 0s;
	    }

	    .category-page .main_btn:hover {
	        background: #fff;
	        color: #ff7a7f;
	        border: 1px solid #ff7a7f;
	    }

	    .category-page .main_btn .ti-angle-double-right {
	        font-size: 11px;
	    }

	    .single-category .meta-top a:first-child {
	        margin-right: 3px;
	    }

	    .single-category .meta-top a:last-child {
	        margin-left: 3px;
	    }
	</style>
	/*---------------------------------------------------- */

	<!-- textarea -->
	<div class="page-header header-filter" data-parallax="true" style="background-image: url('https://i.imgur.com/b8LbQU3.jpg')">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-8 ml-auto mr-auto">
	                <div class="brand text-center">
	                    <h1><?= $judul ?></h1>

	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- end of textarea -->

	<!--================Category  Area Start =================-->
	<div class="main main-raised">
	    <div class="container menu">

	        <div class="row align-items-center pb-2 pt-2">
	            <section class="category-page area-padding">
	                <div class="container">
	                    <div class="row">
	                        <div class="col-md-6 col-lg-4">
	                            <div class="single-category">
	                                <div class="thumb">
	                                    <img class="img-fluid" src="../assets/img/2.jpg" alt="">
	                                </div>
	                                <div class="short_details">
	                                    <div class="meta-top d-flex">
	                                        <a href="#">shoes </a>/
	                                        <a href="#"> March 15, 2019</a>
	                                    </div>
	                                    <a class="d-block" href="single-blog.html">
	                                        <h4>Shall for rule whose toge one
	                                            may heaven to dat</h4>
	                                    </a>
	                                    <div class="meta-bottom d-flex">
	                                        <a href="#"><i class="ti-comment"></i>05 comment</a>
	                                        <a href="#"><i class="ti-heart"></i> 0 like</a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-md-6 col-lg-4">
	                            <div class="single-category">
	                                <div class="thumb">
	                                    <img class="img-fluid" src="../assets/img/1.jpg" alt="">
	                                </div>
	                                <div class="short_details">
	                                    <div class="meta-top d-flex">
	                                        <a href="#">Fashion </a>/
	                                        <a href="#"> March 15, 2019</a>
	                                    </div>
	                                    <a class="d-block" href="single-blog.html">
	                                        <h4>Whose can you're together
	                                            first dominion man</h4>
	                                    </a>
	                                    <div class="meta-bottom d-flex">
	                                        <a href="#"><i class="ti-comment"></i>08 comment</a>
	                                        <a href="#"><i class="ti-heart"></i> 0 like</a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-md-6 col-lg-4">
	                            <div class="single-category">
	                                <div class="thumb">
	                                    <img class="img-fluid" src="../assets/img/4.jpg" alt="">
	                                </div>
	                                <div class="short_details">
	                                    <div class="meta-top d-flex">
	                                        <a href="#">shoes </a>/
	                                        <a href="#"> March 19, 2019</a>
	                                    </div>
	                                    <a class="d-block" href="single-blog.html">
	                                        <h4>Multiply blessed light unto
	                                            green moving</h4>
	                                    </a>
	                                    <div class="meta-bottom d-flex">
	                                        <a href="#"><i class="ti-comment"></i>25 comment</a>
	                                        <a href="#"><i class="ti-heart"></i>15 like</a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-md-6 col-lg-4">
	                            <div class="single-category">
	                                <div class="thumb">
	                                    <img class="img-fluid" src="../assets/img/3.jpg" alt="">
	                                </div>
	                                <div class="short_details">
	                                    <div class="meta-top d-flex">
	                                        <a href="#">shoes </a>/
	                                        <a href="#"> March 15, 2019</a>
	                                    </div>
	                                    <a class="d-block" href="single-blog.html">
	                                        <h4>Given moved air be a male
	                                            earth called multiply</h4>
	                                    </a>
	                                    <div class="meta-bottom d-flex">
	                                        <a href="#"><i class="ti-comment"></i>05 comment</a>
	                                        <a href="#"><i class="ti-heart"></i> 10 like</a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-md-6 col-lg-4">
	                            <div class="single-category">
	                                <div class="thumb">
	                                    <img class="img-fluid" src="../assets/img/5.jpg" alt="">
	                                </div>
	                                <div class="short_details">
	                                    <div class="meta-top d-flex">
	                                        <a href="#">shoes </a>/
	                                        <a href="#"> March 15, 2019</a>
	                                    </div>
	                                    <a class="d-block" href="single-blog.html">
	                                        <h4>Shall for rule whose toge one
	                                            may heaven to dat</h4>
	                                    </a>
	                                    <div class="meta-bottom d-flex">
	                                        <a href="#"><i class="ti-comment"></i>05 comment</a>
	                                        <a href="#"><i class="ti-heart"></i> 20 like</a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-md-6 col-lg-4">
	                            <div class="single-category">
	                                <div class="thumb">
	                                    <img class="img-fluid" src="../assets/img/7.jpg" alt="">
	                                </div>
	                                <div class="short_details">
	                                    <div class="meta-top d-flex">
	                                        <a href="#">shoes </a>/
	                                        <a href="#"> March 15, 2019</a>
	                                    </div>
	                                    <a class="d-block" href="single-blog.html">
	                                        <h4>Given moved air be a male
	                                            earth called multiply</h4>
	                                    </a>
	                                    <div class="meta-bottom d-flex">
	                                        <a href="#"><i class="ti-comment"></i>25 comment</a>
	                                        <a href="#"><i class="ti-heart"></i> 0 like</a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-md-6 col-lg-4">
	                            <div class="single-category">
	                                <div class="thumb">
	                                    <img class="img-fluid" src="../assets/img/6.jpg" alt="">
	                                </div>
	                                <div class="short_details">
	                                    <div class="meta-top d-flex">
	                                        <a href="#">shoes </a>/
	                                        <a href="#"> March 15, 2019</a>
	                                    </div>
	                                    <a class="d-block" href="single-blog.html">
	                                        <h4>Multiply blessed light unto
	                                            green moving</h4>
	                                    </a>
	                                    <div class="meta-bottom d-flex">
	                                        <a href="#"><i class="ti-comment"></i>05 comment</a>
	                                        <a href="#"><i class="ti-heart"></i> 0 like</a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-md-6 col-lg-4">
	                            <div class="single-category">
	                                <div class="thumb">
	                                    <img class="img-fluid" src="../assets/img/9.jpg" alt="">
	                                </div>
	                                <div class="short_details">
	                                    <div class="meta-top d-flex">
	                                        <a href="#">shoes </a>/
	                                        <a href="#"> March 15, 2019</a>
	                                    </div>
	                                    <a class="d-block" href="single-blog.html">
	                                        <h4>Shall for rule whose toge one
	                                            may heaven to dat</h4>
	                                    </a>
	                                    <div class="meta-bottom d-flex">
	                                        <a href="#"><i class="ti-comment"></i>05 comment</a>
	                                        <a href="#"><i class="ti-heart"></i> 0 like</a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-md-6 col-lg-4">
	                            <div class="single-category">
	                                <div class="thumb">
	                                    <img class="img-fluid" src="../assets/img/8.jpg" alt="">
	                                </div>
	                                <div class="short_details">
	                                    <div class="meta-top d-flex">
	                                        <a href="#">shoes </a>/
	                                        <a href="#"> March 15, 2019</a>
	                                    </div>
	                                    <a class="d-block" href="single-blog.html">
	                                        <h4>Given moved air be a male
	                                            earth called multiply</h4>
	                                    </a>
	                                    <div class="meta-bottom d-flex">
	                                        <a href="#"><i class="ti-comment"></i>05 comment</a>
	                                        <a href="#"><i class="ti-heart"></i> 0 like</a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-12 text-center">
	                            <a href="" class="main_btn">Load More <span class="ti-angle-double-right"></span></a>
	                        </div>
	                    </div>
	                </div>
	        </div>
	    </div>
	</div>
	</section>
	<!--================Category  Area End =================-->