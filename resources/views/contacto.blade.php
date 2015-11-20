@extends('layouts.principal')
@section('content')
	@include('alerts.success')
	<div class="contact-content">
			<div class="top-header span_top">
				<div class="logo">
					<a href="{!!URL::to('/')!!}"><img src="images/logo.png" alt="" /></a>
					<p>Movie Theater</p>
				</div>			
				<div class="clearfix"></div>
			</div>

		<div class="main-contact">
			 <h3 class="head">CONTACT</h3>
			 <p>WE'RE ALWAYS HERE TO HELP YOU</p>
			 <div class="contact-form">
			 	{!!Form::open(['route'=>'mail.store','method'=>'POST'])!!}
					 <div class="col-md-6 contact-left">
						  {!!Form::text('name',null,['placeholder'=>'Nombre'])!!}
					  	  {!!Form::text('email',null,['placeholder'=>'Correo'])!!}
					  </div>
					  <div class="col-md-6 contact-right">
					  	{!!Form::textarea('mensaje',null,['placeholder'=>'Mensaje'])!!}
					 </div>
					 {!!Form::submit('SEND')!!}
					 {!!Form::close()!!}
		     </div>
		</div>
	</div>
@endsection