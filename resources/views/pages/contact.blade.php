<div id = "contact" class = "container-fluid"> <!--Contact section -->
 			<!--Flash Message -->
	<div class="flash-message">
			@foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))
                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    @endif
            @endforeach
    </div> <!-- end .flash-message -->
	   		@include('partials.alerts.errors')

    <div class="well well-small">

        <h3>Contact LightPoint</h3>
                {!! Form::open(['action' => 'ContactController@store']) !!}
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

            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email Address']) !!}
                <span class="text-danger">{{ $errors->first('email') }}</span>
            </div>

            <div class="form-group {{ $errors->has('companyName') ? 'has-error' : '' }}">
                {!! Form::label('companyName', 'Name of Organization or Company:') !!}
                {!! Form::text('companyName', old('companyName'), ['class'=>'form-control', 'placeholder'=>'Enter Company Name']) !!}
                <span class="text-danger">{{ $errors->first('companyName') }}</span>
            </div>

            <div class="form-group custom-controls-stacked">
                <label for="organizationType" class = "control-label">Organization Type </label><br>
                    <div class="radio custom-controls-stacked">
                        {!! Form::radio('organizationType', 'Non-Profit', false,['id' => 'radio1', 'class' => 'custom-control-indicator pull-right']) !!}
                        {!! Form::label('radio1', 'Non-Profit', ['class' => 'custom-control custom-radio']) !!}

                    </div>
                    <div class="radio">

                        {!! Form::radio('organizationType', 'Business', false,['id' => 'radio2', 'class' => 'custom-control-indicator pull-right']) !!}
                         {!! Form::label('radio2', 'Business', ['class' => 'custom-control custom-radio']) !!}
                    </div>
                    <div class="radio">

                        {!! Form::radio('organizationType', 'Individual', true,['id' => 'radio3', 'class' => 'custom-control-indicator pull-right']) !!}
                        <span class="text-danger">{{ $errors->first('organizationType') }}</span>
                        {!! Form::label('radio3', 'Individual', ['class' => 'custom-control custom-radio']) !!}
                    </div>
            </div>

            <div class="form-group {{ $errors->has('url') ? 'has-error' : '' }}">
                {!! Form::label('url', 'URL :') !!}
                {!! Form::text('url', old('url'), ['class'=>'form-control', 'placeholder'=>'Enter the URL of your website. (If you have an existing one.)']) !!}
                <span class="text-danger">{{ $errors->first('url') }}</span>
            </div>

            {{-- One tool to help fight spam --}}
                     <p class="antispam">Leave this empty: <input type="text" name="hello" />
                     </p>

            <div class="form-group {{ $errors->has('note') ? 'has-error' : '' }}">
                <label for="note" class = "control-label">Message: </label>
                {!! Form::textarea('note', old('note'), ['class'=>'form-control', 'id'=>'note', 'placeholder'=>'Enter Message']) !!}
                <span class="text-danger">{{ $errors->first('note') }}</span>
            </div>


            <div class="form-group">
                <input type="submit" class="bttn" name = "submitEmail" value="Send message">
            </div>
             {!! Form::close() !!}
    </div><!--end well large-->
</div><!--container-fluid-->
