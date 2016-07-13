@extends('admin.index')
@section('form')

	<!-- general form elements -->

              <div class="box box-primary">
              	<img src='/img/loading.gif' class="loading" style="display:none" >
                <p class="success" style="display:none" >success</p>
                <div class="box-header with-border">
                  <h3 class="box-title">Quick Example</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                {!! Form::model($u,['url' => 'user/update','files' => 'true',
                'method' => 'POST', 'class' => 'form-signin', 'id' => 'expenseForm']) !!}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      {!! Form::text('email',null,['class'=>'form-control email','name'=>'email']) !!}
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      
                      {!! Form::text('password',null,['class'=>'form-control password','name'=>'password']) !!}
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">name</label>
                      
                      {!! Form::text('name',null,['class'=>'form-control password','name'=>'name']) !!}
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                     {!! Form::file('image', null,['class'=>'image','id'=>'image','name'=>'image']) !!}
                      <p class="help-block">Example block-level help text here.</p>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Check me out
                      </label>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                  	{!! Form::button('submit',['class' => 'btn btn-primary send-btn',
                    'name'=>'send-btn','onclick' => 'user()']) !!}
                  </div>
                {!! Form::close() !!}
              </div><!-- /.box -->
@stop
