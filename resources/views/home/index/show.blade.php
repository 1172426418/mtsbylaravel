@extends('layouts.home')
@section('css')
<link rel="stylesheet" href="{{asset('statics/css/details.css')}}">
@endsection

@section('title',$result->title)

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
                        <h3>{{$result->title}}</h3>

                        <div class="contents">{!! html_entity_decode($result->content) !!}</div>
                    </div>

                    <!-- 分页 -->

                </article>


            </article>


        </div>
    </section>







@endsection