@extends('layouts.home')

@section('title','宣鸣创意')

@section('content')


    <section class="content">
        <div class="c-e">
            <!-- 搜索 -->
            <form class="search" action="{{url('/web/search')}}" method="get">


                <div class="input-group">

                    <input type="text" name="keywords" class="form-control" placeholder="全站搜索">

                    <span class="input-group-btn">
                        <input class="btn btn-default" type="submit" value="">
                    </span>
                </div>


            </form>


            <!-- 导航 -->
            <article class="clear">
                <!-- 导航左 -->
                <nav class="nav-left">
                    <ul>
                        <li>
                            产业分类
                        </li>

                        @foreach($left_navigation as $vo)
                            <li @if($vo->category_id == $category_id )class="left-active" @endif>
                            <a href="{{url('/category',$vo->category_id)}}">{{$vo->category_name}}</a>
                            </li>
                        @endforeach

                    </ul>
                </nav>

                <!-- 导航上 -->
                <nav class="nav-top">
                    <ul>
                        <li @if($category_id == 0)class="top-active" @endif>
                            <a href="{{url('/')}}">网站首页</a>
                        </li>
                        @foreach($top_navigation as $vo)
                            <li @if($vo->category_id == $category_id ) class="top-active" @endif>
                            <a href="{{url('/',array('category',$vo->category_id))}}">{{$vo->category_name}}</a>
                            </li>
                        @endforeach

                        <li>
                            <a href="#">联系我们</a>
                        </li>
                    </ul>
                </nav>

                <!-- 内容区 -->
                <article class="cont-box">
                    <!-- 内容 -->
                    <div class="news">
                        <ul>

                            @foreach($result as $vo)
                                <li>
                                    <a href="{{url('/',$vo->id.'.html')}}">
                                        <span>{{$vo->title}}</span>
                                        <span>{{date("Y-m-d H:i:s",$vo->addtime)}}</span>
                                    </a>
                                </li>
                            @endforeach


                        </ul>
                    </div>

                    <!-- 分页 -->
                    <div class="pages">
                        <ul class="pager">
                            {!! $result->links() !!}

                        </ul>
                    </div>
                </article>


            </article>


        </div>
    </section>

    <section class="maps">
        <h1>合伙人体系</h1>
        <div class="map">
                <img src="{{asset('statics/img/map/map.jpg')}}" width="716" height="595" usemap="#Map" border="0">
                <div class="city"><div class="citybg" style="background:url({{asset('statics/img/map/anhui.png')}}) no-repeat 0 0; top:314px; left:523px; width:75px; height:90px;"></div><a style=" position:absolute; top:355px; left:545px; z-index:10;" href="{{url('/partner','安徽')}}">安徽</a></div>
                <div class="city"><div class="citybg" style="background:url({{asset('statics/img/map/neimeng.png')}}) no-repeat 0 0;  top:9px; left:296px; width:318px; height:272px; "></div><a style="position:absolute; top:211px; left:424px; z-index:10;" href="{{url('/partner','内蒙')}}">内蒙</a></div>
                <div class="city"><div class="citybg" style=" background:url({{asset('statics/img/map/heilongjiang.png')}}) no-repeat 0 0; top:1px; left:550px; width:165px; height:151px;"></div><a style="position:absolute;top:81px; left:624px; z-index:10;" href="{{url('/partner','黑龙江')}}">黑龙江</a></div>
                <div class="city"><div class="citybg" style=" background:url({{asset('statics/img/map/xinjiang.png')}}) no-repeat 0 0; top:73px; left:0px; width:292px; height:223px;"></div><a style="position:absolute;top:211px; left:124px; z-index:10;" href="{{url('/partner','新疆')}}">新疆</a></div>
                <div class="city"><div class="citybg" style=" background:url({{asset('statics/img/map/xizang.png')}}) no-repeat 0 0; top:275px; left:31px; width:281px; height:175px;"></div><a style="position:absolute;top:361px; left:145px; z-index:10;" href="{{url('/partner','西藏')}}">西藏</a></div>
                <div class="city"><div class="citybg" style=" background:url({{asset('statics/img/map/qinghai.png')}}) no-repeat 0 0; top:240px; left:182px; width:185px; height:135px;"></div><a style="position:absolute;top:300px; left:254px; z-index:10;" href="{{url('/partner','青海')}}">青海</a></div>
                <div class="city"><div class="citybg" style=" background:url({{asset('statics/img/map/gansu.png')}}) no-repeat 0 0; top:187px; left:236px; width:207px; height:177px;"></div><a style="position:absolute;top:310px; left:364px; z-index:10;" href="{{url('/partner','甘肃')}}">甘肃</a></div>
                <div class="city"><div class="citybg" style=" background:url({{asset('statics/img/map/ningxia.png')}}) no-repeat 0 0; top:245px; left:379px; width:49px; height:75px;"></div><a style="position:absolute;top:272px; left:390px; z-index:10;" href="{{url('/partner','宁夏')}}">宁夏</a></div>
                <div class="city"><div class="citybg" style=" background:url({{asset('statics/img/map/shanghai.png')}}) no-repeat 0 0; top:354px; left:610px; width:23px; height:22px;"></div><a style="position:absolute;top:352px; left:600px;; z-index:10;" href="{{url('/partner','上海')}}">上海</a></div>
                <div class="city"><div class="citybg" style=" background:url({{asset('statics/img/map/liaoning.png')}}) no-repeat 0 0; top:161px; left:557px; width:91px; height:87px;"></div><a style="position:absolute;top:180px; left:600px; z-index:10;" href="{{url('/partner','辽宁')}}">辽宁</a></div>
                <!-- <div class="city"><div class="citybg" style=" background:url({{asset('statics/img/map/guangdong.png')}}) no-repeat 0 0; top:470px; left:464px; width:111px; height:88px;"></div><a style="position:absolute;top:490px; left:500px; z-index:10;" href="index.html">广东</a></div> -->

                <div class="city"><div class="citybg" style=" background:url({{asset('statics/img/map/guangdong.png')}}) no-repeat 0 0; top:470px; left:464px; width:111px; height:88px;"></div><a style="position:absolute;top:485px; left:500px; z-index:10;" href="{{url('/partner','广东')}}">广东</a></div>

                <div class="city"><div class="citybg" style=" background:url({{asset('statics/img/map/guangxi.png')}}) no-repeat 0 0; top:454px; left:382px; width:118px; height:92px;"></div><a style="position:absolute;top:488px; left:432px; z-index:10;" href="{{url('/partner','广西')}}">广西</a></div>
                <div class="city"><div class="citybg" style=" background:url({{asset('statics/img/map/henan.png')}}) no-repeat 0 0; top:288px; left:461px; width:118px; height:92px;"></div><a style="position:absolute;top:320px; left:490px; z-index:10;" href="{{url('/partner','河南')}}">河南</a></div>
                <div class="city"><div class="citybg" style=" background:url({{asset('statics/img/map/shanxi.png')}}) no-repeat 0 0; top:242px; left:396px; width:79px; height:134px;"></div><a style="position:absolute;top:321px; left:430px; z-index:10;" href="{{url('/partner','陕西')}}">陕西</a></div>
                <div class="city"><div class="citybg" style=" background:url({{asset('statics/img/map/shanxi2.png')}}) no-repeat 0 0; top:219px; left:458px; width:56px; height:112px;"></div><a style="position:absolute;top:271px; left:470px; z-index:10;" href="{{url('/partner','山西')}}">山西</a></div>
                <div class="city"><div class="citybg" style=" background:url({{asset('statics/img/map/hebei.png')}}) no-repeat 0 0; top:184px; left:497px; width:85px; height:118px;"></div><a style="position:absolute;top:247px; left:508px; z-index:10;" href="{{url('/partner','河北')}}">河北</a></div>
                <div class="city"><div class="citybg" style=" background:url({{asset('statics/img/map/jilin.png')}}) no-repeat 0 0; top:113px; left:575px; width:125px; height:88px;"></div><a style="position:absolute;top:150px; left:642px; z-index:10;" href="{{url('/partner','吉林')}}">吉林</a></div>
                <div class="city"><div class="citybg" style=" background:url({{asset('statics/img/map/beijing.png')}}) no-repeat 0 0; top:210px; left:512px; width:50px; height:38px;"></div><a style="position:absolute;top:215px; left:515px; z-index:10;" href="{{url('/partner','北京')}}">北京</a></div>
                <div class="city"><div class="citybg" style=" background:url({{asset('statics/img/map/tianjin.png')}}) no-repeat 0 0; top:224px; left:535px; width:26px; height:34px;"></div><a style="position:absolute;top:229px; left:535px; z-index:10;" href="{{url('/partner','天津')}}">天津</a></div>
                <div class="city"><div class="citybg" style=" background:url({{asset('statics/img/map/shandong.png')}}) no-repeat 0 0; top:256px; left:521px; width:103px; height:68px;"></div><a style="position:absolute;top:281px; left:540px; z-index:10;" href="{{url('/partner','山东')}}">山东</a></div>
                <div class="city"><div class="citybg" style=" background:url({{asset('statics/img/map/jiangsu.png')}}) no-repeat 0 0; top:305px; left:539px; width:93px; height:72px;"></div><a style="position:absolute;top:321px; left:570px; z-index:10;" href="{{url('/partner','江苏')}}">江苏</a></div>
                <div class="city"><div class="citybg" style=" background:url({{asset('statics/img/map/hainan.png')}}) no-repeat 0 0; top:556px; left:442px; width:89px; height:88px;"></div><a style="position:absolute;top:565px; left:450px; z-index:10;" href="{{url('/partner','海南')}}">海南</a></div>
                <div class="city"><div class="citybg" style=" background:url({{asset('statics/img/map/hubei.png')}}) no-repeat 0 0; top:345px; left:438px; width:115px; height:75px;"></div><a style="position:absolute;top:365px; left:480px; z-index:10;" href="{{url('/partner','湖北')}}">湖北</a></div>
                <div class="city"><div class="citybg" style=" background:url({{asset('statics/img/map/yunnan.png')}}) no-repeat 0 0; top:412px; left:280px; width:132px; height:138px;"></div><a style="position:absolute;top:485px; left:320px; z-index:10;" href="{{url('/partner','云南')}}">云南</a></div>
                <div class="city"><div class="citybg" style=" background:url({{asset('statics/img/map/sichuan.png')}}) no-repeat 0 0; top:328px; left:284px; width:161px; height:143px;"></div><a style="position:absolute;top:385px; left:345px; z-index:10;" href="{{url('/partner','四川')}}">四川</a></div>
                <div class="city"><div class="citybg" style=" background:url({{asset('statics/img/map/guizhou.png')}}) no-repeat 0 0; top:409px; left:367px; width:93px; height:81px;"></div><a style="position:absolute;top:445px; left:405px; z-index:10;" href="{{url('/partner','贵州')}}">贵州</a></div>
                <div class="city"><div class="citybg" style=" background:url({{asset('statics/img/map/taiwan.png')}}) no-repeat 0 0; top:456px; left:613px; width:32px; height:65px;"></div><a style="position:absolute;top:475px; left:613px; z-index:10;" href="{{url('/partner','台湾')}}">台湾</a></div>
                <div class="city"><div class="citybg" style=" background:url({{asset('statics/img/map/fujian.png')}}) no-repeat 0 0; top:415px; left:548px; width:70px; height:84px;"></div><a style="position:absolute;top:445px; left:565px; z-index:10;" href="{{url('/partner','福建')}}">福建</a></div>
                <div class="city"><div class="citybg" style=" background:url({{asset('statics/img/map/hunan.png')}}) no-repeat 0 0; top:394px; left:445px; width:83px; height:96px;"></div><a style="position:absolute;top:425px; left:475px; z-index:10;" href="{{url('/partner','湖南')}}">湖南</a></div>
                <div class="city"><div class="citybg" style=" background:url({{asset('statics/img/map/zhejiang.png')}}) no-repeat 0 0; top:367px; left:574px; width:62px; height:70px;"></div><a style="position:absolute;top:395px; left:588px; z-index:10;" href="{{url('/partner','浙江')}}">浙江</a></div>
                <div class="city"><div class="citybg" style=" background:url({{asset('statics/img/map/jiangxi.png')}}) no-repeat 0 0; top:390px; left:513px; width:76px; height:98px;"></div><a style="position:absolute;top:425px; left:525px; z-index:10;" href="{{url('/partner','江西')}}">江西</a></div>
                <div class="city"><div class="citybg" style=" background:url({{asset('statics/img/map/chongqing.png')}}) no-repeat 0 0; top:363px; left:397px; width:70px; height:80px;"></div><a style="position:absolute;top:390px; left:420px; z-index:10;" href="{{url('/partner','重庆')}}">重庆</a></div>
                <div class="city"><div class="citybg" style=" background:url({{asset('statics/img/map/guangdong.png')}}) no-repeat 0 0; top:470px; left:464px; width:111px; height:88px;"></div><a style="position:absolute;top:510px; left:490px; z-index:10;" href="{{url('/partner','澳门')}}">澳门</a></div>
                <div class="city"><div class="citybg" style=" background:url({{asset('statics/img/map/guangdong.png')}}) no-repeat 0 0; top:470px; left:464px; width:111px; height:88px;"></div><a style="position:absolute;top:500px; left:520px; z-index:10;" href="{{url('/partner','香港')}}">香港</a></div>
        </div>
    </section>





@endsection