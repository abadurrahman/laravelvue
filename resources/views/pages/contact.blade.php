@extends('layouts.app')
@section('content')

<div class="page-head">
	<div class="container">
		<h3>Contact</h3>
	</div>
</div>
<!-- //banner -->
<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="contact-grids">
				<div class="col-md-4 contact-grid text-center animated wow slideInLeft" data-wow-delay=".5s">
					<div class="contact-grid1">
						<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
						<h4>Address</h4>
						<p>12K Street, 45 Building Road <span>New York City.</span></p>
					</div>
				</div>
				<div class="col-md-4 contact-grid text-center animated wow slideInUp" data-wow-delay=".5s">
					<div class="contact-grid2">
						<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
						<h4>Call Us</h4>
						<p>+1234 758 839<span>+1273 748 730</span></p>
					</div>
				</div>
				<div class="col-md-4 contact-grid text-center animated wow slideInRight" data-wow-delay=".5s">
					<div class="contact-grid3">
						<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
						<h4>Email</h4>
						<p><a href="mailto:info@example.com">info@example1.com</a><span><a href="mailto:info@example.com">info@example2.com</a></span></p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="map wow fadeInDown animated" data-wow-delay=".5s">
				<h3 class="tittle">View On Map</h3>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3746984.465708819!2d88.10026026270491!3d23.490583053663357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30adaaed80e18ba7%3A0xf2d28e0c4e1fc6b!2sBangladesh!5e0!3m2!1sen!2sbd!4v1607602897355!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
			<h3 class="tittle">Contact Form</h3>
			<form action="{{ route('store.contact') }}" method="POST">
				@csrf
				<div class="contact-form2">
					<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="" name="name">
					<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="" name="email">
					<textarea type="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="" name="description">Message...</textarea>
					<input type="submit" value="Submit" >
				</div>
			</form>
		</div>
	</div>
	
<!-- //contact -->

@endsection