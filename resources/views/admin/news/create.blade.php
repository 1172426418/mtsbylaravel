@extends('layouts.admin')

@section('title','宣鸣网络')





@section('content')


    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-minimize">
                    <button id="minimizeSidebar" class="btn btn-warning btn-fill btn-round btn-icon">
                        <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
                        <i class="fa fa-navicon visible-on-sidebar-mini"></i>
                    </button>
                </div>
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">{{ $title }}</a>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form  class="form-horizontal" action="{{url('admin/news/store')}}" method="post" enctype="multipart/form-data">
                                <div class="content">
                                    <legend></legend>
                                    {{ csrf_field() }}
                                   <!--  <fieldset>
                                        <div class="form-group" >
                                            <label class="col-sm-2 control-label">标识图片</label>
                                            <div class="col-sm-6" style="width:10%">
                                                <input id="Products_add_img" onclick="$('#select_img').click()" type="button" value="选择图片" style="width:100%;height:30px;background:white;border:1px solid #ccc">
                                                <input name="logo" id="select_img" type="file" style="display:none">
                                            </div>
                                            <div class="col-sm-6"><code style="margin-top:4px">请使用330px*300px 格式为jpg、png、gif的图片,且不能超过2M.</code></div>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <div class="form-group" style="height:100px;line-height:100px;">
                                            <label class="col-sm-2 control-label">图片预览</label>
                                            <div class="col-sm-6">
                                                <img id="show_img" src="__ROOT__/{$production.path}" style="width:180px;height:100px;">
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">产品类别</label>
                                            <div class="col-sm-6">
                                                <select name="navi_id" id="navi_id" class="form-control" required="required" style="width:121%;">
                                                    <foreach name="navigation" item="v">
                                                        <option value="{$v.id}" data-id="{$v.id}">{$v['menu']}</option>
                                                    </foreach>
                                                </select>
                                            </div>
                                        </div>
                                    </fieldset> -->
                                    @if (count($errors) > 0)
                                      <div class="alert alert-danger">
                                        <ul>
                                          @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                          @endforeach
                                        </ul>
                                      </div>
                                    @endif

                                    <fieldset>


                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">资讯标题</label>{{session('success')}}
                                            <div class="col-sm-6">
                                                <input value="{{old('title')}}" class="form-control" id="title" type="text" name="title"  style="width:40%;"/>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">资讯分类</label>
                                            <div class="col-sm-6">
                                                <select name="category_id">
                                                    @foreach($category as $v)
                                                    <foreach name="category" item="v">
                                                    <option value="{{$v->category_id}}"  >{{$v->category_name}}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                    </fieldset>
                               <!--     <fieldset>
                                        <div class="form-group" >
                                            <label class="col-sm-2 control-label">封面图片</label>
                                            <div class="col-sm-6" style="width:10%">
                                                <input id="Products_add_img" onclick="$('#select_img').click()" type="button" value="选择图片" style="width:100%;height:30px;background:white;border:1px solid #ccc">
                                                <input name="logo" id="select_img" type="file" style="display:none">
                                            </div>
                                            <div class="col-sm-6"><code style="margin-top:4px">请使用330px*300px 格式为jpg、png、gif的图片,且不能超过2M.</code></div>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <div class="form-group" style="height:100px;line-height:100px;">
                                            <label class="col-sm-2 control-label">图片预览</label>
                                            <div class="col-sm-6">
                                                <img id="show_img" style="width: 150px;height: 100px;" src="__ROOT__/{$news.image}">
                                            </div>
                                        </div>
                                    </fieldset> -->
                         <!--             <fieldset>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"><span style="color:red">*&nbsp;</span>资讯简介</label>
                                            <div class="col-sm-6">
                                                <textarea  id="abstract" class="form-control text" name="abstract"  placeholder="300字以内" >{$news.abstract}</textarea>
                                            </div>
                                        </div>
                                    </fieldset> -->
                                  <!--   <fieldset>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">表扬人</label>
                                            <div class="col-sm-6">
                                                <input value="{$evidence.bepraise}" class="form-control" type="text" name="bereport" number="true" style="width:40%;" onkeyup="value=value.replace(/[^\S]+/g,'')"/>
                                            </div>
                                        </div>
                                    </fieldset> -->
                                     <!--  <fieldset>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">被举报人手机号</label>
                                            <div class="col-sm-6">
                                                <input value="{$report.betel}" class="form-control" type="text" name="betel" number="true" style="width:40%;" onkeyup="value=value.replace(/[^\S]+/g,'')"/>
                                            </div>
                                        </div>
                                    </fieldset> -->
                                   <!--   <fieldset>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">提交时间</label>
                                            <div class="col-sm-4">
                                                {$news.addtime|date='Y-m-d H:i:s',###}
                                            </div>
                                        </div>
                                    </fieldset> -->
                                  <!--   <fieldset>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">表扬正文</label>
                                            <div class="col-sm-6">
                                                <script name='content' id="editor" type="text/plain" style="width:110%;height:500px;">{$evidence.content}</script>
                                                <script type="text/javascript">
                                                var ue = UE.getEditor('editor');
                                                </script>
                                            </div>
                                        </div>
                                    </fieldset> -->
                            <!--         <fieldset>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">认证照片</label>
                                            <div class="col-sm-6">
                                                <img id="example" style="width:600px;height:400px;" src="/anykey/public/home/img/case-img1.jpg">
                                            </div>
                                        </div>
                                    </fieldset>



                                    </if> -->

                                   <fieldset>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">资讯正文</label>
                                            <div class="col-sm-6">
                                                <script name='content' id="editor" type="text/plain" style="width:110%;height:500px;">{!! html_entity_decode(old('content')) !!}</script>
                                                <script type="text/javascript">
                                                var ue = UE.getEditor('editor');
                                                </script>
                                            </div>
                                        </div>
                                    </fieldset>

                                </div>
                                <div class="footer text-left">

                                 <input id="button_yes" type="submit" value="提交" class="btn btn-info btn-fill"></button>
                                    <a href="{:U('News/index')}"><button id="button_no" type="button" class="btn btn-info btn-fill">返回</button></a>

                                </div>
                                <br/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

@section('js')
<script>
    $('li.News').addClass('active');
    $('a.News-a').attr('aria-expanded','true');
    $('div.News-div').addClass('in');
    $('li.News-add').addClass('active');

    $('#Products_add_img').mouseover(function(){
        $(this).css('background','#ccc');
    })
    $('#Products_add_img').mouseout(function(){
        $(this).css('background','white');
    })

   $(function(){
        $('#select_img').on('change',function(){
            var imgfile =this.files[0];
            var fr= new FileReader();
            fr.onload=function(){
                $('#show_img').attr('src',fr.result);
                $('#show_img').css({"width":"150px","height":"100px"});
            }
            fr.readAsDataURL(imgfile);
        });
    })
    $('#select_img').change(function(){
        $('#show_img').css('display','');
        if($(this).val()==''){
            $('#show_img').css('display','none');
        }
    })



</script>

@endsection
@include('UEditor::head')