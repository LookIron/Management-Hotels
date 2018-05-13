<!-- Id Field -->

<!-- Name Field -->
<div class="form-group">
    <p>{!! Form::label('name', 'Nombre: ') !!} {!! $hotel->name !!}</p>
</div>

<!-- Cost Field -->
<div class="form-group">
     <p>{!! Form::label('cost', 'Costo del hotel: ') !!} {!! $hotel->cost !!}</p>
</div>

<!-- City Field -->
<div class="form-group">
    <p> {!! Form::label('city', 'Ciudad: ') !!}   {!! $hotel->city !!}</p>
</div>

<!-- Address Field -->
<div class="form-group">
     <p>{!! Form::label('address', 'Dirección: ') !!} {!! $hotel->address !!}</p>
</div>

<!-- Startnumber Field -->
<div class="form-group">
      <p>{!! Form::label('startNumber', 'Número de Estrellas: ') !!} {!! $hotel->startNumber !!}</p>
</div>


<!-- Ratingaverage Field -->
<div class="form-group">
    <p> {!! Form::label('ratingAverage', 'Calificación Promedio:') !!} {!! $hotel->ratingAverage !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $hotel->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $hotel->updated_at !!}</p>
</div>

