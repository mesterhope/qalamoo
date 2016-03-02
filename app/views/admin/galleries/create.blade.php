@extends("layout.admin")
@section('style')
    @parent
    {{HTML::style('admin_assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css')}}
@stop()
@section('content')
<div class="col-sm-9">
    @if($errors->has())
        <div class="alert alert-danger ">
            <button data-dismiss="alert" class="close">×</button>
            @foreach($errors->all() as $errors)
                <i class="fa fa-bug"></i>
                {{$errors}}<br/>
            @endforeach()
        </div>
    @endif()
    @if(Session::has('img'))
        <div class="alert alert-warning ">
            <button data-dismiss="alert" class="close">×</button>
            <i class="fa fa-check-circle"></i>
            {{Session::get('img')}}
</div>
@endif()
</div>
<div class="row">
    <div class="col-sm-12">
        <!-- start: TEXT FIELDS PANEL -->
        <div class="panel panel-default">
            <div class="panel-body">
                {{Form::open(array('route'=>'admin.sliders.store','method'=>'POST','class'=>'form-horizontal','role'=>'form','enctype'=>"multipart/form-data"))}}
                <div class="tabbable">
                    <div class="tab-pane" id="panel_tab2_example2">
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="form-field-1">title</label>
                            <div class="col-sm-9">
                                {{Form::text('title','',array( "placeholder"=>"title", "id"=>"form-field-1", "class"=>"form-control"))}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">picture</label>
                    <div class="col-sm-3">
                        <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden" value="" name="">
                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA?text=no+image" alt="">
                            </div>
                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 10px;"></div>
                            <div>
                            <span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture-o"></i> انتخاب تصویر</span><span class="fileupload-exists"><i class="fa fa-picture-o"></i> ویرایش تصویر</span>
                                <input type="file" name="image" title="image">
                            </span>
                            <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                                <i class="fa fa-times"></i>delete
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <label class="col-sm-2 control-label"></label>
                    {{Form::submit('save',array('class'=>'btn btn-primary'))}}
                </div>
                {{Form::close()}}
            </div>
        </div>
        <!-- end: TEXT FIELDS PANEL -->
    </div>
</div>
@stop
@section('script')
    @parent()
    {{HTML::script('admin_assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js')}}
@stop()