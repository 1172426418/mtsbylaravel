<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('title')</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Canonical SEO -->
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
    <link href="{{ asset('admin/doc/ueditor.config.js') }}" type="text/javascript" charset="utf-8" />
    <link href="{{ asset('admin/doc/ueditor.all.min.js') }}" type="text/javascript" charset="utf-8" />
    <link href="{{ asset('admin/doc/lang/zh-cn/zh-cn.js') }}" type="text/javascript" charset="utf-8" />

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

<!-- //One_button('在线状态的案例无法删除，请先下线');
Double_button('真的要删除选中的案例吗？',url);
-->
<!--头部文件结束-->

<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">@yield('title')—无论大小，同样出色</a>
        </div>
    </div>
</nav>


<div class="wrapper wrapper-full-page">
    <div class="full-page login-page" data-color="orange" data-image=" {{ asset('admin/img/full-screen-image-1.jpg') }}">

    <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
     @yield('content')

    	<footer class="footer footer-transparent">
            <div class="container">
                <p class="copyright" align="center">
                   <!-- 2016 <a href="#">Creative Tim</a>, made with love for a better web -->
                   CopyRight (C) @yield('title') All Rights Reserved 版权所有
                </p>
            </div>
        </footer>


        <div class="full-page-background" style="background-image: url( {{asset('admin/img/full-screen-image-1.jpg') }}); display: block;"></div>
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


<script type="text/javascript">

    $('#login_submit').click(function(){
        $('#success').text('');
        var username=$('.username').val();
        var password=$('.password').val();
        if(username.length==''){
            $('#success').text('请输入登陆账号').css('color','red');
        }else if(password==''){
            $('#success').text('请输入登陆密码').css('color','red');
        }else{
            $("#login_form").submit();
        }
    })

        $().ready(function(){
            lbd.checkFullPageBackgroundImage();
            setTimeout(function(){
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
        });

</script>

</html>