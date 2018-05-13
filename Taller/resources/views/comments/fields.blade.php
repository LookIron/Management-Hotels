
<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Comentario: ') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Rating Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rating', 'Calificación: ') !!}
    {!! Form::number('rating', null, ['class' => 'form-control']) !!}
</div>

<!-- Hotel Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hotel_id', 'Hotel:') !!}

</div>

<!-- Userhotel Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('userHotel_id', 'Usuario:') !!}

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('comments.index') !!}" class="btn btn-default">Cancel</a>
</div>