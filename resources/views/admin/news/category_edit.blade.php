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
                    <a class="navbar-brand" href="#">分类查看</a>
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
                            <form  class="form-horizontal" action="{{ url('admin/news/category_update',$category->category_id) }}" method="post">
                                <div class="content">
                                    <legend>分类查看</legend>


                                    {{csrf_field()}}

                                    <fieldset>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">分类名称</label>
                                            <div class="col-sm-6">
                                                <input value="{{$category->category_name}}" class="form-control" id="category_name" type="text" name="category_name"  style="width:40%;"/>
                                            </div>
                                        </div>
                                    </fieldset>





                                </div>
                                <div class="footer text-left">

                                 <input id="button_yes" type="submit" value="修改" class="btn btn-info btn-fill"></button>
                                    <a href="{:U('News/category')}"><button id="button_no" type="button" class="btn btn-info btn-fill">返回</button></a>

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
    $('li.News').addClass('active');
    $('a.News-a').attr('aria-expanded','true');
    $('div.News-div').addClass('in');
    $('li.News-{$url}').addClass('active');
</script>

@endsection
