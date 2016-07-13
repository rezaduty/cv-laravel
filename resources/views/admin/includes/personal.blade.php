@extends('admin.index')
@section('personal')
	!-- general form elements -->

              <div class="box box-primary">
              	<img src='/img/loading.gif' class="loading" style="display:none" >
                <p class="success" style="display:none" >success</p>
                <div class="box-header with-border">
                  <h3 class="box-title">Quick Example</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                {!! Form::model($per,['url' => 'about/edit','files'=>true,
                'method' => 'POST', 'class' => 'form-signin', 'id' => 'expenseForm']) !!}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">name</label>
                      {!! Form::text('name',null,['class'=>'form-control email','name'=>'name']) !!}
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">birthday</label>
                      
                      {!! Form::text('birthday',null,['class'=>'form-control password','name'=>'birthday']) !!}
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">email</label>
                      
                      {!! Form::text('email',null,['class'=>'form-control password','name'=>'email']) !!}
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">website</label>
                      
                      {!! Form::text('website',null,['class'=>'form-control password','name'=>'website']) !!}
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">phone</label>
                      
                      {!! Form::text('phone',null,['class'=>'form-control password','name'=>'phone']) !!}
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">address</label>
                      
                      {!! Form::text('address',null,['class'=>'form-control password','name'=>'address']) !!}
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">context</label>
                      
                      {!! Form::textarea('context',null,['class'=>'form-control ckeditor','name'=>'context','id'=>'messageArea']) !!}
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">tesimonials</label>
                      
                      {!! Form::textarea('testimonials',null,['class'=>'form-control ckeditor','name'=>'testimonials','id'=>'messageArea']) !!}



                    </div>

                     <div class="form-group">
                      <label for="exampleInputPassword1">tesimonials</label>
                      
                      {!! Form::file('image',null,['class'=>'form-control password','name'=>'image']) !!}



                    </div>
                    

                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Check me out
                      </label>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                  	{!! Form::submit('submit',['class' => 'btn btn-primary send-btn',
                    'name'=>'send-btn']) !!}
                  </div>
                {!! Form::close() !!}
              </div><!-- /.box -->
@stop