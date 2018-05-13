<table class="table table-responsive" id="hotels-table">
    <thead>
        <th>Nombre</th>
        <th>Ciudad</th>
        <th>Costo</th>
        <th>Estrellas</th>
        <th>Dirección</th>
        <th>Calificación promedio</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($hotels as $hotel)
        <tr>
            <td>{!! $hotel->name !!}</td>
            <td>{!! $hotel->city !!}</td>
            <td>{!! $hotel->cost !!}</td>
            <td>{!! $hotel->startNumber !!}</td>
            <td>{!! $hotel->address !!}</td>
            <td>{!! $hotel->ratingAverage !!}</td>
            <td>
                {!! Form::open(['route' => ['hotels.destroy', $hotel->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('hotels.show', [$hotel->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('hotels.edit', [$hotel->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>