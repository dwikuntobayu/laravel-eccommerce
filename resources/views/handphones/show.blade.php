@extends('layouts.app')

@section('content')
    @include('handphones.show_fields')

    <div class="form-group">
           <a href="{!! route('handphones.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
