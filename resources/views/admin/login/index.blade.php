   @extends('layouts.login')
   @section('title','梦淘沙');

   @section('content')
   <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                        <form id="login_form" method="post" action="{{ url('admin/login/login')}} ">
                            {{ csrf_field() }}
                        <!--   if you want to have the card without animation please remove the ".card-hidden" class   -->
                            <div class="card card-hidden">
                                <div class="header text-center">登陆</div>
                                <div class="content">
                                    <div class="form-group">
                                        <label>登陆账号</label>
                                        <input name="username" type="text" value=" {{old('username')}} " placeholder="请输入登陆账号" class="form-control username" onkeyup="value=value.replace(/[^\S]+/g,'')">
                                    </div>
                                    <div class="form-group">
                                        <label>登陆密码</label>
                                        <input name="password" type="password"  placeholder="请输入登陆密码" class="form-control password" onkeyup="value=value.replace(/[^\S]+/g,'')">
                                    </div>
                                     <input type="checkbox" name="remember" value="1" />记住我 </label>
                                    <div class="form-group" align="center">
                                        <label id="success">

                                            {{ session('msg') }}

                                        </label>
                                    </div>
                                </div>
                                <div class="footer text-center">
                                    <button id="login_submit" type="button" class="btn btn-fill btn-warning btn-wd">确定</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
        @endsection