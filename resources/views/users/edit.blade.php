@extends('adminMaster')
@section('title', 'Edit a user')
@section('content')
	<div class="container-fluid">
    <div class="row-fluid col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading mycontainer"> 
              <span><a href="/"><img src="/images/logos/boltLogo.png" class = "hidden-xs" alt = "Lightning Road Biker Outreach" class = "hidden-xs" /></a></span>
              <span><h1 class = "panel-title text-right"><a href = "/adminP">Admin Area</a></h1></span>
          </div><!--end of panel-heading-->
		{{-- <div class ="well well bs-component">  --}}
			<div class="panel-body">
				<form class ="form-horizontal" data-toggle = "validator" method ="post" action="{{action('UsersController@update', $user->id) }}"> 
					@include('partials.alerts.errors')
					<div class="flash-message">
		                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
		                    @if(Session::has('alert-' . $msg))

		                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
		                    @endif
		                @endforeach
              		</div> <!-- end .flash-message -->	
					{!! csrf_field() !!} 
       
			<fieldset>
				<legend>Edit user</legend>	
					<div class = "row-fluid  col-md-12 column">
						<div class = "form-group">
						<label for = "name" class = "control-label">Name</label>	
							<input type = "text" class = "form-control" id = "name" placeholder = "name" name = "name" value = "{!! $user->name !!}">
							<div class="help-block with-errors"></div>
							</div><!--end of form group-->
					</div><!--end of row fluid-->
					<div class = "row-fluid  col-md-12 column">
						<div class = "form-group">
						<label for "email" class = "control-label">Email</label>
						<input type = "email" class = "form-control" id = "email" placeholder = "email" name = "email" value = "{!! $user->email !!}">
						<div class="help-block with-errors"></div>
						</div><!--end of form group-->
					</div>	<!--end of row fluid-->
					<div class = "row-fluid  col-md-12">
						<div class = "form-group">
						<label for "isAdmin" class = "control-label">Is Admin?</label>
						{{ Form::checkbox('isAdmin',null, $user->isAdmin) }}
						<div class="help-block with-errors"></div>
						</div>
						<hr>
					</div><!--end of row fluid -->
					<div class = "row-fluid  col-md-12">
						<div class = "form-group btnGroup">	
						{{ method_field('PATCH') }}
							<a href="{{ URL('users') }}" class="btn btn-info btn-close">Back</a>
							<button type = "submit" class = "btn btn-default btn-send pull-right">Update</button>
						</div><!--end of form group-->
					</div><!--end row fluid colmd12-->
				</fieldset>
			</form>			
		</div><!--end of panel body-->
	</div><!--panel panel default-->
</div><!--end of row fluid top -->
</div> <!--end of container-->
@endsection