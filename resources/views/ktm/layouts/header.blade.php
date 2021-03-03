<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="SUNRISE" />
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{ asset('ktmcoffee/css/bootstrap.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('ktmcoffee/style.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('ktmcoffee/css/dark.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('ktmcoffee/css/font-icons.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('ktmcoffee/css/animate.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('ktmcoffee/css/magnific-popup.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('ktmcoffee/css/responsive.css') }}" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" type="text/css" href="{{ asset('ktmcoffee/include/rs-plugin/css/settings.css') }}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{ asset('ktmcoffee/include/rs-plugin/css/layers.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('ktmcoffee/include/rs-plugin/css/navigation.css') }}">
<title>KTMCoffee | Cà phê thật, sảng khoái thật</title>
<style>
.revo-slider-emphasis-text {
  font-size: 58px;
  font-weight: 700;
  letter-spacing: 1px;
  font-family: 'Raleway', sans-serif;
  padding: 15px 20px;
  border-top: 2px solid #FFF;
  border-bottom: 2px solid #FFF;
}
.revo-slider-desc-text {
  font-size: 20px;
  font-family: 'Lato', sans-serif;
  width: 650px;
  text-align: center;
  line-height: 1.5;
}
.revo-slider-caps-text {
  font-size: 16px;
  font-weight: 400;
  letter-spacing: 3px;
  font-family: 'Raleway', sans-serif;
}
.tp-video-play-button { display: none !important; }
.tp-caption { white-space: nowrap; }
</style>
</head>
<body class="stretched">
<div id="wrapper" class="clearfix">
<div id="top-bar" class="d-none d-md-block">
  <div class="container clearfix">
    <div class="col_half nobottommargin">
      <p class="nobottommargin"><strong>Gọi ngay:</strong> 0379.115.000 | <strong>Email:</strong> khanhtrinhmoc2014@gmail.com</p>
    </div>
    <div class="col_half col_last fright nobottommargin">
      <div class="top-links">
        <ul>
          <li><a href="#">Login</a>
            <div class="top-link-section">
              <form id="top-login">
                <div class="input-group" id="top-login-username">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="icon-user"></i></div>
                  </div>
                  <input type="email" class="form-control" placeholder="Email address" required="">
                </div>
                <div class="input-group" id="top-login-password">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="icon-key"></i></div>
                  </div>
                  <input type="password" class="form-control" placeholder="Password" required="">
                </div>
                <label class="checkbox">
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
                <button class="btn btn-danger btn-block" type="submit">Sign in</button>
              </form>
            </div>
          </li>
        </ul>
      </div><!-- .top-links end -->
    </div>
  </div>
</div><!-- #top-bar end -->

<header id="header">
  <div id="header-wrap">
    <div class="container clearfix">
      <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
      <div id="logo">
        <a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="{{ asset('ktmcoffee/images/logo.png')}}" alt="Canvas Logo"></a>
        <a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="{{ asset('ktmcoffee/images/logo@2x.png')}}" alt="Canvas Logo"></a>
      </div><!-- #logo end -->
      <nav id="primary-menu">

        <ul>
          <li class="current"><a href="{{ url('/') }}"><div>Trang chủ</div><span>Vị nguyên chất, sảng khoái thật</span></a></li>
          <li><a href="#"><div>Sản phẩm</div><span>Sản phẩm</span></a></li>
          <li><a href="#"><div>Blog</div><span>Blog</span></a></li>
          <li><a href="#"><div>Liên hệ</div><span>Liên hệ</span></a></li>
        </ul>
            <!--
        <div id="top-cart">
          <a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
          <div class="top-cart-content">
            <div class="top-cart-title">
              <h4>Giỏ hàng</h4>
            </div>
            <div class="top-cart-items">
              <div class="top-cart-item clearfix">
                <div class="top-cart-item-image">
                  <a href="#"><img src="images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
                </div>
                <div class="top-cart-item-desc">
                  <a href="#">Blue Round-Neck Tshirt</a>
                  <span class="top-cart-item-price">$19.99</span>
                  <span class="top-cart-item-quantity">x 2</span>
                </div>
              </div>
              <div class="top-cart-item clearfix">
                <div class="top-cart-item-image">
                  <a href="#"><img src="images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>
                </div>
                <div class="top-cart-item-desc">
                  <a href="#">Light Blue Denim Dress</a>
                  <span class="top-cart-item-price">$24.99</span>
                  <span class="top-cart-item-quantity">x 3</span>
                </div>
              </div>
            </div>
            <div class="top-cart-action clearfix">
              <span class="fleft top-checkout-price">$114.95</span>
              <button class="button button-3d button-small nomargin fright">View Cart</button>
            </div>
          </div>
        </div>
            -->
        
        <div id="top-search">
          <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
          <form action="search.html" method="get">
            <input type="text" name="q" class="form-control" value="" placeholder="Tìm &amp; kiếm..">
          </form>
        </div>
      </nav>
    </div>
  </div>
<script type="text/javascript">
  $(window).load(function() {
      $('#slider').nivoSlider();
  });
  </script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-172725878-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-172725878-1');
</script>
</header>
