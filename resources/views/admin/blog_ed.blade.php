<head>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href=" {{ asset('bootstrap/css/bootstrap.min.css')}} ">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="{{asset('dist/css/skins/skin-blue.min.css')}}">
        <script src="//cdn.ckeditor.com/4.5.5/standard/ckeditor.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="box box-primary">
                <img src='/img/loading.gif' class="loading" style="display:none" >
                <p class="success" style="display:none" >success</p>
                <div class="box-header with-border">
                  <h3 class="box-title">Quick Example</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                
                
                {!! Form::model($c,['url' => 'site_blog/update/'.$c->id,
                'method' => 'POST', 'class' => 'form-signin', 'id' => 'expenseForm']) !!}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">title</label>
                      {!! Form::text('title',null,['class'=>'form-control email','name'=>'title']) !!}
                    </div>

                    <div class="box-body">
                   
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
  </body>
