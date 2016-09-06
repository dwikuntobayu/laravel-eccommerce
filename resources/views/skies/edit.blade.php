@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Sky</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($sky, ['route' => ['skies.update', $sky->id], 'method' => 'patch']) !!}

            @include('skies.fields')

            {!! Form::close() !!}
        </div>
@endsection
