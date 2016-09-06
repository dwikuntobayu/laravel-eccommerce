@extends('layouts.app')

@section('content')
    @include('glasses.show_fields')

    <div class="form-group">
           <a href="{!! route('glasses.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
