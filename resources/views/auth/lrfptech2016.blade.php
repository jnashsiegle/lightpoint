@extends('adminMaster')
@section ('title', 'login')

@section('content')
	
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading mycontainer"> 
              <span><a href="/"><img src="/images/logos/boltLogo.png" alt = "Lightning Road Biker Outreach" /></a></span>

              <h1 class = "panel-title text-right">Admin</h1>
          </div><!--end of panel-heading-->
        <div class="panel-body">
           <h3 class = "text-center">Welcome to your Administrative Area.</h3>
           <h4 class = "text-center">Please Log In.</h4>           
            <form id = "login-form" name = "login" method="POST"
                  action="{{ url('/auth/login') }}">
                  @include('partials.alerts.errors')
                  {!! csrf_field() !!}

               <div class="row-fluid">                
                    <div class="form-group col-md-12 column">
                        <label for="email" class = "control-label">Your email</label>
                        <input id="email" type="email" name="email" class="form-control" placeholder="Email Address *">
                    </div><!--end of form-group-->
               {{--  </div>   --}}          
            </div><!--end of row-->

                <div class = "row-fluid">             
                    <div class="form-group col-md-12 column">
                        <label for="password" class = "control-label"> Your password *</label><span class = "text-muted pull-right"><a href = "/password/email">Forgot Your Password?</a></span>
                        <input id="password" type="password" name="password" class="form-control" placeholder="Enter password *" >
                    </div><!--end of form-group-->                    
              </div><!--end of row-->
          
                <div class = "row-fluid">               
                  <div class="col-md-12 column">
                    <label>
                      <input type="checkbox" name="remember" id = "remember"> Remember me
                    </label>
                  </div><!--end of col-md-12-->
                </div><!--end row fluid...-->

               <div class = "row-fluid">                
                  <div class = "col-md-12 column">
                  <button type="submit" id = "sBtn" class="btn btn-default">Log In</button>
                </div><!--end of col-md-12-->
              </div><!--end row fluid--> 

            </form><!--end of form-->
          </div><!--end of panel body-->
        </div><!--end of panel panel default-->
      </div><!--end of col-md-8 col-md-offset-2-->
    </div><!--end of row-->
  </div><!--end of container fluid-->
	
@endsection