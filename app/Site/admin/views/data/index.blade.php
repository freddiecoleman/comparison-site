@extends('admin::layouts.default')
@section('content')
    <div class="container">
        <div class="row">
            {{ Form::open(array('class' => 'form-horizontal')) }}
            <div class="col-md-12">
                <h4>Subjects</h4><hr>
                <table class="table table-striped">
                        @foreach ($data as $row)
                        {{ dd($row) }}
                        <tr>
                            @foreach($row as $column=>$value)
                            <th>{{ $column }}</th>
                            @endforeach
                        </tr>
                        @endforeach
                </table>
            </div>
            {{ Form::close() }}
        </div>


    </div><!-- /.container -->
@stop