@extends('layouts.app')

@section('content')
    @include('skies.show_fields')

    <div class="form-group">
           <a href="{!! route('skies.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
