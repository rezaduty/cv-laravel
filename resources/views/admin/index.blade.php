<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AdminLTE 2 | Starter</title>
    <script src="//cdn.ckeditor.com/4.5.5/standard/ckeditor.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!--<script src="{{ asset('dist/js/jquery.flot.min.js') }}"></script>
    <script src="{{ asset('dist/js/jquery.flot.pie.min.js') }}"></script>-->


    <script type="text/javascript">
      
    /*function user()
        {
          
          $('.send-btn').click(function(){
             
            $(document).ajaxStart(function() {
                $('.loading').show(); // show the gif image when ajax starts
            }).ajaxStop(function() {
                $('.loading').hide(); // hide the gif image when ajax completes
            });  
                     
            $.ajax({
              url: '/user/update',
              type: "POST",
              data: $('form#expenseForm').serialize(),
              success: function(data){
                $('.success').show();
                alert(data)
              },
              error: function(data){
               $('.success').html('faild'); 
               $('.success').show();
              }
            });      
          });
        }*/
        function user()
        {
          
          $('.send-btn').click(function(){
             
            $(document).ajaxStart(function() {
                $('.loading').show(); // show the gif image when ajax starts
            }).ajaxStop(function() {
                $('.loading').hide(); // hide the gif image when ajax completes
            });  
            var filename = $('input[type=file]').val().split('\\').pop();
            var d=$('form#expenseForm').serialize()+'&filename='+filename;
            $.ajax({
              url: '/user/update',
              type: "POST",
              data: d,
              success: function(data){
                $('.success').show();
              },
              error: function(data){
               $('.success').html('faild'); 
               $('.success').show();
              },
              processData: false,

            });      
          });


        }
        function footer_ajax()
        {
          $('.send-btn').click(function(){
            $(document).ajaxStart(function() {
                $('.loading').show(); // show the gif image when ajax starts
            }).ajaxStop(function() {
                $('.success').show();
                $('.loading').hide(); // hide the gif image when ajax completes
            });  
            $.ajax({
              url: '/footer/update',
              type: "POST",
              data: {'footer':$('input[name=footer]').val(), '_token': $('input[name=_token]').val()},
              success: function(data){
                
              }
            });      
          });
        }
        
      
    </script>

    <script type="text/javascript">
      $.ajaxSetup({
         headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
      });
    </script>


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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">

    </style>

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      

      <!-- Main Header -->
      @include ('admin.includes.header')
      


<!-- Left side column. contains the logo and sidebar -->
      

  @include ('admin.includes.sidebar')
  
  




          


          <!-- Your Page Content Here -->

          <!-- /.content -->
        <!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
       @yield('form')
       @yield('footer')
       @yield('msg')
       @yield('commen')
       @yield('personal')
       @yield('employments')
       @yield('education')
       @yield('blog')

@include ('admin.includes.map')       
        <!-- Default to the left -->
        <strong>Copyright &copy; 2015 <a href="#"></a>.</strong> .
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane active" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">وضیعت پروژه</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="/down" class="btn btn-primary btn-block margin-bottom">خاموش کردن سایت</a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">وضیعت شیستم</h3>
            <ul class="control-sidebar-menu">
              <li>
                
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    میزان مصرف ram
                    <span class="label label-danger pull-right">{{round(memory_get_peak_usage(1)/200000)}}%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: {{round(memory_get_peak_usage(1)/200000)}}%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    
                    <script type="text/javascript">
                  $(document).ready(function(){
                    var a='';
                    setInterval(function(){
                      <? $a=sys_getloadavg()?>
                     a=<? echo $a[1]; ?>;
                     $('#cpu').fadeOut();
                     $('#cpu').html('<p>'+a+'%</p>');
                     $('#c_pro').css('width',a+'%');
                     $('#cpu').fadeIn();
                   }, 3000);
                });
                </script>
                    میزان مصرف cpu
                    <span id='cpu' class="label label-danger pull-right"><? echo $a[1]; ?>%</span>
                  </h4>
                  <div class="progress progress-xxs"> 
                    <div id='c_pro' class="progress-bar progress-bar-danger" style="width: <? echo $a[1]*10;?>%"></div>
                  </div>
                </a>
              </li>
              <li>
                
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <ul class="control-sidebar-menu">
              <li>
                <p class="control-sidebar-subheading">
                  Path to the 'app' folder
                  <font size="-2">{!!app_path()!!}</font>
                </p>
              </li>
              <li>
                  <p class="control-sidebar-subheading">
                    Path to the 'public' folder
                   <font size="-2">{{public_path()}}</font>
                  </p>
              </li>
              <li>
                  <p class="control-sidebar-subheading">
                    Path to the 'app/storage' folder
                    <font size="-2">{{storage_path()}}</font>
                  </p>                  
              </li>
            </ul><!-- /.control-sidebar-menu -->
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="{{asset('plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/app.min.js')}}"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
  </body>
</html>
 
