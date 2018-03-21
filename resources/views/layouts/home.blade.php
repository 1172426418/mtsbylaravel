<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta name="keywords" content="梦淘沙,创业,创业家族,创新,mengtaosha,梦淘沙创业家族" />
    <meta name="description" content="梦淘沙：让年轻成为你的资本，试着发现生活中的美。调整心态保持品味，用心经营青春无悔。" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
    <link rel="icon" href="{{asset('statics/img/x-icon.png')}}" type="image/x-icon" />
    <link rel="stylesheet" href="{{asset('statics/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('statics/css/common.css')}}">
    <link rel="stylesheet" href="{{asset('statics/css/index.css')}}">
    @yield('css')
    <title>@yield('title')</title>
</head>

<body>



    <section class="header">


        <!-- logo -->
        <div class="logo">
            <img class="img-responsive center-block" src="{{asset('statics/img/logo_text.jpg')}}" alt="">
        </div>
<div class="c-e">



        <!-- 轮播 -->
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              @foreach($banner as $k => $v)
                <div class="item @if($k == 0) active @endif">
                    <img src="{{$v->image}}" alt="...">

                </div>

              @endforeach
               <!--  <div class="item active">
                    <img src="__ROOT__/public/statics/img/banner1.jpg" alt="...">

                </div>
                <div class="item">
                    <img src="__ROOT__/public/statics/img/banner1.jpg" alt="...">

                </div>
                <div class="item">
                    <img src="__ROOT__/public/statics/img/banner1.jpg" alt="...">

                </div> -->

            </div>
        </div>
</div>

    </section>


@yield('content')






        <section class="footer">
        <div class="c-e">
            <img class="img-responsive center-block" src="{{asset('statics/img/contact.jpg')}}" alt="">
            <h6>梦淘沙创业家族工作室</h6>
            <p>手机：{{$config->linktel}} 丨 微信：{{$config->linkwx}} 丨 联系人：{{$config->linkman}} 丨 邮箱：{{$config->linkemail}} 丨 地址：{{$config->linkadress}}</p>
            <p>{{$config->beian}} </p>
        </div>
    </section>



    <script src="{{asset('statics/js/jquery.min.js')}}"></script>
    <script src="{{asset('statics/js/bootstrap.min.js')}}"></script>
    <script type="text/jscript" src="{{asset('statics/js/main.js')}}"></script>




</body>

</html>