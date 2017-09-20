<div id = "register" class="container-fluid">
    <div class="flash-message">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has('alert-' . $msg))
                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                        @endif
                @endforeach
    </div> <!-- end .flash-message -->
    @include('partials.alerts.errors')
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Add New Client</div>
                <div class="panel-body">
                    {!! Form::open(['action' => 'Auth\RegisterController@register']) !!}
                        {!! csrf_field() !!}
                        <div class="form-group {{ $errors->has('firstName') ? 'has-error' : '' }}">
                            {!! Form::label('firstName', 'First Name:', ['class' => 'control-label']) !!}
                                {!! Form::text('firstName', old('firstName'), ['class'=>'form-control', 'placeholder'=>'Enter First Name']) !!}
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div><!--end of form group -->
                        <div class="form-group {{ $errors->has('lastName') ? 'has-error' : '' }}">
                            {!! Form::label('lastName', 'Last Name:', ['class' => 'control-label']) !!}
                                {!! Form::text('lastName', old('lastName'), ['class'=>'form-control', 'placeholder'=>'Enter Last Name']) !!}
                                <span class="text-danger">{{ $errors->first('lastName') }}</span>
                        </div><!--end of form group -->
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
                                {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email Address']) !!}
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div><!--end of form group -->
                        <div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
                            {!! Form::label('username', 'Username:', ['class' => 'control-label']) !!}
                                {!! Form::text('username', old('username'), ['class'=>'form-control', 'placeholder'=>'Enter Username']) !!}
                                <span class="text-danger">{{ $errors->first('username') }}</span>
                        </div><!--end of form group -->
                        {{-- <div class="form-group">
                            {!! Form::label('isAdmin', 'Is Administrator:', ['class' => 'control-label']) !!}
                                {!! Form::checkbox('isAdmin[]',0, false), old('isAdmin') !!}
                        </div>--}}<!--end of form group-->
                        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                            {!! Form::label('password', 'Password:', ['class' => 'control-label']) !!}
                                {!! Form::text('password', null, ['class'=>'form-control', 'placeholder'=>'Enter Password']) !!}
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                        </div><!--end of form group-->
                        <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                            {!! Form::label('password_confirmation', 'Confirm Password:', ['class' => 'control-label']) !!}
                                {!! Form::text('password_confirmation', null, ['class'=>'form-control', 'placeholder'=>'Confirm Password']) !!}
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                        </div><!--end of form group -->
                <hr />
                <div class = "h2">Personal Information</div>
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            {!! Form::label('phone', 'Phone:', ['class' => 'control-label']) !!}
                                {!! Form::text('phone', old('phone'), ['class'=>'form-control', 'placeholder'=>'Phone']) !!}
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                        </div><!--end form group -->
                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            {!! Form::label('address', 'Street Address:', ['class' => 'control-label']) !!}
                                {!! Form::text('address', old('address'), ['class'=>'form-control', 'placeholder'=>'Street Address']) !!}
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                        </div><!-- end form-group-->
                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            {!! Form::label('city', 'City:', ['class' => 'control-label']) !!}
                                {!! Form::text('city', old('city'),['class'=>'form-control', 'placeholder'=>'City']) !!}
                                        <span class="text-danger">{{ $errors->first('city') }}</span>
                        </div><!-- end form group -->
                        <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                            {!! Form::label('state', 'State:', ['class' => 'control-label']) !!}
                                {!! Form::text('state', old('state'), ['class'=>'form-control', 'placeholder'=>'State']) !!}
                                <span class="text-danger">{{ $errors->first('state') }}</span>
                        </div><!-- end form group -->
                        <div class="form-group{{ $errors->has('zipcode') ? ' has-error' : '' }}">
                            {!! Form::label('zipcode', 'ZipCode:', ['class' => 'control-label']) !!}
                                {!! Form::text('zipcode', old('zipcode'),['class'=>'form-control', 'placeholder'=>'ZipCode']) !!}
                                        <span class="text-danger">{{ $errors->first('zipcode') }}</span>
                        </div><!--end form group-->
                        <div class="form-group">
                            <div class="col-md-6 pull-right">
                                <a {{-- class = "pull-right --}} href="{{ URL::previous() }}">Cancel</a>
                                    <input type="submit" class="bttn" name = "submitEmail" value="SUBMIT">
                            </div><!--end col-md-6 pull-right -->
                            </div><!-- end form group -->
                     {!! Form::close() !!}
                </div><!-- end panel body -->
        </div><!-- end panel default -->
    </div><!-- end row -->
</div><!--end of register | container-->
