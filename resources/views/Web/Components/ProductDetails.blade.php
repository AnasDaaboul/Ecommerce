<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-7">

    <!--====== Title ======-->
    <title>Product Details | eStore</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/png">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="/assets/css/slick.css">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="/assets/css/LineIcons.css">

    <!--====== Material Design Icons CSS ======-->
    <link rel="stylesheet" href="/assets/css/materialdesignicons.min.css">

    <!--====== Jquery Ui CSS ======-->
    <link rel="stylesheet" href="/assets/css/jquery-ui.min.css">

    <!--====== nice select CSS ======-->
    <link rel="stylesheet" href="/assets/css/nice-select.css">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="/assets/css/default.css">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="/assets/css/style.css">

    <style>
        .rating-star input[type="radio"] {
            display: none;
        }
        </style>

</head>

<body>

    <!--====== Preloader Part Start ======-->
    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== Preloader Part Ends ======-->

    <!--====== Navbar Style 7 Part Start ======-->
    @include('Web.Layouts.nav')
    <!--====== Navbar Style 7 Part Ends ======-->

    <!--====== Breadcrumbs Part Start ======-->
    <section class="breadcrumbs-wrapper pt-50 pb-50 bg-primary-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs-style breadcrumbs-style-1 d-md-flex justify-content-between align-items-center">
                        <div class="breadcrumb-left">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                            </ol>
                        </div>
                        <div class="breadcrumb-right">
                            <h5 class="heading-5 font-weight-500">Product Details</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Breadcrumbs Part Ends ======-->

    <!--====== Product Details Style 1 Part Start ======-->
    <section class="product-details-wrapper pt-50 pb-100">
        <div class="container">
            <div class="product-details-style-1">
                <div class="row flex-lg-row-reverse align-items-center">
                    <div class="col-lg-6">
                        <div class="product-details-image mt-50">
                            <div class="product-image">
                                <div class="product-image-active-1">
                                    <div class="single-image">
                                        <img src="/assets/images/product-details-1/product-1.jpg" alt="">
                                    </div>
                                    <div class="single-image">
                                        <img src="/assets/images/product-details-1/product-2.jpg" alt="">
                                    </div>
                                    <div class="single-image">
                                        <img src="/assets/images/product-details-1/product-3.jpg" alt="">
                                    </div>
                                    <div class="single-image">
                                        <img src="/assets/images/product-details-1/product-4.jpg" alt="">
                                    </div>
                                    <div class="single-image">
                                        <img src="/assets/images/product-details-1/product-5.jpg" alt="">
                                    </div>
                                    <div class="single-image">
                                        <img src="/assets/images/product-details-1/product-3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="product-thumb-image">
                                <div class="product-thumb-image-active-1">
                                    <div class="single-thumb">
                                        <img src="/assets/images/product-details-1/thunb-1.jpg" alt="">
                                    </div>
                                    <div class="single-thumb">
                                        <img src="/assets/images/product-details-1/thunb-2.jpg" alt="">
                                    </div>
                                    <div class="single-thumb">
                                        <img src="/assets/images/product-details-1/thunb-3.jpg" alt="">
                                    </div>
                                    <div class="single-thumb">
                                        <img src="/assets/images/product-details-1/thunb-4.jpg" alt="">
                                    </div>
                                    <div class="single-thumb">
                                        <img src="/assets/images/product-details-1/thunb-5.jpg" alt="">
                                    </div>
                                    <div class="single-thumb">
                                        <img src="/assets/images/product-details-1/thunb-3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-details-content mt-45">


                            <h2 class="title">{{ $product->name }}</h2>

                            <div class="product-items flex-wrap">
                                <h6 class="item-title">Select Your {{ $product->name }} </h6>
                                <div class="items-wrapper">
                                    <div class="single-item active">
                                        <div class="items-image">
                                            <img src="/assets/images/product-details-1/product-items-1.jpg" alt="product">
                                        </div>
                                        <p class="text">Oculus Go</p>
                                    </div>
                                    <div class="single-item">
                                        <div class="items-image">
                                            <img src="/assets/images/product-details-1/product-items-2.jpg" alt="product">
                                        </div>
                                        <p class="text">Oculus Quest</p>
                                    </div>
                                    <div class="single-item">
                                        <div class="items-image">
                                            <img src="/assets/images/product-details-1/product-items-3.jpg" alt="product">
                                        </div>
                                        <p class="text">Oculus Rift S</p>
                                    </div>
                                </div>
                            </div>
                            @foreach ($options as $option)
                            <div class="product-select-wrapper flex-wrap">
                                <div class="select-item">
                                    <h6 class="select-title">{{ $option->name }}</h6>
                                    <div class="size-select">
                                        <select>
                                            @foreach ($option->value_options as $value_option )
                                            <option value="{{ $value_option->id }}">{{ $value_option->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            @endforeach

                                <div class="select-item">
                                    <h6 class="select-title">Select Quantity: </h6>

                                    <div class="select-quantity">
                                        <button type="button" id="sub" class="sub"><i class="mdi mdi-minus"></i></button>
                                        <input type="text" value="1" />
                                        <button type="button" id="add" class="add"><i class="mdi mdi-plus"></i></button>
                                    </div>
                                </div>
                                <div class="select-item">
                                    <h6 class="select-title">Select Shipping Country: </h6>
                                    <div class="country-select">
                                        <select>
                                            <option value="0">-- Select City --</option>
                                            @foreach ($cities as $city )
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                            @endforeach


                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="product-price">
                                <h6 class="price-title">Price: </h6>
                                <p class="sale-price">{{ $product->price }}</p>

                            </div>

                            <div class="product-btn">
                                <form id="add-to-cart-form-{{ $product->id }}" action="{{ route('cart.add', $product) }}" method="POST">
                                    @csrf
                                </form>
                                <a class="main-btn primary-btn" href="#" onclick="event.preventDefault(); document.getElementById('add-to-cart-form-{{ $product->id }}').submit();">
                                    <img src="/assets/images/icon-svg/cart-4.svg" alt="">
                                    Add to cart
                                </a>
                                <a href="javascript:void(0)" class="main-btn secondary-1-btn">
                                    <img src="/assets/images/icon-svg/cart-8.svg" alt="">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Product Details Style 1 Part Ends ======-->

    <!--====== Reviews Part Start ======-->
    <section class="reviews-wrapper pt-100 pb-100 ">
        <div class="container">
            <div class="reviews-style">
                <div class="reviews-menu">

                    <ul class="breadcrumb-list-grid nav nav-tabs border-0" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                Title
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                                aria-selected="false">
                                Reviews
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a id="specifications-tab" data-toggle="tab" href="#specifications" role="tab" aria-controls="specifications"
                                aria-selected="false">
                                Description
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="details-wrapper">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="reviews-title">

                                    </div>
                                    <p class="mb-15 pt-30">{{$product->title}}</p>
                                    {{-- <p class="mb-30">Repellendus, doloribus illum expedita, dolorem voluptas doloremque voluptatibus, magni tempora
                                        laboriosam deserunt suscipit labore dolorum aperiam cum veniam accusamus? Consequatur dolore facere perferendis
                                        repellat, modi in consectetur ipsum atque quos natus.</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="review-wrapper">
                            <div class="reviews-title">
                                <h4 class="title">Customer Reviews {{ $reviews->count() }}</h4>
                            </div>

                            <div class="reviews-rating-wrapper flex-wrap">
                                <div class="reviews-rating-star">
                                    <p class="rating-review"><i class="mdi mdi-star"></i> <span>{{ $rate }}</span> of 5</p>

                                    <div class="reviews-rating-bar">
                                        <div class="single-reviews-rating-bar">
                                            <p class="value">5 Starts</p>
                                            <div class="rating-bar-inner">
                                                <div class="bar-inner" style="width: 60%;"></div>
                                            </div>
                                            <p class="percent">60%</p>
                                        </div>
                                    </div>
                                    <div class="reviews-rating-bar">
                                        <div class="single-reviews-rating-bar">
                                            <p class="value">4 Starts</p>
                                            <div class="rating-bar-inner">
                                                <div class="bar-inner" style="width: 20%;"></div>
                                            </div>
                                            <p class="percent">20%</p>
                                        </div>
                                    </div>
                                    <div class="reviews-rating-bar">
                                        <div class="single-reviews-rating-bar">
                                            <p class="value">3 Starts</p>
                                            <div class="rating-bar-inner">
                                                <div class="bar-inner" style="width: 10%;"></div>
                                            </div>
                                            <p class="percent">10%</p>
                                        </div>
                                    </div>
                                    <div class="reviews-rating-bar">
                                        <div class="single-reviews-rating-bar">
                                            <p class="value">2 Starts</p>
                                            <div class="rating-bar-inner">
                                                <div class="bar-inner" style="width: 5%;"></div>
                                            </div>
                                            <p class="percent">05%</p>
                                        </div>
                                    </div>
                                    <div class="reviews-rating-bar">
                                        <div class="single-reviews-rating-bar">
                                            <p class="value">1 Starts</p>
                                            <div class="rating-bar-inner">
                                                <div class="bar-inner" style="width: 0;"></div>
                                            </div>
                                            <p class="percent">0%</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="reviews-rating-form">



                                    @if ($errors->any())
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                    <form id="review-form" action="{{ route('add-review' , ['product'=>$product->id]) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="reviewsable_id" value="{{ $product->id }}">


                                    <div class="rating-star">
                                        <p>Click on star to review</p>
                                        <ul id="stars" class="stars">
                                            <li class="star" onclick="setRating(1)"><i class="mdi mdi-star"></i></li>
                                            <li class="star" onclick="setRating(2)"><i class="mdi mdi-star"></i></li>
                                            <li class="star" onclick="setRating(3)"><i class="mdi mdi-star"></i></li>
                                            <li class="star" onclick="setRating(4)"><i class="mdi mdi-star"></i></li>
                                            <li class="star" onclick="setRating(5)"><i class="mdi mdi-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="rating-form">
                                        <form action="#">
                                            <div class="single-form form-default">
                                                <label>Write your Review</label>

                                                <formv id="write-review"></form>

                                                <div class="form-input">
                                                    <textarea placeholder="Your review here" name="comment"></textarea>
                                                    <i class="mdi mdi-message-text-outline"></i>
                                                </div>
                                            </div>
                                            <div class="single-rating-form flex-wrap">
                                                <div class="rating-form-file">
                                                    <div class="file">
                                                        <input type="file" id="file-1">
                                                        <label for="file-1"><i class="mdi mdi-camera"></i></label>
                                                    </div>
                                                </div>
                                                <div class="rating-form-btn">
                                                    <button class="main-btn primary-btn" type="submit">write a Review</button>
                                                </div>
                                            </div>



                                    </div>
                                </div>



                            </div>

                            <div class="reviews-btn flex-wrap">
                                <div class="reviews-btn-left">
                                    <div class="dropdown-style">
                                        <div class="dropdown dropdown-white">
                                            <button class="main-btn primary-btn" type="button" id="dropdownMenu-1" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="true"> All Stars (213) <i
                                                    class="mdi mdi-chevron-down"></i></button>

                                            <ul class="dropdown-menu sub-menu-bar" aria-labelledby="dropdownMenu-1">
                                                <li><a href="#">Dropped Menu 1</a></li>
                                                <li><a href="#">Dropped Menu 2</a></li>
                                                <li><a href="#">Dropped Menu 3</a></li>
                                                <li><a href="#">Dropped Menu 4</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="dropdown-style">
                                        <div class="dropdown dropdown-white">
                                            <button class="main-btn primary-btn-border" type="button" id="dropdownMenu-1" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="true"> Sort by Latest <i
                                                    class="mdi mdi-chevron-down"></i></button>

                                            <ul class="dropdown-menu sub-menu-bar" aria-labelledby="dropdownMenu-1">
                                                <li><a href="#">Dropped Menu 1</a></li>
                                                <li><a href="#">Dropped Menu 2</a></li>
                                                <li><a href="#">Dropped Menu 3</a></li>
                                                <li><a href="#">Dropped Menu 4</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="reviews-btn-right">
                                    <a href="#" class="main-btn">with photo (18)</a>
                                    <a href="#" class="main-btn">additional feedback (23)</a>
                                </div>
                            </div>

                            <div class="reviews-comment">
                                <ul class="comment-items">
                                    <li>
                                        @foreach ($reviews as $review )
                                        @if( !$review->review_id )
                                        <div class="single-review-comment">
                                            <div class="comment-user-info">
                                                <div class="comment-author">
                                                    <img src="/assets/images/review/author-1.jpg" alt="">
                                                </div>
                                                <div class="comment-content">
                                                    <h6 class="name">{{ $review->client_name }}</h6>

                                                    <p>
                                                        <i class="mdi mdi-star"></i>

                                                        <span class="rating"><strong>{{ $review->rate }}</strong> of 5</span>
                                                        <span class="date">{{ $review->created_at }}</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="comment-user-text">
                                                <p>{{$review->comment}}</p>
                                                <ul class="comment-meta">

                                                        @php
                                                            $review_id = $review->id;
                                                        @endphp

                                                        <form id="add-to-likes-form-{{ $review_id }}" action="{{ route('like', ['review_id' => $review_id]) }}" method="POST">
                                                            @csrf
                                                        </form>
                                                        <li><i class="mdi mdi-thumb-up"></i> <span>{{ $review->likes_count }}</span></li>


                                                        <li>
                                                            <a class="" href="#" onclick="event.preventDefault(); document.getElementById('add-to-likes-form-{{ $review_id }}').submit();">
                                                                @if($review->isLiked())
                                                                Unlike
                                                                @else
                                                                Like
                                                                @endif

                                                            </a>
                                                        </li>
                                                    <li><a href="#" onclick="toggleReplyInput('{{ $review_id }}')">Reply</a>
                                                    </li>
                                                    <form action="{{ route('add-review', ['product' => $product->id]) }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="reviewsable_id" value="{{ $product->id }}">
                                                        <div id="reply-input-{{ $review_id }}" style="display: none;">
                                                            <input type="text" name="comment" placeholder="Enter your reply">
                                                            <input type="hidden" name="review_id" value="{{ $review->id }}">
                                                            <button type="submit">Reply</button>
                                                        </div>
                                                    </form>
                                                </ul>
                                            </div>
                                        </div>
                                            @else
                                        <ul class="comment-replay">
                                            <li>
                                                <div class="single-review-comment">
                                                    <div class="comment-user-info">
                                                        <div class="comment-author">
                                                            <img src="/assets/images/review/author-2.jpg" alt="">
                                                        </div>
                                                        <div class="comment-content">
                                                            <h6 class="name">User Name</h6>

                                                            <p>
                                                                <i class="mdi mdi-star"></i>
                                                                <span class="rating"><strong>4</strong> of 5</span>
                                                                <span class="date">20 Nov 2019 22:01</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="comment-user-text">
                                                        <p>Good headphones. The sound is clear. AND the bottoms repyat and top ring.
                                                            Currently are really not taken.</p>
                                                        <div class="comment-image flex-wrap">
                                                            <div class="image">
                                                                <img src="/assets/images/review/attachment-1.jpg" alt="">
                                                            </div>
                                                            <div class="image">
                                                                <img src="/assets/images/review/attachment-2.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <ul class="comment-meta">
                                                            <li><i class="mdi mdi-thumb-up"></i> <span>{{$review->likes_count}}</span></li>
                                                            <li><a href="#">Like</a></li>
                                                            <li><a href="#">Replay</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            @endif
                                            @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="specifications" role="tabpanel" aria-labelledby="specifications-tab">
                        <div class="specifications-wrapper">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="reviews-title">
                                        <h4 class="title">Oculus VR</h4>
                                    </div>
                                    <p class="mb-15 pt-30">{{$product->description}}</p>
                                    <p class="mb-30">Repellendus, doloribus illum expedita, dolorem voluptas doloremque voluptatibus, magni
                                        tempora
                                        laboriosam deserunt suscipit labore dolorum aperiam cum veniam accusamus? Consequatur dolore facere
                                        perferendis
                                        repellat, modi in consectetur ipsum atque quos natus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--====== Reviews Part Ends ======-->

        <!--====== Subscribe Part Start ======-->
    <section class="subscribe-section pt-70 pb-70 bg-primary-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <div class="heading text-center">
                        <h1 class="heading-1 font-weight-700 text-white mb-10">You are using free lite version</h1>
                        <p class="gray-3">Please, purchase full version of the template to get all pages, sections, features and permission to remove footer credits.</p>
                        </br>
                        <a href="https://rebrand.ly/estore-gg" rel="nofollow" target="_blank" class="main-btn secondary-1-btn">
                                <img src="assets/images/icon-svg/cart-7.svg" alt="">
                                PURCHASE NOW
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Subscribe Part Ends ======-->

    <!--====== Clients Logo Part Start ======-->
    <section class="clients-logo-section pt-70 pb-70">
        <div class="container">
            <div class="row client-logo-active">
                <div class="col-lg-3">
                    <div class="single-logo-wrapper">
                        <img src="/assets/images/client-logo/uideck-logo.svg" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-logo-wrapper">
                        <img src="/assets/images/client-logo/graygrids-logo.svg" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-logo-wrapper">
                        <img src="/assets/images/client-logo/lineicons-logo.svg" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-logo-wrapper">
                        <img src="/assets/images/client-logo/pagebulb-logo.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Clients Logo Part Ends ======-->

    <!--====== Subscribe Part Start ======-->
    <section class="subscribe-section pt-70 pb-70 bg-primary-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="heading text-center">
                        <h1 class="heading-1 font-weight-700 text-white mb-10">Subscribe Newsletter</h1>
                        <p class="gray-3">Be the first to know when new products drop and get behind-the-scenes content
                            straight.</p>
                    </div>
                    <div class="subscribe-form">
                        <form action="#">
                            <div class="single-form form-default">
                                <label class="text-white-50">Enter your email address</label>
                                <div class="form-input">
                                    <input type="text" placeholder="user@email.com">
                                    <i class="mdi mdi-account"></i>
                                    <button class="main-btn primary-btn"><span class="mdi mdi-send"></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Subscribe Part Ends ======-->

    <!--====== Footer Style 3 Part Start ======-->
    <section class="footer-style-3 pt-100 pb-100">
        <div class="container">
            <div class="footer-top">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-7 col-sm-10">
                        <div class="footer-logo text-center">
                            <a href="#">
                                <img src="assets/images/logo.svg">
                            </a>
                        </div>
                        <h5 class="heading-5 text-center mt-30">Follow Us</h5>
                        <ul class="footer-follow text-center">
                            <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-instagram-original"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-widget-wrapper text-center pt-20">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="footer-widget">
                            <h5 class="footer-title">PRODUCT</h5>

                            <ul class="footer-link">
                                <li><a href="javascript:void(0)">Quest</a></li>
                                <li><a href="javascript:void(0)">Rift S</a></li>
                                <li><a href="javascript:void(0)">Gear VR</a></li>
                                <li><a href="javascript:void(0)">Apps and Games</a></li>
                                <li><a href="javascript:void(0)">Apps and Games</a></li>
                                <li><a href="javascript:void(0)">Oculus for Business</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="footer-widget">
                            <h5 class="footer-title">DEVELOPERS</h5>

                            <ul class="footer-link">
                                <li><a href="javascript:void(0)">Developer Centre</a></li>
                                <li><a href="javascript:void(0)">Docs</a></li>
                                <li><a href="javascript:void(0)">Downloads</a></li>
                                <li><a href="javascript:void(0)">Tools</a></li>
                                <li><a href="javascript:void(0)">Developer Blog</a></li>
                                <li><a href="javascript:void(0)">Developer Forums</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="footer-widget">
                            <h5 class="footer-title">PRODUCT</h5>

                            <ul class="footer-link">
                                <li><a href="javascript:void(0)">Blog</a></li>
                                <li><a href="javascript:void(0)">Careers</a></li>
                                <li><a href="javascript:void(0)">Brand Centre</a></li>
                                <li><a href="javascript:void(0)">Connect</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="footer-widget">
                            <h5 class="footer-title">PRODUCT</h5>

                            <ul class="footer-link">
                                <li><a href="javascript:void(0)">VR for Good</a></li>
                                <li><a href="javascript:void(0)">Launch Pad</a></li>
                                <li><a href="javascript:void(0)">Creators Lab</a></li>
                                <li><a href="javascript:void(0)">Forums</a></li>
                                <li><a href="javascript:void(0)">Support</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-copyright text-center">
                <p>Developed by <a href="https://graygrids.com/" rel="nofollow" target="_blank">GrayGrids</a>. Basesd on <a href="https://ecommercehtml.com/" rel="nofollow" target="_blank">eCommerceHTML</a>
                </p>
            </div>
        </div>
    </section>
    <!--====== Footer Style 3 Part Ends ======-->

    <!--====== Bootstrap 5 js ======-->
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>


    <!--====== Jquery js ======-->
    <script src="/assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="/assets/js/vendor/modernizr-3.7.1.min.js"></script>

    <!--====== Slick js ======-->
    <script src="/assets/js/slick.min.js"></script>

    <!--====== Accordion Steps Form js ======-->
    <script src="/assets/js/jquery-vj-accordion-steps.js"></script>

    <!--====== Jquery Ui js ======-->
    <script src="/assets/js/jquery-ui.min.js"></script>

    <!--====== Form validator js ======-->
    <script src="/assets/js/jquery.form-validator.min.js"></script>

    <!--====== nice select js ======-->
    <script src="/assets/js/jquery.nice-select.min.js"></script>

    <!--====== formatter js ======-->
    <script src="/assets/js/jquery.formatter.min.js"></script>

    <!--====== Main js ======-->
    <script src="/assets/js/count-up.min.js"></script>

    <!--====== Main js ======-->
    <script src="/assets/js/main.js"></script>

    <script>
        var selectedRating = null;

        function setRating(rating) {
            selectedRating = rating;
        }

        document.getElementById("review-form").addEventListener("submit", function(event) {
            event.preventDefault();

            if (selectedRating === null) {
                alert("Please select a rating.");
                return;
            }

            var form = document.createElement("form");
            form.setAttribute("method", "POST");
            form.setAttribute("action", "{{ route('add-review', ['product' => $product->id]) }}");

            var csrfField = document.createElement("input");
            csrfField.setAttribute("type", "hidden");
            csrfField.setAttribute("name", "_token");
            csrfField.setAttribute("value", "{{ csrf_token() }}");

            var ratingField = document.createElement("input");
            ratingField.setAttribute("type", "hidden");
            ratingField.setAttribute("name", "rate");
            ratingField.setAttribute("value", selectedRating);

            var commentField = document.createElement("textarea");
            commentField.setAttribute("name", "comment");
            commentField.textContent = document.querySelector("textarea[name='comment']").value;

            var reviewsableIdField = document.createElement("input");
            reviewsableIdField.setAttribute("type", "hidden");
            reviewsableIdField.setAttribute("name", "reviewsable_id");
            reviewsableIdField.setAttribute("value", "{{ $product->id }}");

            form.appendChild(csrfField);
            form.appendChild(ratingField);
            form.appendChild(commentField);
            form.appendChild(reviewsableIdField);

            document.body.appendChild(form);
            form.submit();
        });
    </script>

<script>
    function toggleReplyInput(reviewId) {
        var replyInput = document.getElementById('reply-input-' + reviewId);
        if (replyInput.style.display === 'none') {
            replyInput.style.display = 'block';
        } else {
            replyInput.style.display = 'none';
        }
    }
</script>

</body>

</html>

