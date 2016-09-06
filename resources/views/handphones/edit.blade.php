@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Handphone</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($handphone, ['route' => ['handphones.update', $handphone->id], 'method' => 'patch']) !!}

            @include('handphones.fields')

            {!! Form::close() !!}
        </div>
@endsection
