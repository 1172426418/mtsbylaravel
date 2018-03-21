@extends('layouts.admin')

@section('title','宣鸣网络')





@section('content')


    <!--左侧菜单栏结束-->

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
                    <a class="navbar-brand" href="#">修改公司资料</a>
                </div>
            </div>
        </nav>
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


        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form id="company_form" class="form-horizontal" action="{{ url('admin/index/update',$message->id)}}" method="post">
                                <div class="content">
                                    <legend>修改公司资料</legend>
                                    <fieldset>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"></label>
                                            <div class="col-sm-6"></div>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">联系人</label>
                                            <div class="col-sm-3" style="width:20%">
                                                <input class="form-control truename" value="{{ $message->linkman }}" type="text" name="linkman"/>
                                            </div>


                                        </div>
                                    </fieldset>
                                     <fieldset>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">手机</label>
                                            <div class="col-sm-3" style="width:20%">
                                                <input class="form-control truename" value="{{$message->linktel}}" type="text" name="linktel"/>
                                            </div>

                                            <label style="width:10%" class="col-sm-2 control-label">微信</label>
                                            <div class="col-sm-3" style="width:20%">
                                                <input class="form-control truename" value="{{$message->linkwx}}" type="text" name="linkwx"/>
                                            </div>
                                        </div>
                                    </fieldset>


                                    <fieldset>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"><span style="color:red">*&nbsp;</span>邮箱</label>
                                            <div class="col-sm-6">
                                                <input class="form-control phone" type="text" value="{{$message->linkemail}}" name="linkemail" placeholder="请填入邮箱" onkeyup="value=value.replace(/[^\S]+/g,'')"/>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"><span style="color:red">*&nbsp;</span>地址</label>
                                            <div class="col-sm-6">
                                                <input class="form-control email" value="{{$message->linkadress}}" type="text" name="linkadress" placeholder="请输入联系地址" />
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"><span style="color:red">*&nbsp;</span>备案号</label>
                                            <div class="col-sm-6">
                                                <input class="form-control email" value="{{$message->beian}}" type="text" name="beian" placeholder="请输入备案号" />
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">联系我们</label>
                                            <div class="col-sm-6">
                                                <script name='linkus' id="container" type="text/plain" style="width:110%;height:500px;">{!! html_entity_decode($message->linkus) !!}  </script>
                                                <script type="text/javascript">
                                                var ue = UE.getEditor('container');
                                                ue.ready(function(){
                                                ue.execCommand('serverparam', '_token', '{{ csrf_token() }}'); //这里添加laravel安全token：
                                                });
                                                </script>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"></label>
                                            <div class="col-sm-3">
                                                <span id="admin_success" style="padding-left:4%;color:red"></span>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="footer text-left">
                                    <button id="button_yes" type="button" class="btn btn-info btn-fill">提交</button>
                                   <!--  <a href="{:U('Company/index')}"><button id="button_no" type="button" class="btn btn-info btn-fill">返回</button></a> -->
                                 <br/>
                                    <br/>
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
            </div>
        </div>

@endsection

@section('js')
<script type="text/javascript">
    $('li.Company').addClass('active');
    $('a.Company-a').attr('aria-expanded','true');
    $('div.Company-div').addClass('in');
    $('li.Company-index').addClass('active');

    $('#button_yes').click(function(){
        var datas=$("#company_form").serialize();
        var url=$("#company_form").attr("action");

        datas=datas;
        $.ajax({
            type:'get',
            url:url,
            data:datas,
            success:function(msg){
                // $(".modal-body").html(msg);
                // $('#tip').modal('toggle');
                tip(msg);
            }
        })

    })

   // $('.jurisdiction option[value={$admin.jurisdiction}]').prop('selected','selected');
</script>
@endsection
@include('UEditor::head')