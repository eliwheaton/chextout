@layout('layouts/site_template')


@section('content')

<div class="row">
	<div class="twelve columns">
		<div class="panel radius intro dark-bg">
			<div class="row">
				<div class="six columns">
					<h3>Text reminders for dentists</h3>
					<p>Stop sending postcard reminders that only end up in the trash can.</p>
					<a class="radius button" href="/get-started">Get Started</a>
				</div>
				<div class="six columns">
					{{ HTML::image('img/dental-assistant.jpg', 'assistant') }}
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
					<h3>Reach more patients</h3>
					<p>When you send someone a text message, they receive it immediately. 95% of all text messages that get sent, get read. Postcards usually get thrown out with the junk mail.</p>
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
					<h3>You've got mail? You've got problems</h3>
					<p>Sending out hundreds or even thousands of postcards can add up in postage. Not to mention the large percentage that just get thrown away without being read.</p>
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
					<h3>Easy pricing</h3>
					<p>$29 / month<br />
						1 &cent; / text message<br />
						First month absolutely FREE - Get started today with no obligation!</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- 
<div class="row">
	<div class="twelve columns">
		<div class="panel radius">
			<div class="row">
				<div class="six columns">
					<h3>Text reminders for dentists</h3>
					<p>No more sending postcards that just end up in the trash</p>
				</div>
				<div class="six columns">
					<img src="http://placehold.it/449x250">
				</div>
			</div>
		</div>
	</div>
</div>
 -->
<div class="row">
	<div class="two columns centered">
		<a class="radius button" href="/get-started">Get Started</a>
	</div>
</div>

@endsection
