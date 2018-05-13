/*<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $comment->id !!}</p>
</div>
<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $comment->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $comment->updated_at !!}</p>
</div>
*/
<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Comentario: ') !!}
    <p>{!! $comment->description !!}</p>
</div>

<!-- Rating Field -->
<div class="form-group">
    {!! Form::label('rating', 'Calificación: ') !!}
    <p>{!! $comment->rating !!}</p>
</div>

<!-- Hotel Id Field -->
<div class="form-group">
    {!! Form::label('hotel_id', 'Hotel: ') !!}
    <p>{!! $comment->hotel_id !!}</p>
</div>

<!-- Userhotel Id Field -->
<div class="form-group">
    {!! Form::label('userHotel_id', 'Usuario: ') !!}
    <p>{!! $comment->userHotel_id !!}</p>
</div>



