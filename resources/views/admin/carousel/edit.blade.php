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
                    <a class="navbar-brand" href="#">修改图片</a>
                </div>
            </div>
        </nav>



        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            @if (count($errors) > 0)
                                      <div class="alert alert-danger">
                                        <ul>
                                          @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                          @endforeach
                                        </ul>
                                      </div>
                                    @endif

                                @if(null !== session('msg')) <div class="alert alert-danger"> {{session('msg')}} </div> @endif
                            <form id="logo_upload" class="form-horizontal" action="{{url('admin/carousel/update',$images->id)}}" method="post" enctype="multipart/form-data">
                                <div class="content">
                                    {{csrf_field()}}
                                    <legend>修改图片</legend>

                                    <fieldset>
                                        <div class="form-group" >
                                            <label class="col-sm-2 control-label">展示图</label>
                                            <div class="col-sm-6" style="width:10%">
                                                <input onclick="$('#select_img').click()" type="button" value="选择图片" style="width:100%;height:35px;background:white;border:1px solid #ccc">
                                                <input name="image" id="select_img" type="file" style="display:none">
                                            </div>
                                            <div class="col-sm-6"><code style="margin-top:4px">请使用jpg、png、gif格式的图片,且不能超过5M.最佳尺寸为1920*500</code></div>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <div class="form-group" style="height:400px;line-height:400px;">
                                            <label class="col-sm-2 control-label">图片预览</label>
                                            <div class="col-sm-6">
                                                <img id="show_img" style="height:200px;width:800px;line-height:400px;" src="{{ asset($images->image) }}">
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6">
                                                <span id="logo_upload_success"></span>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">是否显示</label>
                                            <div class="col-sm-4">

                                                    <select name="is_see">


                                                    <option value="1">1</option>

                                              </select>


                                                   </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">链接地址</label>
                                            <div class="col-sm-6">
                                                <input value="{{$images->address}}" class="form-control" id="froms" type="text" name="address"  style="width:40%;"/>

                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="footer text-left">
                                      <button id="button_yes" type="button" class="btn btn-info btn-fill">提交</button>
                                    <button id="button_no" type="button" class="btn btn-info btn-fill" onclick="window.location.href='__APP__/Index/index.html'">返回</button>
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
<script type="text/javascript">
    $('li.Index').addClass('active');

    $('.content input').mouseover(function(){
        $(this).css('background','#ccc');
    })
    $('.content input').mouseout(function(){
        $(this).css('background','white');
    })

    $('#button_yes').click(function(){

            $('#logo_upload').submit();

    });

    $('#select_img').change(function(){
        if($('#select_img').val()==''){
            $('#show_img').css('display','none');
        }
    })
    //图片上传预览
    $(function(){
        $('#select_img').on('change',function(){
            var imgfile =this.files[0];
            var fr= new FileReader();
            fr.onload=function(){
                $('#show_img').attr('src',fr.result).css('display','');
                $('#show_img').css({"width":"","height":""});
            }
            fr.readAsDataURL(imgfile);
        });
    })
</script>

@endsection
