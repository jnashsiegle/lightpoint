<div class="container-fluid">
      <div class="row-fluid">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading mycontainer">
                  <span><h1 class = "panel-title text-right">Admin Area</h1></span>
              </div><!--end of panel-heading-->
            <div class="panel-body">
                <div class="flash-message">
                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has('alert-' . $msg))
                            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                        @endif
                    @endforeach
                </div> <!-- end .flash-message -->
           <h3 class = "text-center">Welcome {{-- {{ Auth::user()->name }} --}} to your Admin Panel.</h3>
      <hr />
              <div class = "col-md-4 well">
                  <h4>Administrator Access Only</h4>
                  <ul>
                      <li class = "first"><a href="#" data-toggle="modal" data-target="#registerModal">Add New Client</a></li>
                      <li> <a href = "#{{-- users/ --}}">List of clients</a></li>
                  </ul>
              </div>
              <div class = "col-md-4  col-md-offset-4 well">
                  <h4>Authorized User &amp; Administrator Access</h4>
              </div>
              <a class = "btn btn-large btn-info  btn-close  pull-right" href ="#{{-- /auth/logout --}}"> Logout </a>
          </div><!--end of panel body-->
      </div><!--end of panel panel default-->
    </div><!--end of col-md-8 col-md-offset-2-->
  </div><!--end of row-->

<!--login Modal-->
                    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModal" aria-hidden="true" style="display: none;">
                      <div class="modal-dialog">
                          <div class="registerModal-container">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            @include('auth.register')
                          </div><!--end clientmodal-container">-->
                        </div><!--end modal-dialog-->
                      </div><!--end modal fade -->
 </div><!--end container-->

{{--  check for a failed login and re-show the login modal--}}
  <script>
    @if(old('modal'))
      $(window).load(function(){
        $('#{{ old('modal') }}').modal('show');
      });
    @else

      <?php
        if (isset($modal)) {
            echo '$(window).load(function(){$("#' . $modal . '").modal(\'show\');});';
        }
      ?>

    @endif
  </script>
