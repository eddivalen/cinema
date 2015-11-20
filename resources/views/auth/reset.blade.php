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
			 	{!!Form::open(['url' => '/password/reset'])!!}
					 <div class="col-md-6 contact-left">
					 	 {!!Form::hidden('token',$token,null)!!}
					  	  {!!Form::text('email',null,['value'=>"{{old('email')}}",'placeholder'=>'Ingrese el correo'])!!}
						  
						  <div class="form-group">
						  <div>
						  {!!Form::label('Nueva contraseña:')!!}
					  	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{!!Form::password('password')!!}</div><br><div>
					  	  {!!Form::label('Confirme la contraseña:')!!}
					  	  {!!Form::password('password_confirmation')!!}</div>

					  	</div>
					  </div>
					 {!!Form::submit('Reestablecer contraseña')!!}
					 {!!Form::close()!!}
		     </div>
		</div>
	</div>
@endsection