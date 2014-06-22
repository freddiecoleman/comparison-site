@extends('admin::layouts.default')
@section('content')
    <div class="container">
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
        <div class="row">
            {{ Form::open(array('class' => 'form-horizontal')) }}
            <div class="col-md-6">
                <h4>Edit Attribute</h4><hr>
                <div class="form-group">
                    {{ Form::label('name', 'Attrbiute name: ', array('class' => 'col-sm-4 control-label')) }}
                    <div class="col-sm-8">
                        {{ Form::text('name', $attribute->name, array('class' => 'form-control')) }}
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