@extends('layouts.app')

@section('content')
    @include('planets.show_fields')

    <div class="form-group">
           <a href="{!! route('planets.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
