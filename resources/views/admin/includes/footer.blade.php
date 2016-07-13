@extends('admin.index')
@section('footer')
	<!-- general form elements -->
              <div class="box box-primary">
              	<img src='/img/loading.gif' class="loading" style="display:none" >
                <p class="success" style="display:none" >success</p>
                <div class="box-header with-border">
                  <h3 class="box-title">تنظیم فوتر سایت</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                {!! Form::model($f,['url' => 'footer/update']) !!}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">فوتر</label>
                      {!! Form::textarea('footer',null,['class'=>'form-control ckeditor','name'=>'footer','id'=>'messageArea']) !!}

                    </div>

                  <div class="box-footer">
                  	{!! Form::button('submit',['class' => 'btn btn-primary send-btn',
                    'name'=>'send-btn','onclick' => 'footer_ajax()']) !!}
                  </div>
                {!! Form::close() !!}
              </div><!-- /.box -->
@stop