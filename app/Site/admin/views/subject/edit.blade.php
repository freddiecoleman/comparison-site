@extends('admin::layouts.default')
@section('content')
    <div class="container">
        <div class="row">
            {{ Form::open(array('class' => 'form-horizontal')) }}
            <div class="col-md-6">
                <h4>Edit Subject</h4><hr>
                <div class="form-group">
                    {{ Form::label('name', 'Subject name: ', array('class' => 'col-sm-4 control-label')) }}
                    <div class="col-sm-8">
                        {{ Form::text('name', $subject->name, array('class' => 'form-control')) }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('type', 'Subject type: ', array('class' => 'col-sm-4 control-label')) }}
                    <div class="col-sm-8">
                        {{ Form::select('type', $types, $subject->type->id, array('class' => 'form-control')) }}
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