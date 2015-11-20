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
			 <h3 class="head">Reestablecer contraseña</h3>
			 <p>Estamos aqui para ayudarte</p>
			 <div class="contact-form">
			 	{!!Form::open(['url' => '/password/email'])!!}
					 <div class="col-md-6 contact-left">
					  	  {!!Form::text('email',null,['class'=>'form','placeholder'=>'Ingresa el correo'])!!}
					  </div>
					 {!!Form::submit('Enviar link')!!}
					 {!!Form::close()!!}
		     </div>
		</div>
	</div>
@endsection