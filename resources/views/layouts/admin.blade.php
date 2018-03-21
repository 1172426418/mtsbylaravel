<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('title')</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Canonical SEO -->
    <!--  Social tags      -->
    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!--  Light Bootstrap Dashboard core CSS    -->
    <link href="{{ asset('admin/css/light-bootstrap-dashboard.css') }}" rel="stylesheet" />

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('admin/css/demo.css') }}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="{{ asset('admin/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/css/685fd913f1e14aebad0cc9d3713ee469.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />
<link href="{{ asset('admin/css/new_css.css') }}" rel="stylesheet" />


    <!--百度编辑器-->
<!--     <link href="{{ asset('admin/doc/lang/zh-cn/zh-cn.js') }}" type="text/javascript" charset="utf-8" /> -->
</head>
<body>
<!--双按钮提示栏-->
<div id="header-success1">
    <h1></h1>
    <div align="center">
        <input class="yes" url="" type="button" value="确定">
        <input class="no" url="" type="button" value="取消">
    </div>
</div>

<!--  单按钮提示栏 -->
<div id="header-success2">
    <h1></h1>
    <div align="center">
        <input class="yes" url="" type="button" value="确定">
    </div>
</div>

<div style="height:150px;" class="free_time">
    <h1></h1>
    <input type="text" class="data" placeholder="请输入标签名称" style="margin:20px 0 0 80px;height:25px;width:150px;padding-left:5px;" onkeyup="value=value.replace(/[^\S]+/g,'')">
    <div align="center">
        <input class="yes" data-id="" type="button" value="保存">
        <input class="no" type="button" value="取消">
    </div>
</div>

<div class="modal fade bs-example-modal-sm" id="tip" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
       <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">提示信息</h4>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    function tip(msg){
        $(".modal-body").html(msg);
        $('#tip').modal('toggle');
    }
</script>
<div class="wrapper">

<div id="men-left" class="sidebar" data-color="orange" data-image="../../assets/img/full-screen-image-3.jpg">

    <div class="logo">
        <a href="#" class="logo-text">
            梦淘沙创业家族
        </a>
    </div>
    <div class="logo logo-mini">
        <a href="#" class="logo-text">
            梦淘沙创业家族
        </a>
    </div>

    <div class="sidebar-wrapper">

        <div class="user">
            <div class="photo">
                <img src="{{ asset('admin/img/logo.png')}}" />
               <!--管理员照片-->
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                 {{ Auth::guard('admin')->user()->username }}, 您好
                </a>

            </div>
        </div>

        <ul class="nav">

                        <li class="Company">
                <a href="{{ url('admin/index/index') }}">
                    <i class="pe-7s-credit"></i>
                    <p>公司信息</p>
                </a>
            </li>
                 <li class="Index">
                <a href="{{url('admin/carousel/index')}}">
                    <i class="pe-7s-cash"></i>
                    <p>轮播图管理</p>
                </a>
            </li>

            <li class="News">
                <a class="News-a" data-toggle="collapse" href="#tablesExamples">
                    <i class="pe-7s-news-paper"></i>
                    <p>资讯管理
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse News-div" id="tablesExamples">
                    <ul class="nav">
                        <li class="News-index"><a href="{{ url('admin/news/index')}}">资讯列表</a></li>
                        <li class="News-add"><a href="{{url('admin/news/create')}}">资讯添加</a></li>
                        <li class="News-category"><a href="{{url('admin/news/category')}}">资讯分类</a></li>
                        <!-- <li class="Industry-menu"><a href="__APP__/Industry/menu.html">添加案例</a></li> -->
                    </ul>
                </div>
            </li>

            <li class="Partner">
                <a class="Partner-a" data-toggle="collapse" href="#partnerExamples">
                    <i class="pe-7s-users"></i>
                    <p>合伙人体系管理
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse Partner-div" id="partnerExamples">
                    <ul class="nav">
                        <li class="Partner-index"><a href="{{url('admin/partner/index')}}">城市列表</a></li>
                       <!--  <li class="Partner-edit_us"><a href="{:U('Partner/edit_us')}">联系我们</a></li> -->
                        <!-- <li class="Industry-menu"><a href="__APP__/Industry/menu.html">添加案例</a></li> -->
                    </ul>
                </div>
            </li>




            <li class="Oneself">
                <a class="Oneself-a" data-toggle="collapse" href="#pagesExamples">
                    <i class="pe-7s-config"></i>
                    <p>个人中心
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse Oneself-div" id="pagesExamples">
                    <ul class="nav">
                   <!--      <li class="Oneself-update_data"><a href="__APP__/Oneself/update_data.html">修改个人资料</a></li> -->
                        <li class="Oneself-update_pwd"><a href="__APP__/Oneself/update_pwd.html">修改登录密码</a></li>
                        <li class="quit"><a href="{{ url('admin/index/loginout') }}">退出登录</a></li>
                    </ul>
                </div>
            </li>

        </ul>
    </div>
    <!-- <div class="sidebar-background" style="background-image: url(__ROOT__/public/img/effect/full-screen-image-3.jpg); display: block;"></div> -->
</div>
@yield('content')

<footer class="footer">
    <div class="container-fluid">
        <p class="copyright" align="center">
            CopyRight (C) 2017 @yield('title') All Rights Reserved 版权所有
        </p>
    </div>
</footer>
    </div>
</div>

</body>
        <script src="{{ asset('admin/js/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/js/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/js/jquery-ui.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/js/jquery.validate.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/js/moment.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/js/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/js/bootstrap-selectpicker.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/js/bootstrap-checkbox-radio-switch-tags.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/js/chartist.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/js/bootstrap-notify.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/js/sweetalert2.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/js/jquery-jvectormap.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/js/aa743e8f448a4792bad10d201a7080f6.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/js/bootstrap-table.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/js/fullcalendar.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/js/light-bootstrap-dashboard.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/js/jquery.sharrre.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin/js/demo.js') }}" type="text/javascript"></script>
@yield('js')

</html>