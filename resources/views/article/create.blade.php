<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Create Article</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Create Article</h1>
            <form method = 'get' action = '{{url("article")}}'>
                <button class = 'btn blue'>Article Index</button>
            </form>
            <br>
            
            {!! Form::open(['route' => 'article.store']) !!}
                <!-- Name Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('title', 'Title:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('title') !!}
                </div>
                
                <!-- Description Field -->
                <div class="form-group col-sm-12 col-lg-12">
                    {!! Form::label('content', 'Content:') !!}
                    {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => '5']) !!}
                    {!! $errors->first('content') !!}
                </div>
                
                <!-- Submit Field -->
                <div class="form-group col-sm-12">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    <a href="{!! route('article.index') !!}" class="btn btn-default">Cancel</a>
                </div>
            {!! Form::close() !!}
            
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
    <script>
    $('select').material_select();
    </script>
</html>
