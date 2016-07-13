@extends('admin.index')
@section('msg')
<!-- timeline time label -->
			<ul class="timeline">
                <li class="time-label">
                  <span class="bg-red">
                  	{{ $time }}
                  </span>
                </li>
        	</ul>
	@foreach($f as $ff)

	<div class="col-md-12">
              <!-- The time line -->
              <ul class="timeline">

                <!-- /.timeline-label -->
                <!-- timeline item -->
                <li>
                  <i class="fa fa-envelope bg-blue"></i>
                  <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i>{{$ff->fa_date}}</span>
                    <h3 class="timeline-header"><a href="#"></a> پیام</h3>
                    <div class="timeline-body">
                      <p>{{ $ff->visitor_name }}</p>
                      <p>{{ $ff->visitor_email }}</p>
                      <p>{{ $ff->visitor_message }}</p>
                    </div>
                    <div class="timeline-footer">
                      <a href="/contact/destroy/{{ $ff->id }}" class="btn btn-danger btn-xs">Delete</a>
                      <a href="/contact/read/{{ $ff->id }}" class="btn btn-danger btn-xs">Read</a>
                    </div>
                  </div>
                </li>
                
              </ul>
            </div>
    @endforeach
@stop