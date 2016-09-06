<table class="table table-responsive" id="handphones-table">
    <thead>
        <th>Name</th>
        <th>Description</th>
        <th>Specification</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($handphones as $handphone)
        <tr>
            <td>{!! $handphone->name !!}</td>
            <td>{!! $handphone->description !!}</td>
            <td>{!! $handphone->specification !!}</td>
            <td>
                {!! Form::open(['route' => ['handphones.destroy', $handphone->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('handphones.show', [$handphone->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('handphones.edit', [$handphone->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
