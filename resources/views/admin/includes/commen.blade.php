@extends('admin.index')
@section('commen')
<!-- timeline time label -->
			<ul class="timeline">
                <li class="time-label">
                  <span class="bg-red">
                  	{{ $time }}
                  </span>
                </li>
        	</ul>
	@foreach($commn as $com)

	<div class="col-md-12">
              <!-- The time line -->
              <ul class="timeline">

                <!-- /.timeline-label -->
                <!-- timeline item -->
                <li>
                  <i class="fa fa-envelope bg-blue"></i>
                  <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i>{{$com->date}}</span>
                    @foreach($e as $a)
                    
                    <p>@if($com->type==$a->id)
                        {{$a->title}}
                      @endif

                    </p>
                    @endforeach
                    <h3 class="timeline-header"><a href="#"></a> @if ($com->reading==1)
                      خوانده شده
                      @else
                        خوانده نشده
                      @endif</h3>
                    <div class="timeline-body">
                      <p>{{ $com->name }}</p>
                      <p>{{ $com->commn }}</p>
                      <p>{{ $com->read }}</p>
                    </div>
                    <div class="timeline-footer">
                      <a href="/comment/destroy/{{ $com->id }}" class="btn btn-danger btn-xs">Delete</a>
                      <a href="/comment/read/{{ $com->id }}" class="btn btn-danger btn-xs">Read</a>
                    </div>
                  </div>
                </li>
                
              </ul>
            </div>
    @endforeach

@stop