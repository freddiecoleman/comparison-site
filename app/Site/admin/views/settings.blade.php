{{ Form::open() }}

    {{ Form::label('sitename', 'Site name: ') }}
    {{ Form::text('sitename') }}
    {{ Form::label('sitetitle', 'Site title: ') }}
    {{ Form::text('rooturl'); }}
    {{ Form::label('rooturl', 'Root url: ') }}
    {{ Form::text('rooturl', Request::root()); }}
    {{ Form::label('username', 'Username: ') }}
    {{ Form::text('username'); }}
    {{ Form::label('password', 'Password: ') }}
    {{ Form::password('password'); }}
    {{ Form::label('confirm', 'Confirm: ') }}
    {{ Form::password('confirm'); }}

{{ Form::close() }}