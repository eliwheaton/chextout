@layout('layouts/site_template')

@section('content')

<div class="row">
	<div class="seven columns centered">
		<div class="panel radius">
			<h2>Thank you for your interest in Chextout!</h2>
			<p></p>
			{{ Form::open('register') }}
				<input type="text" name="email" value="{{ Input::old('email') }}" placeholder="Email" @if ($errors->has('email')) class="error" @endif />
				@if ($errors->has('email'))
					<small class="error">{{ $errors->first('email') }}</small>
				@endif
				<input type="text" name="first_name" value="{{ Input::old('first_name') }}" placeholder="First Name (optional)" />
				<input type="text" name="last_name" value="{{ Input::old('last_name') }}" placeholder="Last Name (optional)" />
				<input type="text" name="company" value="{{ Input::old('company') }}" placeholder="Company (optional)" />
				<input type="text" name="phone" value="{{ Input::old('phone') }}" placeholder="Phone Number (optional)" />
				
				<input type="submit" class="button radius" name="submit" value="Submit" />
			</form>
		</div>
	</div>
</div>

@endsection