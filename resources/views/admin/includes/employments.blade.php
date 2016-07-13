@extends('admin.index')
@section('employments')
	<div class="col-xs-12 table-responsive">
              <table class="table table-striped">
                <tbody>
                	@foreach($e as $em)
                  <tr>
                  	<th>code</th>
                    <td>{{ $em->id }}</td>
                    <th>title</th>
                    <td>{{ $em->title }}</td>
                    <th>context</th>
                    <td>{{ $em->context }}</td>
                    <td><a href="/employments/destroy/{{ $em->id }}" class="btn btn-primary btn-block"><b>حذف</b></a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <a href="/employments/create">create</a>
            </div>
@stop