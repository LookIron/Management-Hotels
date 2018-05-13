<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nombre: ') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- City Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city', 'Ciudad: ') !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>

<!-- Cost Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cost', 'Costo: ') !!}
    {!! Form::number('cost', null, ['class' => 'form-control']) !!}
</div>

<!-- Startnumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('startNumber', 'Estrellas: ') !!}
    {!! Form::number('startNumber', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Dirección:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('hotels.index') !!}" class="btn btn-default">Cancel</a>
</div>
