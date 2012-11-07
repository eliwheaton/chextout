@layout('layouts/site_template')

@section('content')

<div class="row">
	<div class="seven columns centered">
		<div class="panel radius">
			<h2>Thank you for your interest in Chextout!</h2>
			<p>Currently we are only accepting new clients on an invite-only basis. If you'd like to get on our invite
				list, please fill out the form below and we'll let you know when you can create an account. Expected notification time is 1-2 weeks.
			</p>
			<p>The only required field below is an email address where we can send your invite, everything else is optional. Of course none of the information you provide
				will ever be sold or shared, as stated in our {{ HTML::link('/privacy-policy', 'privacy policy') }}.<br />Thanks again!</p>
			{{ Form::open('get-started') }}
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