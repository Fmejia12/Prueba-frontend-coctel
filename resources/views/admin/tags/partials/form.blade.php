<div class="forma-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la etiqueta']) !!}

@error('name')
     <span class="text-danger">{{$message}}</span>
@enderror

</div>

<div class="forma-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del Slug','readonly']) !!}

    @error('slug')
          <span class="text-danger">{{$message}}</span>
    @enderror

</div>

<div class="forma-group">

    {{-- 
    {!! Form::label('color', 'Color') !!}
    {!! Form::text('color', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el color de la etiqueta']) !!}
--}}

    {!! Form::label('color', 'Color:') !!}
    {!! Form::select('color', $colors, null, ['class'=>'form-control']) !!}

    @error('color')
    <span class="text-danger">{{$message}}</span>
@enderror

</div>