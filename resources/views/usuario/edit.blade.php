@extends('layouts.admin')
@section('content')
@include('alerts.request')		

	{!!Form::model($user,['route'=>['usuario.update',$user->id],'method'=>'PUT','style'=>'display:inline'])!!}
 	@include('usuario.forms.user')
 	{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
	 {!!Form::close()!!}
	<br><br>
  	{!!Form::open(['route'=>['usuario.destroy',$user->id],'method'=>'DELETE','style'=>'display:inline'])!!}
 	{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
 	{!!Form::close()!!}

 
@stop