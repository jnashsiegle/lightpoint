@extends('admin.adminMaster')
@section ('title', 'Client Panel')

@section('content')
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading mycontainer">
              <span><h1 class = "panel-title text-right">Client Area</h1></span>
          </div><!--end of panel-heading-->
        <div class="panel-body">
        <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))
                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    @endif
                @endforeach
              </div> <!-- end .flash-message -->

           <h3 class = "text-center">Welcome {{-- {{ Auth::user()->name }} --}} to your Account Panel.</h3>
          <hr>
           <div class = "col-md-4 well">
             <h4>Project Status</h4>
             <ul>
            <li> <a href ="#{{-- auth/register --}}" > Add a new service</a> </li>
            <li> <a href = "#{{-- users/ --}}">List of services</a></li>
            </ul>
          </div>
            <a class = "btn btn-large btn-info  btn-close  pull-right" href ="#{{-- /auth/logout --}}"> Logout </a>
          </div><!--end of panel body-->
        </div><!--end of panel panel default-->
      </div><!--end of col-md-8 col-md-offset-2-->
    </div><!--end of row-->
  </div><!--end container-->

@endsection<!--end of login-->
