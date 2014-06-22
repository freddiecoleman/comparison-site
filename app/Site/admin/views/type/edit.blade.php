@extends('admin::layouts.default')
@section('content')
    <div class="container">
        <div class="row">
            {{ Form::open(array('class' => 'form-horizontal')) }}
            <div class="col-md-6">
                <h4>Edit Type</h4><hr>
                <div class="form-group">
                    {{ Form::label('name', 'Type name: ', array('class' => 'col-sm-4 control-label')) }}
                    <div class="col-sm-8">
                        {{ Form::text('name', $type->name, array('class' => 'form-control')) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('attribute', 'Attributes: ', array('class' => 'col-sm-4 control-label')) }}
                    <div class="col-sm-8">
                        <table class="table table-striped">
                            <tbody>
                            @foreach ($type->attributes as $attribute)
                                <tr>
                                    <td>{{ $attribute-> name }}</td><td>{{ link_to('#', 'Remove', array('class' => 'btn btn-danger btn-xs')); }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-9">
                                {{ Form::select('attribute', $attributes, $type, array('class' => 'col-sm-4 form-control')) }}
                            </div>
                            <div class="col-md-3">
                                {{ link_to('#', 'Add', array('class' => 'btn btn-success')); }}
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8">
                        {{ Form::submit('Update', array('class' => 'btn btn-default')); }}
                    </div>
                </div>
            </div>
            <div class="col-md-6">

            </div>
            {{ Form::close() }}
        </div>


    </div><!-- /.container -->
@stop