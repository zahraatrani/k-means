<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <title>{{$produk_tabel->n_produk}}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fav icon -->
    <link rel="shortcut icon" href="../ecommers/img/favicon.ico">

    <!-- Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,900,700,700italic,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700%7CDancing+Script%7CMontserrat:400,700%7CMerriweather:400,300italic%7CLato:400,700,900' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Cantata+One' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300,500,700' rel='stylesheet' type='text/css'>
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="../ecommers/css/bootstrap.min.css">

    <!-- Magnific Popup -->
    <link href="css/magnific-popup.css" rel="stylesheet">

    <link rel="stylesheet" href="../ecommers/css/font-awesome.min.css">
    <link rel="stylesheet" href="../ecommers/css/normalize.css">
    <link rel="stylesheet" href="../ecommers/css/skin-lblue.css">

    <link rel="stylesheet" href="../ecommers/css/ecommerce.css">

    <!-- Owl carousel -->
    <link href="../ecommers/css/owl.carousel.css" rel="stylesheet">

    <link rel="stylesheet" href="../ecommers/css/main.css">
    <link rel="stylesheet" href="../ecommers/style.css">
    <link rel="stylesheet" href="../ecommers/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="../ecommers/css/revolutionslider_settings.css" media="screen" />

    <script src="../ecommers/js/vendor/modernizr-2.6.2.min.js"></script>
</head>

<body>
    <!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->


    <!-- Start Loading -->
    <section class="loading-overlay">
        <div class="Loading-Page">
            <h1 class="loader">Loading...</h1>
        </div>
    </section>
    <!-- End Loading  -->

    <!-- start header -->
    <header>
        <!-- Top bar starts -->
        <div class="top-bar">
            <div class="container">

                <!-- Contact starts -->
                <div class="tb-contact pull-left">
                    <!-- Email -->
                    <i class="fa fa-envelope color"></i> &nbsp; <a href="mailto:contact@domain.com">contact@domain.com</a>
                    &nbsp;&nbsp;
                    <!-- Phone -->
                    <i class="fa fa-phone color"></i> &nbsp; +1 (342)-(323)-4923
                </div>
                <!-- Contact ends -->

                <!-- Shopping kart starts -->
                <div class="tb-shopping-cart pull-right">
                    <!-- Link with badge -->
                    <a href="#" class="btn btn-white btn-xs b-dropdown"><i class="fa fa-shopping-cart"></i> <i class="fa fa-angle-down color"></i> <span class="badge badge-color">2</span></a>
                    <!-- Dropdown content with item details -->
                    <div class="b-dropdown-block">
                        <!-- Heading -->
                        <h4><i class="fa fa-shopping-cart color"></i> Your Items</h4>
                        <ul class="list-unstyled">
                            <!-- Item 1 -->
                            <li>
                                <!-- Item image -->
                                <div class="cart-img">
                                    <a href="#"><img src="img/ecommerce/view-cart/1.png" alt="" class="img-responsive" /></a>
                                </div>
                                <!-- Item heading and price -->
                                <div class="cart-title">
                                    <h5><a href="#">Premium Quality Shirt</a></h5>
                                    <!-- Item price -->
                                    <span class="label label-color label-sm">$1,90</span>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            <!-- Item 2 -->
                            <li>
                                <div class="cart-img">
                                    <a href="#"><img src="img/ecommerce/view-cart/2.png" alt="" class="img-responsive" /></a>
                                </div>
                                <div class="cart-title">
                                    <h5><a href="#">Premium Quality Shirt</a></h5>
                                    <span class="label label-color label-sm">$1,20</span>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-white btn-sm">View Cart</a> &nbsp; <a href="#" class="btn btn-color btn-sm">Checkout</a>
                    </div>
                </div>
                <!-- Shopping kart ends -->

                <!-- Langauge starts -->
                <div class="tb-language dropdown pull-right">
                    <a href="#" data-target="#" data-toggle="dropdown"><i class="fa fa-globe"></i> English <i class="fa fa-angle-down color"></i></a>
                    <!-- Dropdown menu with languages -->
                    <ul class="dropdown-menu dropdown-mini" role="menu">
                        <li><a href="#">Germany</a></li>
                        <li><a href="#">France</a></li>
                        <li><a href="#">Brazil</a></li>
                    </ul>
                </div>
                <!-- Language ends -->

                <!-- Search section for responsive design -->
                <div class="tb-search pull-left">
                    <a href="#" class="b-dropdown"><i class="fa fa-search square-2 rounded-1 bg-color white"></i></a>
                    <div class="b-dropdown-block">
                        <form>
                            <!-- Input Group -->
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Type Something">
                                <span class="input-group-btn">
                                    <button class="btn btn-color" type="button">Search</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Search section ends -->

                <!-- Social media starts -->
                <div class="tb-social pull-right">
                    <div class="brand-bg text-right">
                        <!-- Brand Icons -->
                        <a href="#" class="facebook"><i class="fa fa-facebook square-2 rounded-1"></i></a>
                        <a href="#" class="twitter"><i class="fa fa-twitter square-2 rounded-1"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus square-2 rounded-1"></i></a>
                    </div>
                </div>
                <!-- Social media ends -->

                <div class="clearfix"></div>
            </div>
        </div>

        <!-- Top bar ends -->

        <!-- Header One Starts -->
        <div class="header-1">

            <!-- Container -->
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <!-- Logo section -->
                        <div class="logo">
                            <h1><a href="index.html"><i class="fa fa-bookmark-o"></i> LookCare</a></h1>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-2 col-sm-5 col-sm-offset-3 hidden-xs">
                        <!-- Search Form -->
                        <div class="header-search">
                            <form>
                                <!-- Input Group -->
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Type Something">
                                    <span class="input-group-btn">
                                        <button class="btn btn-color" type="button">Search</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation starts -->

            <div class="navi">
                <div class="container">
                    <div class="navy">
                        <ul>
                            <!-- Main menu -->
                            <li><a href="#">Home</a>
                                <!-- Submenu -->
                                <ul>

                                    <li><a href="index.html">Home 1</a></li>
                                    <li><a href="index-2.html"><span>Home 2</span></a></li>
                                    <li><a href="index-3.html"><span>Home 3</span></a></li>

                                </ul>
                            </li>

                            <li><a href="#">Features</a>
                                <ul>
                                    <li><a href="#">Footer</a>
                                        <ul>
                                            <li><a href="footer-one.html">Footer1</a></li>
                                            <li><a href="footer-two.html">Footer2</a></li>
                                            <li><a href="footer-three.html">Footer3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Price Table</a>
                                        <ul>
                                            <li><a href="price-table-one.html">Price Table1</a></li>
                                            <li><a href="price-table-two.html">Price Table2</a></li>

                                        </ul>
                                    </li>

                                </ul>
                            </li>

                            <li><a href="#">Category</a>
                                <ul>
                                    <li><a href="#">Laptop</a>
                                        <ul>
                                            <li><a href="#">Vaio</a></li>
                                            <li><a href="#">Samsung</a></li>
                                            <li><a href="#">Toshiba</a></li>
                                            <li><a href="#">HP</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="#">Smartphone</a>
                                        <ul>
                                            <li><a href="#">Iphone</a></li>
                                            <li><a href="#">Oppo</a></li>
                                            <li><a href="#">Nokia</a></li>
                                            <li><a href="#">Sony</a></li>
                                            <li><a href="#">Samsung</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="#">Accessories</a>
                                        <ul>
                                            <li><a href="#">Headphone</a></li>
                                            <li><a href="#">Adapter</a></li>
                                            <li><a href="#">Bag</a></li>
                                            <li><a href="#">Baby doll</a></li>

                                        </ul>
                                    </li>
                                    <!-- Multi level menu -->
                                    <li><a href="#">Multi Level Menu</a>
                                        <ul>
                                            <!-- Sub menu -->
                                            <li><a href="#">Menu #1</a></li>
                                            <li><a href="#">Menu #1</a></li>
                                            <li><a href="#">Menu #1</a>
                                                <ul>
                                                    <!-- Sub menu -->
                                                    <li><a href="#">Menu #2</a></li>
                                                    <li><a href="#">Menu #2</a></li>
                                                    <li><a href="#">Menu #2</a>
                                                        <ul>
                                                            <!-- Sub menu -->
                                                            <li><a href="#">Menu #3</a></li>
                                                            <li><a href="#">Menu #3</a></li>
                                                            <li><a href="#">Menu #3</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li><a href="#">Blog</a>
                                <ul>
                                    <li><a href="blog.html"><span>Blog Default</span></a></li>
                                    <li><a href="blog-masonry.html"><span>Blog Masonry</span></a></li>
                                    <li><a href="blog-full-width.html"><span>Blog Full Width</span></a></li>
                                    <li><a href="single-post.html"><span>Single Page 1</span></a></li>
                                    <li><a href="single-post-v2.html"><span>Single Page 2</span></a></li>
                                </ul>
                            </li>

                            <li><a href="#">Pages</a>
                                <ul>
                                    <li><a href="shop.html"><span>Shop</span></a></li>
                                    <li><a href="single-product.html"><span>Single product</span></a></li>
                                    <li><a href="shopping-cart.html"><span>Cart</span></a></li>
                                    <li><a href="checkout.html"><span>Checkout</span></a></li>
                                    <li><a href="wishlist.html"><span>Wishlist</span></a></li>
                                    <li><a href="signin.html"><span>Sign In</span></a></li>
                                    <li><a href="signup.html"><span>Sign Up</span></a></li>
                                    <li><a href="404.html"><span>404 Page</span></a></li>
                                </ul>
                            </li>

                            <li><a href="about.html">About Us</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Navigation ends -->

        </div>

        <!-- Header one ends -->

    </header>
    <!-- end header -->


    <!-- start main content -->
    <main class="main-container">
        <section class="product_content_area pt-40">
            <!-- start of page content -->

            <div class="lookcare-product-single container">

                <div class="row">

                    <div class="main col-xs-12" role="main">

                        <div class=" product">

                            <div class="row">

                                <div class="col-md-5 col-sm-6 summary-before ">

                                    <div class="product-slider product-shop">
                                        <span class="onsale">Sale!</span>
                                        <ul class="slides">
                                            <li data-thumb="{{ asset ('storage/'. $produk_tabel->upload_produk ) }}">
                                                <a href="{{ asset ('storage/'. $produk_tabel->upload_produk ) }}" data-imagelightbox="gallery" class="hoodie_7_front">
                                                    <img src="{{ asset ('storage/'. $produk_tabel->upload_produk ) }}" class="attachment-shop_single" alt="image" width="400px" height="400px">
                                                </a>
                                            </li>
                                            <li data-thumb="img/temp-images/hoodie_7_back-140x140.jpg">
                                                <a href="img/temp-images/hoodie_7_back.jpg" data-imagelightbox="gallery" class="hoodie_7_back">
                                                    <img src="img/temp-images/hoodie_7_back-470x470.jpg" class="attachment-shop_single" alt="image">
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-7 product-review entry-summary">

                                    <h1 class="product_title">Belted Eyelet Lace Fit</h1>

                                    <div class="woocommerce-product-rating">
                                        <div class="star-rating" title="Rated 4.00 out of 5">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <a href="#reviews" class="woocommerce-review-link">(<span class="count">3</span> customer reviews)</a>
                                    </div>

                                    <div>
                                        <p class="price"><del><span class="amount">$35.00</span></del>
                                            <ins><span class="amount">$30.00</span></ins>
                                        </p>
                                    </div>
                                    {!! $produk_tabel->deskripsi !!}

                                    <form class="variations_form cart" method="post">
                                        <div class="quantity">
                                            <input type="number" step="1" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" min="1">
                                        </div>

                                        <button type="submit" class="cart-button">Add to cart</button>

                                    </form>

                                    <div class="product_meta">



                                        <span class="sku_wrapper">SKU: <span class="sku">N/A</span>.</span>


                                        <span class="posted_in">Categories: <a href="#" rel="tag">Clothing</a>, <a href="#">Hoodies</a>.</span>


                                    </div>

                                    <div class="share-social-icons">

                                        <a href="#" target="_blank" title="Share on Facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="#" target="_blank" title="Share on Twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#" target="_blank" title="Pin on Pinterest">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                        <a href="#" target="_blank" title="Share on Google+">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div>

                                </div>
                                <!-- .summary -->

                            </div>

                            <div class="wrapper-description">

                                <ul class="tabs-nav clearfix">
                                    <li class="active">Description</li>
                                    <li>Review (3)</li>
                                </ul>
                                <div class="tabs-container product-comments">

                                    <div class="tab-content">
                                        <section class="related-products">

                                            <h2>Product Description</h2>

                                            <p>
                                                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                                            </p>

                                            <h3 class="section-title">Related Products</h3>

                                            <div class="related-products-wrapper">

                                                <div class="related-products-carousel">

                                                    <div class="product-control-nav">
                                                        <a class="prev"><i class="fa fa-angle-left"></i></a>
                                                        <a class="next"><i class="fa fa-angle-right"></i></a>
                                                    </div>

                                                    <div class="products-top"></div>
                                                    <div class="row product-listing">
                                                        <div id="product-carousel" class="product-listing">

                                                            <div class="product  item first ">

                                                                <article>


                                                                    <figure>
                                                                        <a href="#">
                                                                            <img src="img/temp-images/T_2_front-300x300.jpg" class="img-responsive" alt="T_2_front">
                                                                        </a>
                                                                        <figcaption><span class="amount">$20.00</span></figcaption>
                                                                    </figure>

                                                                    <h4 class="title"><a href="#">Premium Quality</a></h4>


                                                                    <a href="#" class="button-add-to-cart">Add to cart</a>
                                                                </article>

                                                            </div>

                                                            <div class="product  item first ">

                                                                <article>


                                                                    <figure>
                                                                        <a href="#">
                                                                            <img src="img/temp-images/T_5_front-300x300.jpg" class="img-responsive " alt="T_5_front">
                                                                        </a>
                                                                        <figcaption><span class="amount">$20.00</span></figcaption>
                                                                    </figure>


                                                                    <h4 class="title"><a href="#">Ninja Silhouette</a></h4>


                                                                    <a href="#" class="button-add-to-cart">Add to cart</a>
                                                                </article>

                                                            </div>

                                                            <div class="product  item first ">

                                                                <article>


                                                                    <figure>
                                                                        <a href="#">
                                                                            <img src="img/temp-images/hoodie_2_front-300x300.jpg" class="img-responsive" alt="hoodie_2_front">
                                                                        </a>
                                                                        <figcaption><span class="amount">$35.00</span></figcaption>
                                                                    </figure>




                                                                    <h4 class="title"><a href="#">Woo Ninja</a></h4>


                                                                    <a href="#" class="button-add-to-cart">Add to cart</a>
                                                                </article>

                                                            </div>

                                                            <div class="product  item first ">

                                                                <article>


                                                                    <figure>
                                                                        <a href="#">
                                                                            <img src="img/temp-images/T_4_front-300x300.jpg" class="img-responsive" alt="T_4_front">
                                                                        </a>
                                                                        <figcaption>
                                                                            <span class="amount">$20.00</span>
                                                                        </figcaption>
                                                                    </figure>




                                                                    <h4 class="title"><a href="#">Ship Your Idea</a></h4>


                                                                    <a href="#" class="button-add-to-cart">Add to cart</a>
                                                                </article>

                                                            </div>

                                                            <div class="product  item first ">

                                                                <article>


                                                                    <figure>
                                                                        <a href="#">
                                                                            <img src="img/temp-images/T_7_front-300x300.jpg" class="img-responsive" alt="T_7_front">
                                                                        </a>
                                                                        <figcaption><span class="amount">$18.00</span></figcaption>
                                                                    </figure>




                                                                    <h4 class="title"><a href="#">Happy Ninja</a></h4>


                                                                    <a href="#" class="button-add-to-cart">Add to cart</a>
                                                                </article>

                                                            </div>

                                                            <div class="product  item first ">

                                                                <article>


                                                                    <figure>
                                                                        <a href="#">
                                                                            <img src="img/temp-images/T_6_front-300x300.jpg" class="img-responsive" alt="T_6_front">
                                                                        </a>
                                                                        <figcaption><span class="amount">$20.00</span></figcaption>
                                                                    </figure>




                                                                    <h4 class="title"><a href="#">Woo Ninja</a></h4>


                                                                    <a href="#" class="button-add-to-cart">Add to cart</a>
                                                                </article>

                                                            </div>

                                                            <div class="product  item first ">

                                                                <article>


                                                                    <figure>
                                                                        <a href="#">
                                                                            <img src="img/temp-images/hoodie_4_front-300x300.jpg" class="img-responsive" alt="hoodie_4_front">
                                                                        </a>
                                                                        <figcaption><span class="amount">$35.00</span></figcaption>
                                                                    </figure>




                                                                    <h4 class="title"><a href="#">Happy Ninja</a></h4>


                                                                    <a href="#" class="button-add-to-cart">Add to cart</a>
                                                                </article>

                                                            </div>

                                                            <div class="product  item first ">

                                                                <article>


                                                                    <figure>
                                                                        <a href="#">
                                                                            <img src="img/temp-images/hoodie_3_front-300x300.jpg" class="img-responsive" alt="hoodie_3_front">
                                                                        </a>
                                                                        <figcaption><span class="amount">$35.00</span></figcaption>
                                                                    </figure>




                                                                    <h4 class="title"><a href="#">Patient Ninja</a></h4>


                                                                    <a href="#" class="button-add-to-cart">Add to cart</a>
                                                                </article>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>

                                        </section>
                                    </div>



                                    <div class="tab-content">
                                        <div class="panel entry-content">

                                            <h2>Product Description</h2>

                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                        </div>

                                        <div class="panel entry-content">

                                            <div id="reviews">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div id="comments">
                                                            <h3>3 reviews for Ship Your Idea</h3>

                                                            <ol class="commentlist">
                                                                <li class="comment depth-1">

                                                                    <div class="comment_container">

                                                                        <img alt="gravatar" src="img/temp-images/com-grav1.jpg" class="avatar photo">
                                                                        <div class="comment-text">




                                                                            <p class="meta">
                                                                                <span class="star-rating" title="Rated 4.00 out of 5">
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star-o"></i>
                                                                                </span>
                                                                                <strong>Stuart</strong> – <time datetime="2013-06-07T13:03:29+00:00">June 7, 2013</time>:
                                                                            </p>

                                                                            <div class="description">
                                                                                <p>Another great quality product that anyone who see’s me wearing has asked where to purchase one of their own.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <!-- #comment-## -->
                                                                <li class="comment  depth-1">

                                                                    <div class="comment_container">

                                                                        <img src="img/temp-images/com-grav2.jpg" alt="image" class="avatar photo">
                                                                        <div class="comment-text">




                                                                            <p class="meta">
                                                                                <span class="star-rating" title="Rated 4.00 out of 5">
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star-o"></i>
                                                                                </span>
                                                                                <strong>Ryan</strong> – <time datetime="2013-06-07T13:24:52+00:00">June 7, 2013</time>:
                                                                            </p>


                                                                            <div class="description">
                                                                                <p>This hoodie gets me lots of looks while out in public, I got the blue one and it’s awesome. Not sure if people are looking at my hoodie only, or also at my rocking bod.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <!-- #comment-## -->
                                                                <li class="comment depth-1">

                                                                    <div class="comment_container">

                                                                        <img src="img/temp-images/com-grav3.jpg" alt="image" class="avatar photo">
                                                                        <div class="comment-text">

                                                                            <div class="star-rating" title="Rated 3 out of 5">
                                                                            </div>

                                                                            <p class="meta">
                                                                                <span class="star-rating" title="Rated 4.00 out of 5">
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                </span>
                                                                                <strong>Maria</strong> – <time datetime="2013-06-07T15:53:31+00:00">June 7, 2013</time>:
                                                                            </p>


                                                                            <div class="description">
                                                                                <p>Ship it!</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <!-- #comment-## -->
                                                            </ol>


                                                        </div>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <div id="review_form_wrapper">
                                                            <div id="review_form">
                                                                <div id="respond" class="comment-respond">
                                                                    <h3 class="comment-reply-title">Add a review </h3>
                                                                    <form action="#" method="post" id="commentform" class="comment-form">
                                                                        <p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input id="author" name="author" type="text"></p>
                                                                        <p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="text"></p>
                                                                        <p class="comment-form-comment"><label for="comment">Your Review</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>
                                                                        <p class="form-submit">
                                                                            <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                                                        </p>
                                                                    </form>
                                                                </div>
                                                                <!-- #respond -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>





                        </div>
                        <!-- #product-293 -->



                    </div>
                    <!-- end of main -->

                </div>
                <!-- end of .row -->

            </div>

            <!-- end of page content -->
        </section>

        <!-- service area -->
        <section class="block gray no-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="content-box no-margin go-simple">
                            <div class="mini-service-sec">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mini-service">
                                            <i class="fa fa-paper-plane"></i>
                                            <div class="mini-service-info">
                                                <h3>Worldwide Delivery</h3>
                                                <p>unc tincidunt, on cursusau gmetus, lorem Hore</p>
                                            </div>
                                        </div><!-- Mini Service -->
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mini-service">
                                            <i class="fa  fa-newspaper-o"></i>
                                            <div class="mini-service-info">
                                                <h3>Worldwide Delivery</h3>
                                                <p>unc tincidunt, on cursusa ugmetus, lorem Hore</p>
                                            </div>
                                        </div><!-- Mini Service -->
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mini-service">
                                            <i class="fa fa-medkit"></i>
                                            <div class="mini-service-info">
                                                <h3>Friendly Stuff</h3>
                                                <p>unc tincidunt, on cursusau gmetus, lorem Hore</p>
                                            </div>
                                        </div><!-- Mini Service -->
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mini-service">
                                            <i class="fa  fa-newspaper-o"></i>
                                            <div class="mini-service-info">
                                                <h3>24/h Support</h3>
                                                <p>unc tincidunt, on cursusa ugmetus, lorem Hore</p>
                                            </div>
                                        </div><!-- Mini Service -->
                                    </div>
                                </div>
                            </div><!-- Mini Service Sec -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        <!-- end service area -->
    </main>
    <!-- end main content -->

    <!-- start footer area -->
    <footer class="footer-area-content">

        <div class="container">
            <div class="footer-wrapper style-3">
                <div class="type-1">
                    <div class="footer-columns-entry">
                        <div class="row">
                            <div class="col-md-3">
                                <img alt="" src="img/footer-logo.png" class="footer-logo">
                                <div class="footer-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</div>
                                <div class="footer-address">30 South Avenue San Francisco<br> Phone: +78 123 456 123<br> Email: <a href="mailto:Support@demo.com">Support@demo.com</a><br>
                                    <a target="_blank" href="http://iglyphic.com/"><b>www.lookcare.com</b></a>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <h3 class="column-title">Customer Care</h3>
                                <ul class="column">
                                    <li><a href="#">Terms & Condition</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Shipping Charge</a></li>
                                    <li><a href="#">Shipping Track</a></li>
                                    <li><a href="#">Payment Method</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="#">Returns</a></li>
                                </ul>
                                <div class="clear"></div>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <h3 class="column-title">Your Account</h3>
                                <ul class="column">
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Wishlist</a></li>
                                    <li><a href="#">Affiliate Dashboard</a></li>
                                    <li><a href="#">Billing Address</a></li>
                                    <li><a href="#">Cancel Order</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="#">Returns</a></li>
                                </ul>
                                <div class="clear"></div>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <h3 class="column-title">Shop Information</h3>
                                <ul class="column">
                                    <li><a href="#">About Company</a></li>
                                    <li><a href="#">Become Member</a></li>
                                    <li><a href="#">License Details</a></li>
                                    <li><a href="#">Custom Service</a></li>
                                    <li><a href="#">Tax Information</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="#">Job & Vacancies</a></li>
                                </ul>
                                <div class="clear"></div>
                            </div>
                            <div class="clearfix visible-sm-block"></div>
                            <div class="col-md-3">
                                <h3 class="column-title">Company working hours</h3>
                                <div class="footer-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</div>
                                <div class="footer-description">
                                    <b>Monday-Friday:</b> 8.30 a.m. - 5.30 p.m.<br>
                                    <b>Saturday:</b> 9.00 a.m. - 2.00 p.m.<br>
                                    <b>Sunday:</b> Closed
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="footer-bottom footer-wrapper style-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-bottom-navigation">
                            <div class="cell-view">
                                <div class="footer-links">
                                    <a href="#">Site Map</a>
                                    <a href="#">Search</a>
                                    <a href="#">Terms</a>
                                    <a href="#">Advanced Search</a>
                                    <a href="#">Orders and Returns</a>
                                    <a href="#">Contact Us</a>
                                </div>
                                <div class="copyright">Created with by <a target="_blank" href="http://iglyphic.com/">iGlyphic</a> . All right reserved</div>
                            </div>
                            <div class="cell-view">
                                <div class="payment-methods">
                                    <a href="#"><img alt="" src="img/payment-method-1.png"></a>
                                    <a href="#"><img alt="" src="img/payment-method-2.png"></a>
                                    <a href="#"><img alt="" src="img/payment-method-3.png"></a>
                                    <a href="#"><img alt="" src="img/payment-method-4.png"></a>
                                    <a href="#"><img alt="" src="img/payment-method-5.png"></a>
                                    <a href="#"><img alt="" src="img/payment-method-6.png"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>



    </footer>
    <!-- footer area end -->
    <!-- All script -->
    <script src="../ecommers/js/vendor/jquery-1.10.2.min.js"></script>
    <script src="../ecommers/js/bootstrap.min.js"></script>
    <script src="../ecommers/js/smoothscroll.js"></script>
    <!-- Scroll up js
============================================ -->
    <script src="../ecommers/js/jquery.scrollUp.js"></script>
    <script src="../ecommers/js/menu.js"></script>
    <!-- new collection section script -->
    <script src="../ecommers/js/swiper/idangerous.swiper.min.js"></script>
    <script src="../ecommers/js/swiper/swiper.custom.js"></script>

    <!-- Magnific Popup -->
    <script src="../ecommers/js/jquery.magnific-popup.min.js"></script>

    <script src="../ecommers/js/jquery.countdown.min.js"></script>

    <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script type="text/javascript" src="../ecommers/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="../ecommers/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <!-- Owl carousel -->
    <script src="../ecommers/js/owl.carousel.min.js"></script>
    <script src="../ecommers/js/main.js"></script>




    <script type="text/javascript">
        /*-----------------------------------------------------------------------------------*/
        /* Flex Slider
         /*-----------------------------------------------------------------------------------*/
        if (jQuery().flexslider) {

            // Product Page Flex Slider
            $('.product-slider').flexslider({
                animation: "slide",
                animationLoop: false,
                slideshow: false,
                prevText: '<i class="fa fa-angle-left"></i>',
                nextText: '<i class="fa fa-angle-right"></i>',
                animationSpeed: 250,
                controlNav: "thumbnails"
            });

        }


        /*-----------------------------------------------------------------------------------*/
        /* Product Carousel
         /*-----------------------------------------------------------------------------------*/
        if (jQuery().owlCarousel) {
            var productCarousel = $("#product-carousel");
            productCarousel.owlCarousel({
                loop: true,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    480: {
                        items: 2
                    },
                    900: {
                        items: 3
                    },
                    1100: {
                        items: 4
                    }
                }
            });

            // Custom Navigation Events
            $(".product-control-nav .next").on("click", function() {
                productCarousel.trigger('next.owl.carousel');
            });

            $(".product-control-nav .prev").on("click", function() {
                productCarousel.trigger('prev.owl.carousel');
            });
        }



        /*-----------------------------------------------------------------------------------*/
        /* Tabs
         /*-----------------------------------------------------------------------------------*/
        $(function() {
            var $tabsNav = $('.tabs-nav'),
                $tabsNavLis = $tabsNav.children('li');

            $tabsNav.each(function() {
                var $this = $(this);
                $this.next().children('.tab-content').stop(true, true).hide()
                    .first().show();
                $this.children('li').first().addClass('active').stop(true, true).show();
            });

            $tabsNavLis.on('click', function(e) {
                var $this = $(this);
                $this.siblings().removeClass('active').end()
                    .addClass('active');
                var idx = $this.parent().children().index($this);
                $this.parent().next().children('.tab-content').stop(true, true).hide().eq(idx).fadeIn();
                e.preventDefault();
            });

        });


        /*-----------------------------------------------------------------------------------*/
        /*	Tabs Widget
         /*-----------------------------------------------------------------------------------*/
        $('.footer .tabbed .tabs li:first-child, .tabbed .tabs li:first-child').addClass('current');
        $('.footer .block:first, .tabbed .block:first').addClass('current');


        $('.tabbed .tabs li').on("click", function() {
            var $this = $(this);
            var tabNumber = $this.index();

            /* remove current class from other tabs and assign to this one */
            $this.siblings('li').removeClass('current');
            $this.addClass('current');

            /* remove current class from current block and assign to related one */
            $this.parent('ul').siblings('.block').removeClass('current');
            $this.closest('.tabbed').children('.block:eq(' + tabNumber + ')').addClass('current');
        });



        /*-----------------------------------------------------------------------------------*/
        /*	Image Lightbox
         /*  http://osvaldas.info/image-lightbox-responsive-touch-friendly
         /*-----------------------------------------------------------------------------------*/
        if (jQuery().imageLightbox) {

            // ACTIVITY INDICATOR

            var activityIndicatorOn = function() {
                    $('<div id="imagelightbox-loading"><div></div></div>').appendTo('body');
                },
                activityIndicatorOff = function() {
                    $('#imagelightbox-loading').remove();
                },


                // OVERLAY

                overlayOn = function() {
                    $('<div id="imagelightbox-overlay"></div>').appendTo('body');
                },
                overlayOff = function() {
                    $('#imagelightbox-overlay').remove();
                },


                // CLOSE BUTTON

                closeButtonOn = function(instance) {
                    $('<button type="button" id="imagelightbox-close" title="Close"></button>').appendTo('body').on('click touchend', function() {
                        $(this).remove();
                        instance.quitImageLightbox();
                        return false;
                    });
                },
                closeButtonOff = function() {
                    $('#imagelightbox-close').remove();
                },

                // ARROWS

                arrowsOn = function(instance, selector) {
                    var $arrows = $('<button type="button" class="imagelightbox-arrow imagelightbox-arrow-left"></button><button type="button" class="imagelightbox-arrow imagelightbox-arrow-right"></button>');

                    $arrows.appendTo('body');

                    $arrows.on('click touchend', function(e) {
                        e.preventDefault();

                        var $this = $(this),
                            $target = $(selector + '[href="' + $('#imagelightbox').attr('src') + '"]'),
                            index = $target.index(selector);

                        if ($this.hasClass('imagelightbox-arrow-left')) {
                            index = index - 1;
                            if (!$(selector).eq(index).length)
                                index = $(selector).length;
                        } else {
                            index = index + 1;
                            if (!$(selector).eq(index).length)
                                index = 0;
                        }

                        instance.switchImageLightbox(index);
                        return false;
                    });
                },
                arrowsOff = function() {
                    $('.imagelightbox-arrow').remove();
                };

            // Lightbox for individual image
            var lightboxInstance = $('a[data-imagelightbox="lightbox"]').imageLightbox({
                onStart: function() {
                    overlayOn();
                    closeButtonOn(lightboxInstance);
                },
                onEnd: function() {
                    closeButtonOff();
                    overlayOff();
                    activityIndicatorOff();
                },
                onLoadStart: function() {
                    activityIndicatorOn();
                },
                onLoadEnd: function() {
                    activityIndicatorOff();
                }
            });

            // Lightbox for product gallery
            var gallerySelector = 'a[data-imagelightbox="gallery"]';
            var galleryInstance = $(gallerySelector).imageLightbox({
                quitOnDocClick: false,
                onStart: function() {
                    overlayOn();
                    closeButtonOn(galleryInstance);
                    arrowsOn(galleryInstance, gallerySelector);
                },
                onEnd: function() {
                    overlayOff();
                    closeButtonOff();
                    arrowsOff();
                    activityIndicatorOff();
                },
                onLoadStart: function() {
                    activityIndicatorOn();
                },
                onLoadEnd: function() {
                    activityIndicatorOff();
                    $('.imagelightbox-arrow').css('display', 'block');
                }
            });

        }
    </script>



</body>


</html>