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
                    <a class="navbar-brand" href="#">首页展示</a>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header text-center">
                                <h4 class="title">轮播图管理</h4>

                                <br/>
                                <!-- <input id="add_logo_button" type="button" value="添加图片"> -->
                            </div>
                            <div class="content table-responsive table-full-width">

                                <table id="bootstrap-table" class="table">
                                    <thead>
                                    <th class="text-center">展示图</th>
                                    <th data-sortable="true" class="text-center">位置</th>
                                    <th data-sortable="true" class="text-center">是否展示</th>
                                    <th data-sortable="true" class="text-center">上传时间</th>
                                    <th data-sortable="true" class="text-center">链接地址</th>
                                  <!--   <th data-sortable="true" class="text-center">开始展示时间</th>
                                    <th class="text-center">已持续展示</th>
                                    <th class="text-center">状态</th> -->
                                    <th class="td-actions text-center" data-events="operateEvents" data-formatter="operateFormatter">管理</th>
                                    </thead>
                                    <tbody>
                                    @foreach($images as $image)
                                        <tr align="center">
                                            <td style="width:17%;padding:4px 0;">
                                                <div class="img-container" style="height:70px;">
                                                    <img src="{{$image->image}}" style="height:100%;width:85%;">
                                                </div>
                                            </td>
                                            <td>{{$image->position}}</td>
                                            <td>{{$image->is_see}}</td>
                                            <td>{{date("Y-m-d",$image->addtime)}}</td>
                                            <td>{{$image->address}}</td>
                                           <!--  <if condition="$v['recently_time']==0">
                                                <td class="recently_time" data-id="{$v.id}" style="color:#ccc">&#45;&#45;</td>
                                                <else/>
                                                <td class="recently_time" data-id="{$v.id}">{$v.recently_time}</td>
                                            </if>

                                            <if condition="$v['recently_time']==0">
                                                <td class="now_time" style="color:#ccc" data-id="{$v.id}">&#45;&#45;</td>
                                                <else/>
                                                <td class="now_time" data-id="{$v.id}">{$v.now_time}</td>
                                            </if>

                                            <if condition="$v['state']==1">
                                                <td class="state" style="color:greenyellow" data-id="{$v.id}">展示中</td>
                                                <else/>
                                                <td class="state" style="color:#ccc" data-id="{$v.id}">未展示</td>
                                            </if>
 -->
                                            <td class="effect td-actions">

                                            <a href="{{url('admin/carousel/edit',$image->id)}}"><img src="__ROOT__/public/img/effect/update.png"  alt="查看" title="查看"></a>&nbsp;&nbsp;
                                            <!-- <img class="successful_delete" data-state="{$v.state}" data-id="{$v.id}" data-src="__APP__/Successful/get_recycle/id/{$v.id}.html" src="__ROOT__/public/img/effect/delete.png" alt="放入回收站" title="放入回收站"> -->

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div><!--  end card  -->
                    </div> <!-- end col-md-12 -->
                </div> <!-- end row -->

            </div>
        </div>

@endsection

@section('js')
<script type="text/javascript">
    $('li.Index').addClass('active');
    $('a.Index-a').attr('aria-expanded','true');
    $('div.Index-div').addClass('in');
    $('li.Index-index').addClass('active');




</script>

@endsection
