{{ Form::open() }}

    {{ Form::label('sitename', 'Site name: ') }}
    {{ Form::text('sitename') }}
    {{ Form::label('rooturl', 'Root url: ') }}
    {{ Form::text('rooturl', Request::root()); }}

{{ Form::close() }}