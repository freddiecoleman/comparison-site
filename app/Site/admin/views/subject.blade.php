@extends('admin::layouts.default')
@section('content')
    <div class="container">
        <div class="row">
            {{ Form::open(array('class' => 'form-horizontal')) }}
            <div class="col-md-6">
                <h4>Subject Settings</h4><hr>
                <div class="form-group">
                    {{ Form::label('subject', 'Subjects: ', array('class' => 'col-sm-4 control-label')) }}
                    <div class="col-sm-8">
                        <select multiple="true" class="form-control" name="subject[]">
                        @foreach ($subjects as $subject)
                            <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label(null, null, array('class' => 'col-sm-4 control-label')) }}
                    <div class="col-sm-6">
                        {{ Form::text('addSubject', null, array('class' => 'form-control', 'placeholder' => 'Add new subject')); }}
                    </div>
                    <div class="col-sm-2">
                        {{ link_to('#', 'Add', array('class' => 'btn btn-info col-sm-4 btn-block')); }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label(null, null, array('class' => 'col-sm-4 control-label')) }}
                    <div class="col-sm-8">
                        {{ link_to('#', 'Edit', array('class' => 'btn btn-success col-sm-4 btn-block')); }}
                        {{ link_to('#', 'Delete', array('class' => 'btn btn-danger col-sm-4 btn-block')); }}
                    </div>
                </div>
                 <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8">
                        {{ Form::submit('Submit', array('class' => 'btn btn-default')); }}
                    </div>
                </div>
            </div>
            <div class="col-md-6">

            </div>
            {{ Form::close() }}
        </div>


    </div><!-- /.container -->
@stop