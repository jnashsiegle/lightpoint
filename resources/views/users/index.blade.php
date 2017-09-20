@extends('adminMaster')
@section('title', 'View all users')
@section('content')

	<div class = "container col-md-8 col-md-offset-2">
	<div class = "row-fluid">
		<div class = "panel panel-default">
			<div class = "panel-heading mycontainer">
              <span><a href="/"><img src="/images/logos/boltLogo.png" class = "hidden-xs" alt = "Lightning Road Biker Outreach" /></a></span>
              <span><h1 class = "panel-title text-right">Admin Area</h1></span>
          </div><!--end of panel-heading--> 
        <div class="panel-body">
         <!--breadcrumbs-->
        <nav class="breadcrumb">
           <a class="breadcrumb-item" href="/adminP">Admin Panel / </a>    
           <a class="breadcrumb-item active" href="#">User Listing / </a>     
         </nav>
         <!--end of breadcrumbs-->
				<h2>Users</h2>

			@include('partials.alerts.errors')
			<div class="flash-message">
                      @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                          @if(Session::has('alert-' . $msg))
                          <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                          @endif
                      @endforeach
                    </div> <!-- end .flash-message -->  
			@if ($users->isEmpty())
				<p> There are no users.</p>
			@else
			<div class = "table-responsive">
				<table class = "table table-striped table-bordered">
					<thead>
						<tr>
							<th align = "left">ID</th>
							<th align = "left">Name</th>
							<th align = "left">Email</th>
							<th align = "left">Is Admin</th>
							<th align = "center">Delete User?</th>
						</tr>
					</thead>
					<tbody>
					@foreach($users as $user)
						<tr>
							<td>{!! $user->id !!} </td>
							<td>
							<a href = "{!! action('UsersController@edit', $user->id) !!}">
							{!! $user->name !!} </a></td>
							<td>{!! $user->email !!} </td>
							<td>{!! $user->isAdmin ? 'Yes' : 'No' !!}</td>
						    <td class = "tBtn text-center">
						        {!! Form::open(['method'=>'DELETE', 'id'=>'deletion', 'route'=>['users.destroy',$user->id]]) !!}	
						            <button data-toggle="tooltip" data-placement="top" title="Delete" type="submit" class="btn btn-danger btn-xs" aria-label = "confirm" onclick="return confirm('Are you sure you want to delete this item?');"><span aria-label = "close"> &times;</span></button>
						         {!! Form::close() !!}
						    </td>						 
						</tr>
					@endforeach
					</tbody>
				</table>
			@endif
			</div><!--end of table-responsive-->
		</div><!--end of panel body -->
	</div><!--end of panel panel default-->
	</div><!--end of row fluid-->
</div><!--end of container fluid-->
@endsection