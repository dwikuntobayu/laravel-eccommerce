<table class="table table-responsive" id="glasses-table">
    <thead>
        <th>Name</th>
        <th>Quantity</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($glasses as $glass)
        <tr>
            <td>{!! $glass->name !!}</td>
            <td>{!! $glass->quantity !!}</td>
            <td>
                {!! Form::open(['route' => ['glasses.destroy', $glass->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('glasses.show', [$glass->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('glasses.edit', [$glass->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
