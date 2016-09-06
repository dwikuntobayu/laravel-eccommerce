@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Planet</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($planet, ['route' => ['planets.update', $planet->id], 'method' => 'patch']) !!}

            @include('planets.fields')

            {!! Form::close() !!}
        </div>
@endsection
