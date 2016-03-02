@extends("layout.admin")

@section('style')
    @parent
@stop()
@section('content')
    <div class="col-sm-9">
        @if(Session::has('success'))
            <div class="alert alert-success ">
                <button data-dismiss="alert" class="close">×</button>
                <i class="fa fa-check-circle"></i>
                {{Session::get('success')}}
            </div>
        @endif()
        @if(Session::has('update'))
            <div class="alert alert-success ">
                <button data-dismiss="alert" class="close">×</button>
                <i class="fa fa-check-circle"></i>
                {{Session::get('update')}}
            </div>
        @endif()
    </div>
    <table class="table table-hover" id="sample-table-1">
        <thead>
        <tr>
            <th class="center">#</th>
            <th class="center">عکس</th>
            <th class="center">نام عکس</th>
            <th class="hidden-xs center">عملیات</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 1 ?>
        @foreach($galleries as $c)
            <tr>
                <td class="center">{{$i}}</td>
                <td class="hidden-xs center">{{ HTML::image($c->thumbnail,$c->title,array('width'=>'100','height'=>'75'))}}</td>
                <td class="hidden-xs center">{{$c->title}}</td>
                <td class="center">
                    {{Form::open(array('url'=>'admin/galleries/'.$c->id))}}
                    {{Form::token()}}
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit(' حذف ',array('class'=>'btn btn-xs btn-bricky ','style'=>'font-family:b nazanin; ','onclick'=>"if(!confirm('آیا مایل به تغییر وضعیت این ردیف هستید؟')){return false;};"))}}
                    {{Form::close()}}
                </td>
            </tr><?php $i++ ?>
        @endforeach()
        </tbody>
    </table>
@stop
@section('script')
    @parent()
@stop()