<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Ecommerce - Project</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/crumina-fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/grid.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/styles.css') }}">


    <!--Plugins styles-->

    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/swiper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/primary-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <!--Styles for RTL-->

    <!--<link rel="stylesheet" type="text/css" href="{{ asset('app/css/rtl.css') }}">-->

    <!--External fonts-->

    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

</head>


<body class=" ">

<header class="header" id="site-header">

    <div class="container">

        <div class="header-content-wrapper">
            <form action="{{ route('product.search') }}" method="POST" role="search" id="search">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="text" class="form-control" id="search_input" name="q" placeholder="Search products"> <span class="input-group-btn">
                    <button type="submit" class="btn btn-default btn-search">
                        <i class="fa fa-search"></i>
                    </button>
                    </span>
                </div>
            </form>
            <ul class="nav-add">
                @if (Auth::check())
                    <li class="login">
                        <span>Hello {{ Auth::user()->name }}</span>
                        <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout <i class="fa fa-sign-out home-icon"></i></a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                @else
                    <li class="login">
                        <a href="{{route('user.login')}}">Login <i class="fa fa-sign-in home-icon"></i></a>
                    </li>
                @endif
                <li class="cart">

                    <a href="#" class="js-cart-animate">
                        <i class="seoicon-basket"></i>
                        <span class="cart-count">{{ Cart::content()->count() }}</span>
                    </a>

                    <div class="cart-popup-wrap">
                        <div class="popup-cart">
                            <h4 class="title-cart align-center">${{ Cart::total() }}</h4>
                            <br>
                            <a href="/cart">
                                <div class="btn btn-small btn--dark">
                                    <span class="text">View cart</span>
                                </div>
                            </a>
                        </div>
                    </div>

                </li>
               
            </ul>
            
        </div>
       
    </div>

</header>
<div id="category_menu">
    <div class="container">
        <nav class="nav">
            @if(Request::route()->getName() == 'index')
                <a class="nav-link active" href="/">All Categories</a>
            @else
                <a class="nav-link" href="/">All Categories</a>
            @endif
            @foreach($categories as $category)
                @if(request()->id ==  $category->id)
                    <a class="nav-link active" href="{{route('product.category', $category->id)}}">{{ $category->name }}</a>
                @else
                    <a class="nav-link" href="{{route('product.category', $category->id)}}">{{ $category->name }}</a>
                @endif
            @endforeach
        </nav>
    </div>
</div>

<div class="content-wrapper">

    <div class="container">
        <div class="row pt120">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="heading align-center mb60">
                    <h4 class="h1 heading-title">Ecommerce Project</h4>
                    <p class="heading-text">Easy shopping, Easy Life.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- End Books products grid -->

    @yield('page')
</div>

<!-- Footer -->

<footer class="footer">
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    All right reserved 2019
                </div>
            </div>
        </div>
    </div>
</footer>



<script src="{{ asset('app/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('app/js/crum-mega-menu.js') }}"></script>
<script src="{{ asset('app/js/swiper.jquery.min.js') }}"></script>
<script src="{{ asset('app/js/theme-plugins.js') }}"></script>
<script src="{{ asset('app/js/main.js') }}"></script>
<script src="{{ asset('app/js/form-actions.js') }}"></script>

<script src="{{ asset('app/js/velocity.min.js') }}"></script>
<script src="{{ asset('app/js/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('app/js/animation.velocity.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- ...end JS Script -->

<script>
    @if(Session::has('success'))
        toastr.success('{{ Session::get('success') }}');
    @endif
    @if(Session::has('info'))
        toastr.info('{{ Session::get('info') }}');
    @endif
</script>

</body>

<!-- Mirrored from theme.crumina.net/html-seosight/16_shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Nov 2016 13:03:04 GMT -->
</html>