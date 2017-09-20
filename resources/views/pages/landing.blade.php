@section('content')
<div id = "landing" class = "container-fluid">
<!--Flash Message -->
    <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))
                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    @endif
            @endforeach
    </div> <!-- end .flash-message -->
            @include('partials.alerts.errors')
    <div class = "row-fluid">
                <h1 class = "text-center col-sm-12">Your Online Solution Awaits!</h1>
    </div>
    <div class = "row-fluid">
                <p class = "text-center col-sm-12">Let us breathe life into your online vision.</p>
    </div><!--end row fluid -->
        <div id = "announce" class = "container">
            <ul class = "hidden-sm-down col-md-6">
                <li class = "h3">Web Design</li>
                <li class = "h3">Web Development</li>
                <li class = "h3">MicroSites</li>
                <li class = "h3">SEO Optimization</li>
                <li class = "h3">Logo Design</li>
            </ul>
            <div class = "hidden-sm-down col-md-6 text-center">
                <h4><span id = "lanContact">Contact Us Now!</span></h4>
            </div>
                <div class = "hidden-sm-down col-md-6">
                {!! Form::open(['action' => 'ContactLandingController@store', 'class'=>'formLanding pull-right' ]) !!}
                        {{ csrf_field() }}
                    <div class="form-group {{ $errors->has('firstName') ? 'has-error' : '' }}">
                        {!! Form::label('firstName', 'First Name:') !!}
                        {!! Form::text('firstName', old('firstName'), ['class'=>'form-control', 'placeholder'=>'Enter First Name']) !!}
                    <span class="text-danger">{{ $errors->first('firstName') }}</span>
                    </div>

                    <div class="form-group {{ $errors->has('lastName') ? 'has-error' : '' }}">
                        {!! Form::label('lastName', 'Last Name:') !!}
                        {!! Form::text('lastName', old('lastName'), ['class'=>'form-control', 'placeholder'=>'Enter Last Name']) !!}
                        <span class="text-danger">{{ $errors->first('lastName') }}</span>
                    </div>

                    <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                            <label for="phone" class = "control-label">Phone: </label>
                            {!! Form::text('phone', old('phone'), ['class'=>'form-control', 'id'=>'phone', 'placeholder'=>'xxx-xxx-xxxx']) !!}
                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                    </div>

                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label for="email" class = "control-label">Email: </label>
                            {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Email']) !!}
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    </div>
                        {{-- One tool to help fight spam --}}
                                 <p class="antispam">Leave this empty: <input type="text" name="hello" />
                                 </p>

                    <div class="form-group {{ $errors->has('note') ? 'has-error' : '' }}">
                            <label for="note" class = "control-label">Message: </label>
                            {!! Form::textarea('note', old('note'),  ['class'=>'form-control', 'rows' => '2', 'cols' => '10','id'=>'phone', 'placeholder'=>'Enter a Brief Message']) !!}
                        <span class="text-danger">{{ $errors->first('note') }}</span>
                    </div>

                    <div class="form-group">
                            <input type="submit" class="bttn pull-right" name = "submitEmail" value="SUBMIT">
                    </div>
                {!! Form::close() !!}
            </div> <!--hidden-sm-down col-md-6-->


             <!--Form for smaller devices -->
            <!--hidden-md-up col-md-12 (smaller devices form)-->
        </div> <!--end id = "announce" class = "container -->

        <div class = "hidden-md-up text-center">
            <div class = "row-fluid">
                <div class = "col-sm-4">
                    <ul>
                        <li>Websites / Web Applications</li>
                        <li>Personalized Attention</li>
                    </ul>
                </div> <!--end col-sm-4-->
                <div class = "col-sm-4">
                    <ul>
                        <li>Custom Builds\Pricing\Design</li>
                        <li>SEO Optimization</li>
                    </ul>
                </div>  <!--end col-sm-4-->
                <div class = "col-sm-4">
                    <ul>
                        <li>Logo Design</li>
                        <li>Domain Registration\Hosting</li>
                    </ul>
                </div>  <!--end col-sm-4-->
            </div> <!--end row -->
        </div> <!-- hidden-md-down row-fluid text-center align-middle col-sm-12 -->
</div><!--end of container-fluid-->
<!--end of Landing-->
