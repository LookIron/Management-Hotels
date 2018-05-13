<table class="table table-responsive" id="userHotes-table">
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($userHotes as $userHote)
        <tr>
            <td>{!! $userHote->name !!}</td>
            <td>{!! $userHote->email !!}</td>
            <td>{!! $userHote->password !!}</td>
            <td>
                {!! Form::open(['route' => ['userHotes.destroy', $userHote->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('userHotes.show', [$userHote->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('userHotes.edit', [$userHote->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>