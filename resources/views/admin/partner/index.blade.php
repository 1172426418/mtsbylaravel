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
                    <a class="navbar-brand" href="#">城市管理</a>
                </div>
            </div>
        </nav>



        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <div class="div_button" style="margin-bottom:5px;">
                            <form id="search_form" action="{:U('Partner/index')}" method="get">
                                <input type="text" name="city" value="">

                            <input class="search_button" type="button" value="搜索城市">

                            </form>
                        </div>
                        <div class="card">
                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>

                            <table id="bootstrap-table" class="table">
                                <thead>

                                <th class="text-center">城市名称</th>


                               <!--  <th data-sortable="true" class="text-center">举报人</th> -->
                                <!-- <th data-sortable="true" class="text-center">被表扬人</th> -->
                                <th data-sortable="true" class="text-center">添加时间</th>
                                <!-- <th class="text-center">上传时间</th> -->
                            <!--     <th class="text-center">资讯来源</th> -->
                                <th class="td-actions text-center" data-events="operateEvents" data-formatter="operateFormatter">管理</th>
                                </thead>
                                <tbody>
                                    @if(count($countrys) != 0)
                                @foreach($countrys as $country)
                                    <tr align="center">


                                      <!--   <td style="width:10%;padding:4px 0;">
                                            <img src="__ROOT__/{$v.path}" style="width:100px;height:70px;">
                                        </td> -->
                                        <td>{{$country->title}}</td>


                                      <!--   <td>{$v.report}</td> -->
                                        <!-- <td>{$v.bepraise}</td> -->
                                        <td>{{date("Y-m-d H:i:s",$country->addtime)}}</td>
                                 <!--        <td>{$v.froms}</td> -->

                                       <!--  <td class="select-state" data-id="{$v.id}">
                                            <if condition="$v['state']==1">
                                                <img src="__ROOT__/public/img/effect/checked.png">
                                        <else/>
                                                <img src="__ROOT__/public/img/effect/unchecked.png">
                                            </if>

                                        </td> -->
                                        <td class="effect">
                                            <a href="{:U('Partner/edit',array('id'=>$v['id']))}"><img src="__ROOT__/public/img/effect/update.png"  alt="查看" title="查看"></a>&nbsp;&nbsp;
                                            <!-- <img class="successful_delete" data-state="{$v.id}" data-id="{$v.id}" data-src="{:U('News/del',array('id'=>$v['id']))}" src="__ROOT__/public/img/effect/delete.png" alt="删除资讯" title="删除资讯"> -->
                                        </td>
                                    </tr>
                                @endforeach


                                <tr class="text-center">
                                    <td colspan="8" class="paging">

                                          {!! $countrys->links() !!}
                                    </td>
                                </tr>
                                  @else
                                        <tr align="center"><td colspan="3">暂无数据！</td> </tr>
                                @endif
                                </tbody>
                            </table>
                        </div><!--  end card  -->
                    </div> <!-- end col-md-12 -->
                </div> <!-- end row -->

            </div>
        </div>

@endsection

@section('js')
<script type="text/javascript">
    $('li.Partner').addClass('active');
    $('a.Partner-a').attr('aria-expanded','true');
    $('div.Partner-div').addClass('in');
    $('li.Partner-index').addClass('active');

    $('.search_button').click(function(){
            $('#search_form').submit();
    })




</script>

@endsection
