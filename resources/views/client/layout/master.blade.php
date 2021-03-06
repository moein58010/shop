<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="image/favicon.png" rel="icon" />
    <title>مارکت شاپ - قالب HTML فروشگاهی</title>
    <meta name="description" content="Responsive and clean html template design for any kind of ecommerce webshop">
    <!-- CSS Part Start-->
    <link rel="stylesheet" type="text/css" href="/client/js/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/client/js/bootstrap/css/bootstrap-rtl.min.css" />
    <link rel="stylesheet" type="text/css" href="/client/css/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/client/css/stylesheet.css" />
    <link rel="canonical" href="http://www.onescript.ir" />
    <link rel="stylesheet" type="text/css" href="/client/css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="/client/css/owl.transitions.css" />
    <link rel="stylesheet" type="text/css" href="/client/css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="/client/css/stylesheet-rtl.css" />
    <link rel="stylesheet" type="text/css" href="/client/css/responsive-rtl.css" />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans' type='text/css'>

    {{-- برای اینکه هر صفحه ممکنه لینک های اختصاصی خودش را داشته باشد   --}}
   @yield('links')
    <!-- CSS Part End-->
    <style>
        .like {
            color: red;
        }
    </style>
</head>
<body>
<div class="wrapper-wide">
    <div id="header">
        <!-- Top Bar Start-->
        <nav id="top" class="htop">
            <div class="container">
                <div class="row"> <span class="drop-icon visible-sm visible-xs"><i class="fa fa-align-justify"></i></span>
                    <div class="pull-left flip left-top">
                        <div class="links">
                            <ul>
                                <li class="mobile"><i class="fa fa-phone"></i>+21 9898777656</li>
                                <li class="email"><a href="mailto:info@marketshop.com"><i class="fa fa-envelope"></i>info@marketshop.com</a></li>
                                <li class="wrap_custom_block hidden-sm hidden-xs"><a>بلاک سفارشی<b></b></a>
                                    <div class="dropdown-menu custom_block">
                                        <ul>
                                            <li>
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td><img alt="" src="/client/image/banner/cms-block.jpg"></td>
                                                        <td><img alt="" src="/client/image/banner/responsive.jpg"></td>
                                                    </tr>
                                                    <tr>
                                                        <td><h4>بلاک های محتوا</h4></td>
                                                        <td><h4>قالب واکنش گرا</h4></td>
                                                    </tr>
                                                    <tr>
                                                        <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                                                        <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong><a class="btn btn-default btn-sm" href="#">ادامه مطلب</a></strong></td>
                                                        <td><strong><a class="btn btn-default btn-sm" href="#">ادامه مطلب</a></strong></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </li>
                                        </ul>
                                    </div>
                                </li>


                                {{--  <span id="likes_count">{{auth()->user()->likes()->count()}}</span>)</a></li>   =>  آپدیت تعداد لایک ها در بالای صفحه بعد از لایک کردن محصول  --}}
                                @auth
                                    <li><a href="{{route('client.likes.index')}}">لیست علاقه مندی (<span id="likes_count">{{auth()->user()->likes()->count()}}</span>)</a></li>
                                @endauth


                                <li><a href="checkout.html">تسویه حساب</a></li>
                            </ul>
                        </div>
                        <div id="language" class="btn-group">
                            <button class="btn-link dropdown-toggle" data-toggle="dropdown"> <span> <img src="/client/image/flags/gb.png" alt="انگلیسی" title="انگلیسی">انگلیسی <i class="fa fa-caret-down"></i></span></button>
                            <ul class="dropdown-menu">
                                <li>
                                    <button class="btn btn-link btn-block language-select" type="button" name="GB"><img src="/client/image/flags/gb.png" alt="انگلیسی" title="انگلیسی" /> انگلیسی</button>
                                </li>
                                <li>
                                    <button class="btn btn-link btn-block language-select" type="button" name="GB"><img src="/client/image/flags/ar.png" alt="عربی" title="عربی" /> عربی</button>
                                </li>
                            </ul>
                        </div>
                        <div id="currency" class="btn-group">
                            <button class="btn-link dropdown-toggle" data-toggle="dropdown"> <span> تومان <i class="fa fa-caret-down"></i></span></button>
                            <ul class="dropdown-menu">
                                <li>
                                    <button class="currency-select btn btn-link btn-block" type="button" name="EUR">€ Euro</button>
                                </li>
                                <li>
                                    <button class="currency-select btn btn-link btn-block" type="button" name="GBP">£ Pound Sterling</button>
                                </li>
                                <li>
                                    <button class="currency-select btn btn-link btn-block" type="button" name="USD">$ USD</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="top-links" class="nav pull-right flip">
                        {{--  @auth() => چک می کند که کاربر لاگین کرده یا خیر  --}}
                        @auth()
                            <form action="{{route('client.logout')}}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" name="logout" class="btn btn-sm btn-danger" value="خروج">
                            </form>
                        @else
                            <ul>
                                <li><a href="{{route('client.register')}}">ورود/ثبت نام</a></li>
                            </ul>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>
        <!-- Top Bar End-->
        <!-- Header Start-->
        <header class="header-row">
            <div class="container">
                <div class="table-container">
                    <!-- Logo Start -->
                    <div class="col-table-cell col-lg-6 col-md-6 col-sm-12 col-xs-12 inner">
                        <div id="logo"><a href="index.html"><img class="img-responsive" src="/client/image/logo.png" title="MarketShop" alt="MarketShop" /></a></div>
                    </div>
                    <!-- Logo End -->
                    <!-- Mini Cart Start-->
                    <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div id="cart">
                            <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="heading dropdown-toggle">
                                <span class="cart-icon pull-left flip"></span>
                                {{-- ?? در واقع مثل ? هست با این تفاوت که مقدار شرط برابر با مقدار در صورت درست بودن شرط میشه و ما فقط باید مفدار را در صورت غلط بودن شرط تعیین کنیم --}}
                                {{-- session()->get('cart') => سبد خرید session --}}
                                {{-- session()->get('cart')['total_items'] => سبد خرید session در total_items فیلد  --}}
                                <span id="cart-total">
                                    <span id="total-items">{{session()->get('cart')['total_items'] ?? 0}}</span> آیتم -
                                    <span class="total-amount">{{session()->get('cart')['total_amount'] ?? 0}}</span> تومان
                                </span>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <table id="menu-cart" class="table">
                                        <tbody class="cart-table-body">
                                            @foreach(\App\Models\Cart::getItems() as $item)
                                                @php
                                                    $product = $item['product'];
                                                    $productQty = $item['quantity'];
                                                @endphp
                                                <tr class="cart-row-{{$product->id}}">
                                                    <td class="text-center"><a href="product.html"><img class="img-thumbnail" title="{{$product->name}}" alt="{{$product->name}}" width="100" src="{{$product->image_path}}"></a></td>
                                                    <td class="text-left"><a href="product.html">{{$product->name}}</a></td>
                                                    <td class="text-right qty">x {{$productQty}}</td>
                                                    <td class="text-right">{{$product->cost_with_discount}} تومان</td>
                                                    <td class="text-center"><button class="btn btn-danger btn-xs remove" title="حذف" onClick="removeFromCart({{ $product->id }})" type="button"><i class="fa fa-times"></i></button></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </li>
                                <li>
                                    <div>
                                        <table class="table table-bordered">
                                            <tbody>
                                            <tr>
                                                <td class="text-right"><strong>جمع کل</strong></td>
                                                <td class="text-right total-amount">{{\App\Models\Cart::totalAmount()}} تومان</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>قابل پرداخت</strong></td>
                                                <td class="text-right total-amount">{{\App\Models\Cart::totalAmount()}} تومان</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <p class="checkout"><a href="{{route('client.cart.index')}}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> مشاهده سبد</a>&nbsp;&nbsp;&nbsp;<a href="{{route('client.orders.create')}}" class="btn btn-primary"><i class="fa fa-share"></i> ثبت سفارش</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mini Cart End-->
                    <!-- جستجو Start-->
                    <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12 inner">
                        <div id="search" class="input-group">
                            <input id="filter_name" type="text" name="search" value="" placeholder="جستجو" class="form-control input-lg" />
                            <button type="button" class="button-search"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <!-- جستجو End-->
                </div>
            </div>
        </header>
        <!-- Header End-->
        <!-- Main آقایانu Start-->
        @include('client.layout.menu')
        <!-- Main آقایانu End-->
    </div>
    @yield('content')
    <!--Footer Start-->
    <footer id="footer">
        <div class="fpart-first">
            <div class="container">
                <div class="row">
                    <div class="contact col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <h5>اطلاعات تماس</h5>
                        <ul>
                            <li class="address"><i class="fa fa-map-marker"></i>میدان تایمز، شماره 77، نیویورک</li>
                            <li class="mobile"><i class="fa fa-phone"></i>+21 9898777656</li>
                            <li class="email"><i class="fa fa-envelope"></i>برقراری ارتباط از طریق <a href="contact-us.html">تماس با ما</a>
                        </ul>
                    </div>
                    <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                        <h5>اطلاعات</h5>
                        <ul>
                            <li><a href="about-us.html">درباره ما</a></li>
                            <li><a href="about-us.html">اطلاعات ارسال</a></li>
                            <li><a href="about-us.html">حریم خصوصی</a></li>
                            <li><a href="about-us.html">شرایط و قوانین</a></li>
                        </ul>
                    </div>
                    <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                        <h5>خدمات مشتریان</h5>
                        <ul>
                            <li><a href="contact-us.html">تماس با ما</a></li>
                            <li><a href="#">بازگشت</a></li>
                            <li><a href="sitemap.html">نقشه سایت</a></li>
                        </ul>
                    </div>
                    <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                        <h5>امکانات جانبی</h5>
                        <ul>
                            <li><a href="#">برند ها</a></li>
                            <li><a href="#">کارت هدیه</a></li>
                            <li><a href="#">بازاریابی</a></li>
                            <li><a href="#">ویژه ها</a></li>
                        </ul>
                    </div>
                    <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                        <h5>حساب من</h5>
                        <ul>
                            <li><a href="#">حساب کاربری</a></li>
                            <li><a href="#">تاریخچه سفارشات</a></li>
                            <li><a href="#">لیست علاقه مندی</a></li>
                            <li><a href="#">خبرنامه</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="fpart-second">
            <div class="container">
                <div id="powered" class="clearfix">
                    <div class="powered_text pull-left flip">
                        <p>کپی رایت © 2016 فروشگاه شما | پارسی سازی و ویرایش توسط <a href="http://onescript.ir" target="_blank">وان اسکریپت</a></p>
                    </div>
                    <div class="social pull-right flip"> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/client/image/socialicons/facebook.png" alt="Facebook" title="Facebook"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/client/image/socialicons/twitter.png" alt="Twitter" title="Twitter"> </a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/client/image/socialicons/google_plus.png" alt="Google+" title="Google+"> </a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/client/image/socialicons/pinterest.png" alt="Pinterest" title="Pinterest"> </a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/client/image/socialicons/rss.png" alt="RSS" title="RSS"> </a> </div>
                </div>
                <div class="bottom-row">
                    <div class="custom-text text-center">
                        <p>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                    </div>
                    <div class="payments_types"> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/client/image/payment/payment_paypal.png" alt="paypal" title="PayPal"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/client/image/payment/payment_american.png" alt="american-express" title="American Express"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/client/image/payment/payment_2checkout.png" alt="2checkout" title="2checkout"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/client/image/payment/payment_maestro.png" alt="maestro" title="Maestro"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/client/image/payment/payment_discover.png" alt="discover" title="Discover"></a> <a href="#" target="_blank"> <img data-toggle="tooltip" src="/client/image/payment/payment_mastercard.png" alt="mastercard" title="MasterCard"></a> </div>
                </div>
            </div>
        </div>
        <div id="back-top"><a data-toggle="tooltip" title="بازگشت به بالا" href="javascript:void(0)" class="backtotop"><i class="fa fa-chevron-up"></i></a></div>
    </footer>
    <!--Footer End-->
    <!-- Facebook Side Block Start -->
    <div id="facebook" class="fb-left sort-order-1">
        <div class="facebook_icon"><i class="fa fa-facebook"></i></div>
        <div class="fb-page" data-href="https://www.facebook.com/harnishdesign/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true" data-show-posts="false">
            <div class="fb-xfbml-parse-ignore">
                <blockquote cite="https://www.facebook.com/harnishdesign/"><a href="https://www.facebook.com/harnishdesign/">هارنیش دیزاین</a></blockquote>
            </div>
        </div>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
    </div>
    <!-- Facebook Side Block End -->
    <!-- Twitter Side Block Start -->
    <div id="twitter_footer" class="twit-left sort-order-2">
        <div class="twitter_icon"><i class="fa fa-twitter"></i></div>
        <a class="twitter-timeline" href="https://twitter.com/" data-chrome="nofooter noscrollbar transparent" data-theme="light" data-tweet-limit="2" data-related="twitterapi,twitter" data-aria-polite="assertive" data-widget-id="347621595801608192">توییت های @</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>
    <!-- Twitter Side Block End -->
    <!-- Video Side Block Start -->
    <div id="video_box" class="vb-left sort-order-3">
        <div id="video_box_icon"><i class="fa fa-play"></i></div>
        <p>
            <iframe allowfullscreen="" src="" height="315" width="560"></iframe>
        </p>
    </div>
    <!-- Video Side Block End -->
    <!-- Custom Side Block Start -->
    <div id="custom_side_block" class="custom_side_block_left sort-order-4">
        <div class="custom_side_block_icon"> <i class="fa fa-chevron-right"></i> </div>
        <table>
            <tbody>
            <tr>
                <td><h2>بلاک های محتوا</h2></td>
            </tr>
            <tr>
                <td><img alt="" src="/client/image/banner/cms-block.jpg"></td>
            </tr>
            <tr>
                <td>میتوانید محتوای دلخواه خود را به این بخش اضافه کنید.</td>
            </tr>
            <tr>
                <td><strong><a href="#">ادامه مطلب</a></strong></td>
            </tr>
            </tbody>
        </table>
    </div>
    <!-- Custom Side Block End -->
</div>
<!-- JS Part Start-->
<script type="text/javascript" src="/client/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/client/js/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/client/js/jquery.easing-1.3.min.js"></script>
<script type="text/javascript" src="/client/js/jquery.dcjqaccordion.min.js"></script>
<script type="text/javascript" src="/client/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/client/js/custom.js"></script>


{{-- use jquery --}}
<script>
    function like(productId) {
        // console.log('hi') => برای تست کردن
        // console.log(productId)

        // قرستادن یک request بصورت ajax
        // ساختن request_ajax و ساختن تنظیمات موردنظرمان

        // data =>  اطلاعاتی که از سمت سرور به ما داده می شود

        // >.fa-heart => را دارد آنگاه آنرا بگیر fa-heart المنتی با

        //  $('#like-' + productId) => باشد ('#like-' + productId) که آیدی اش برابر با  button یک

        // var var_name => تعریف متغیر

        // $('#likes_count')   =>      $ = المنت   ,  '#likes_count' =  آیدی اش

        $.ajax({
            type: 'post',
            url: '/likes/' + productId,
            data: {
                _token: "{{csrf_token()}}"
            },

            success: function (data){
                var icon = $('#like-' + productId + '>.fa-heart');


                if(icon.hasClass('like')){
                    icon.removeClass('like')
                } else {
                    icon.addClass('like')
                }

                $('#likes_count').text(data.likes_count)

            }
        })
    }



    function addToCart(productId)
    {
        // quantity = تعداد سفارش
        var quantity = 1;


        // اگه المنت  input-quantity وجود داشت یعنی تعدادش بیشتر از صفر باشد آنگاه در آن صورت بیا مقدار این المنت را بگیر
        // اگر تعداد سفارش بیشتر 1 بود آنگاه بیا تعداد همان سفارش را درون متغیر quantity بگذار
        if($('#input-quantity').length)
        {
            // val = value
            quantity = $('#input-quantity').val();
        }


        // $ = jquery

        // مشخص کردن دیتاهایی که باید سمت سرور برود
        $.ajax({
            type: 'post',
            url: "/cart/" + productId,
            // ورودی ها
            data: {
                _token: "{{csrf_token()}}",
                quantity: quantity
            },

            // در صورت موفقیت آمیز بودن و عوض کن مقادیر مجموع آیتم ها و مجموع قیمت ها
            success: function (data) {
                // تغییر دادن text یک فیلد
                $('#total-items').text(data.cart.total_items);
                $('.total-amount').text(data.cart.total_amount);



                // محصول تازه اضافه شده
                // console.log(data.cart[productId]);

                // اگر productId این row  وجود نداشت و بزرگتر از صفر نبود بیا آن سطر را اضافه کن
                if (!$('.cart-row-' + productId).length)
                {

                    var product = data.cart[productId]['product'];
                    var productQty = data.cart[productId]['quantity'];



                    // به انتهای یک table که در بالا هست یعنی به آخرین عنصر این جدول، بهش یک row دیگه اضافه بکند
                    // به jquery بگوییم که به آخرین ردیفی که داخل آن table وجود دارد آنگاه بیا بهش یک row دیگه اضافه کن

                   // $('.cart-table-body:last-child') = انتخاب کن آخرین فرزند این جدول مذکور
                   // append() = اضافه کردن
                    $('.cart-table-body:last-child').append(
                        '<tr class="cart-row-' + product.id +'">'
                            + '<td class="text-center"><a href="product.html"><img class="img-thumbnail" title="'+ product.name +'" alt="' + product.name + '" width="100" src="' + product.image_path +'"></a></td>'
                            + '<td class="text-left"><a href="product.html">'+ product.name +'</a></td>'
                            + '<td class="text-right qty">x '+ productQty +'</td>'
                            + '<td class="text-right">'+ product.cost_with_discount +' تومان</td>'
                            + '<td class="text-center"><button class="btn btn-danger btn-xs remove" title="حذف" onClick="removeFromCart('+ product.id +')" type="button"><i class="fa fa-times"></i></button></td>'
                        + '</tr>'
                    );
                }

                else
                {
                    var productQty = data.cart[productId]['quantity'];
                    $('.cart-row-' + productId + ' .qty').text('x ' + productQty);
                }

            }
        })
    }


    function removeFromCart(productId)
    {
        // console.log(productId, 'hi');

        // مشخص کردن دیتاهایی که باید سمت سرور برود
        $.ajax({
            type: 'delete',
            url: "/cart/" + productId,
            // ورودی ها
            data: {
                _token: "{{csrf_token()}}",
            },

            // در صورت موفقیت آمیز بودن و عوض کن مقادیر مجموع آیتم ها و مجموع قیمت ها
            success: function (data)
            {
                // تغییر دادن text یک فیلد یعنی بنویس
                $('#total-items').text(data.cart.total_items);
                $('.total-amount').text(data.cart.total_amount);
                $('.cart-row-' + productId).remove();
                // console.log('.cart-row-' + productId);
            }
        })
    }


    function updateCart(productId) {}

</script>

@yield('scripts')
<!-- JS Part End-->
</body>
</html>
