@extends('admin::layouts.default')
@section('content')
    <div class="container">
        <div class="row">
            {{ Form::open(array('class' => 'form-horizontal')) }}
            <div class="col-md-12">
                <h4>Subjects</h4><hr>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            @foreach ($activeColumns as $column)
                                <th>{{ $column }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                            <tr>
                            @foreach ($activeColumns as $column)
                                <td>{{ (isset($row->$column)) ? $row->$column : 'null' }}</td>
                            @endforeach
                            </tr>
                        @endforeach
                    <tbody>
                </table>
            </div>
            {{ Form::close() }}
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4>Columns not in use</h4><hr>
                <ul>
                    @foreach ($extraColumns as $extraColumn)
                    <li>{{ $extraColumn }} - Create attribute / Assign as column</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div><!-- /.container -->
@stop