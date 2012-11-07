@layout('layouts/site_template')


@section('content')

<div class="row">
	<div class="twelve columns">
		<div class="panel radius intro dark-bg">
			<div class="row">
				<div class="six columns">
					<h3>Let Your Customers Make A Purchase Via Text Message</h3>
					<p>A faster way for your loyal customers to make a purchase.</p>
					<a class="radius button" href="/get-started">Get Started</a>
				</div>
				<div class="six columns">
					<img src="http://placehold.it/449x250" />
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="twelve columns">
		<div class="panel radius">
			<div class="row">
				<div class="six columns">
					{{ HTML::image('img/target-businessman.jpg', 'businessman') }}
				</div>
				<div class="six columns">
					<h3>Increase sales</h3>
					<p>Vip customers will love it.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="twelve columns">
		<div class="panel radius">
			<div class="row">
				<div class="six columns">
					<h3>The Old Way Is Old...</h3>
					<p>9 Million users with smart phones.</p>
				</div>
				<div class="six columns">
					{{ HTML::image('img/letters.jpg', 'letters') }}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="twelve columns">
		<div class="panel radius">
			<div class="row">
				<div class="six columns">
					{{ HTML::image('img/dollars-and-cents.jpg', 'change') }}
				</div>
				<div class="six columns">
					<h3>Affordable pricing</h3>
					<p>$49 / month<br />
						100 free messages<br />
						First month absolutely FREE - Get started today with no obligation!</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="two columns centered">
		<a class="radius button" href="/get-started">Get Started</a>
	</div>
</div>

@endsection
