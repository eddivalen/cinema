<div class="form-group">
	{!!Form::label('nombre','Nombre:')!!}
	{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre de la pelicula'])!!}
</div>
<div class="form-group">
	{!!Form::label('elenco','Elenco:')!!}
	{!!Form::text('cast',null,['class'=>'form-control','placeholder'=>'Ingrese el elenco'])!!}
</div>
<div class="form-group">
	{!!Form::label('direccion','Dirección:')!!}
	{!!Form::text('direction',null,['class'=>'form-control','placeholder'=>'Ingrese el director'])!!}
</div>
<div class="form-group">
	{!!Form::label('duracion','Duración:')!!}
	{!!Form::text('duration',null,['class'=>'form-control','placeholder'=>'Ingrese la duración'])!!}
</div>
<div class="form-group">
	{!!Form::label('poster','Poster:')!!}
	{!!Form::file('path')!!}
</div>
<div class="form-group">
	{!!Form::label('genero','Genero:')!!}
	{!!Form::select('genre_id',$genres)!!}
</div>