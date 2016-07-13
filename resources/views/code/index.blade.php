@extends('code.mas_code')

@section('right_menu')
		<!-- Social Icons(Used for mobile) -->
			<div class="social_icons mobile">
			<ul>
				<li>
					<a href="#home" class="twitter">صفحه اول<i class="fa fa-twitter"></i></a>
				</li>
				
				<li>
					<a href="#blog" class="google-plus">بلاگ<i class="fa fa-google-plus"></i></a>
				</li>
				<li>
					<a href="#resume" class="linkedin">رزومه<i class="fa fa-linkedin-square"></i></a>
				</li>
				<li>
					<a href="#contact" class="github">تماس<i class="fa fa-github"></i></a>
				</li>
				<li>
					<a href="#about" class="youtube">درباره<i class="fa fa-youtube"></i></a>
				</li>
			</ul>
		</div>
		<!-- /Social -->
@stop

@section('contact')
	<!-- Contact Page -->
				<div id="contact">
					
					<h1 class="title color">تماس</h1>

					<!-- Description -->
					<p>
						لطفا ار بخش زیر برای تماس استفاده کنید
						@foreach ($contact as $c)
								
							@endforeach
						
					</p>
					<!-- /Description -->

					<!-- Google Map -->
					<div id="gmap"></div>
					<!-- /Google Map -->


					<!-- Contact Form -->
					<div class="contact_form_outer">
						<p class='success' style="display:none;">موفقیت</p>
						<h1 class="title color">ارتباط</h1>
						<p>
							{{ $c->context }}
						</p>
						<div class="contact_form">
							{!! Form::open( array( 'url' => 'contact/create/','id'=>'expenseForm' ) ) !!}
							{!! Form::text('name',null,['name'=>'name','class'=>'name','placeholder'=>'نام']) !!}
							{!! Form::text('email',null,['name'=>'email','class'=>'email','placeholder'=>'ایمیل']) !!}
							{!! Form::textarea('message',null,['name'=>'message','class'=>'message','placeholder'=>'پیام']) !!}
							{!! Form::button('ثبت',['name'=>'submit','class'=>'btn send_message_btn send-btn','onclick'=>'contact_save()']) !!}
							<span class="message"></span>
							{!! Form::close() !!}
						</div>
					</div>
					<!-- /Contact Form -->

				
				</div>
				<!-- /Contact Page -->
@stop

@section ('education')
	@foreach($education as $e)
	@endforeach
	<div class="item">
									<div class="title">{{$e->title}}</div>
									<div class="subtitle"><span class="date_text">{{$e->date}}</span>&bull;<span class="name">{{ $e->user }}</span></div>
									<div class="text">
										{!!$e->context!!}
									</div>
								</div>
								
								

@stop
@section('employment')
	@foreach($employment as $em)

	<div class="item">
									<div class="title">{{ $em->title }}</div>
									<div class="subtitle"><span class="date">{{ $em->date }}</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="name">
										{{ $em->company_name }}
									</span>
									<span class="name">
										{!!$em->context!!}
									</span>
								</div>
									
								</div>
	@endforeach
@stop
@section('about')
	@foreach($about as $ab)
	@endforeach
	<!-- Personal Details -->



							<div class="personal_details">
								<div class="item title">
									<div class="icon"><i class="fa fa-user"></i><span>نام</span></div>
									<div class="text  about_left">{{ $ab->name }}</div>
									<div class="clear"></div>
								</div>
								<div class="item title">
									<div class="icon"><i class="fa fa-calendar"></i><span>متولد</span></div>
									<div class="text about_left">{{ $ab->birthday }}</div>
									<div class="clear"></div>
								</div>
								<div class="item title">
									<div class="icon"><i class="fa fa-map-marker"></i><span>ادرس</span></div>
									<div class="text about_left">{{ $ab->address }}</div>
									<div class="clear"></div>
								</div>
								<div class="item title">
									<div class="icon"><i class="fa fa-mobile"></i><span>شماره تلفن</span></div>
									<div class="text about_left">{{ $ab->phone }}</div>
									<div class="clear"></div>
								</div>
								<div class="item title">
									<div class="icon"><i class="fa fa-envelope"></i><span>ایمیل</span></div>
									<div class="text about_left">{{ $ab->email }}</div>
									<div class="clear"></div>
								</div>
								<div class="item title">
									<div class="icon"><i class="fa fa-external-link"></i><span>وبسایت</span></div>
									<div class="text about_left"><a href="#">{{ $ab->website }}</a></div>
									<div class="clear"></div>
								</div>
							</div>
							<!-- /Personal Details -->

						</div>
						<!-- /Who i am -->

						<!-- What i do -->
						<div class="box what_i_do" style="width: 307%;">
							<div class="title">
								<div class="icon"><i class="fa fa-certificate"></i></div>
								<div class="text">درباره</div>
								<div class="clear"></div>
							</div>
							<div class="text">
								{!! $ab->context !!}
							</div>
						</div>
						<!-- /What i do -->
						
@stop
@section('footer')
<div class="footer">
		<p>{{ $ab->footer }}</p>
</div>
	<!-- /Footer -->
@stop
