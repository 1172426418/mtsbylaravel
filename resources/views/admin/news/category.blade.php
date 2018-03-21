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
                    <a class="navbar-brand" href="#">资讯管理</a>
                </div>
            </div>
        </nav>



        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <div class="div_button" style="margin-bottom:5px;">
                          <!--   <form id="search_form" action="__APP__/Report/index.html" method="post">

                            <input name="search" class="search" type="text" placeholder="搜索标题或作者">
                            <input class="search_button" type="button" value="搜索">

                            </form> -->
                        </div>
                        <div class="card">
                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>

                            <table id="bootstrap-table" class="table">
                                <thead>
                                <th class="text-center">ID</th>
                                <th class="text-center">分类名称</th>


                                <th class="td-actions text-center" data-events="operateEvents" data-formatter="operateFormatter">管理</th>
                                </thead>
                                <tbody>
                                    @if(count($category) != 0)
                                @foreach($category as $v)
                                    <tr align="center">


                                      <td>{{$v->category_id}}</td>
                                        <td>{{$v->category_name}}</td>

                                        <td class="effect">
                                            <a href="{{url('admin/news/category_edit',array('id'=>$v->category_id))}}"><img src="__ROOT__/public/img/effect/update.png"  alt="查看" title="查看"></a>&nbsp;&nbsp;
                                            <!-- <img class="successful_delete" data-state="{$v.id}" data-id="{$v.id}" data-src="{:U('News/del',array('id'=>$v['id']))}" src="__ROOT__/public/img/effect/delete.png" alt="删除资讯" title="删除资讯"> -->
                                        </td>
                                    </tr>
                                @endforeach


                                <tr class="text-center">
                                    <td colspan="8" class="paging">

                                          {!! $category->links() !!}
                                    </td>
                                </tr>
                                   @else
                                        <tr align="center"><td colspan="4">暂无数据！</td> </tr>
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
        $('li.News').addClass('active');
    $('a.News-a').attr('aria-expanded','true');
    $('div.News-div').addClass('in');
    $('li.News-category').addClass('active');

    $('.search_button').click(function(){
            $('#search_form').submit();
    })
</script>

@endsection
