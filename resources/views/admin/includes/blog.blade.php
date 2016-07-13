@extends ('admin.index')
	@section('blog')
<div class="row">
  <script type="text/javascript">
         CKEDITOR.replace( 'messageArea',
         {
          customConfig : 'config.js',
          toolbar : 'simple'
          })
</script> 
	<div class="col-md-3 col-sm-6 col-xs-12">
             
            </div>
		<!-- general form elements -->
              <div class="box box-primary">
              	<img src='/img/loading.gif' class="loading" style="display:none" >
                <p class="success" style="display:none" >success</p>
                <div class="box-header with-border">
                  <h3 class="box-title">تنظیم فوتر سایت</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                {!! Form::model($e,['url' => 'category/create']) !!}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">فوتر</label>
                      {!! Form::text('name',null,['class'=>'form-control email','name'=>'name']) !!}
                    </div>

                  <div class="box-footer">
                  	{!! Form::submit('submit',['class' => 'btn btn-primary send-btn',
                    'name'=>'send-btn']) !!}
                  </div>
                {!! Form::close() !!}
              </div><!-- /.box -->
               <table class="table table-striped">
                <tbody>
                	@foreach( $e as $ee)
                  <tr>
                  	<script type="text/javascript">
                  		function a(n,id)
                  		{
                  			var c=n;
                  			var n=prompt('enter: ');
                  			$('#name'+c).html(n);
                  			var id=$('#name'+c).attr('name');

                  			ajax(n,id);
                  			
                  		}
                  		function ajax(n,id)
                  		{
                  			
                  			var name=n;
                  			var code=id;
                  			                  			alert(code);

                  			$.ajax({
                  				url: '/category/update',
                  				type: 'GET',
                  				data: {'name': name,'code':code},
                  			})
                  			.done(function(data) {
                  				console.log("success");
                  			})
                  			.fail(function() {
                  				console.log("error");
                  			})
                  			.always(function() {
                  				console.log("complete");
                  			});
                  			
                  		}
                      

                  	</script>
                  	<th>code</th>
                    <td><p id='code{{$ee->id}}'>{{$ee->id}}</p></td>
                    <th>title</th>
                    <td onclick='var n=$(this).text(); a(n);'><p id='name{{$ee->name}}' name='{{$ee->id}}'>{{$ee->name}}</p></td>
                    <td><a href="/category/destroy/{{$ee->id}}" class="btn btn-primary btn-block"><b>حذف</b></a></td>
                    <td ><a href="#" class="btn btn-primary btn-block"><b>ویرایش</b></a></td>
                    @endforeach
                  </tr>
                </tbody>
              </table>

    </div>

</div>

<!-- general form elements -->


<?php echo $b->render(); ?>
              <div class="box box-primary">
                <img src='/img/loading.gif' class="loading" style="display:none" >
                <p class="success" style="display:none" >success</p>
                <div class="box-header with-border">
                  <h3 class="box-title">Quick Example</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                {!! Form::model('em',['url' => 'site_blog/create',
                'method' => 'POST', 'class' => 'form-signin', 'id' => 'expenseForm']) !!}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">title</label>
                      {!! Form::text('title',null,['class'=>'form-control email','name'=>'title']) !!}
                    </div>

                    <div class="box-body">
                    <div class="form-group">
                      
                      <label for="exampleInputEmail1">title</label>

                    {!! Form::select('item_id',$items,null, ['class' => 'form-control','name'=>'item_id','value'=>'decfvfvfv']) !!}
                    </div>
               
                    

                    <div class="form-group">
                      <label for="exampleInputPassword1">context</label>
                      
                      {!! Form::textarea('content',null,['class'=>'form-control ckeditor','name'=>'messageArea','id'=>'messageArea','rows'=>'7']) !!}
                      
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
