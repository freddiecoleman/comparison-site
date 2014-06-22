@extends('admin::layouts.default')
@section('content')
    <div class="container">
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
        <div class="row">
            <div class="col-md-6">
                {{ Form::open(array('class' => 'form-horizontal')) }}
                <h4>Edit Type</h4><hr>
                <div class="form-group">
                    {{ Form::label('name', 'Type name: ', array('class' => 'col-sm-3 control-label')) }}
                    <div class="col-sm-9">
                        {{ Form::text('name', $type->name, array('class' => 'form-control')) }}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-8">
                        {{ Form::submit('Update', array('class' => 'btn btn-default')); }}
                    </div>
                </div>
                {{ Form::close() }}
            </div>
            <div class="col-md-6">
                {{ Form::open(array('action' => array('addAttribute', $type->id), 'class' => 'form-horizontal')) }}
                <h4>Attributes</h4><hr>
                <div class="form-group">
                    <div class="col-sm-12">
                        <table class="table table-striped">
                            <tbody>
                            @foreach ($type->attributes as $attribute)
                                <tr>
                                    <td>{{ $attribute-> name }}</td><td>{{ link_to_route('removeAttribute', 'Remove', array($type->id, $attribute->id), array('class' => 'btn btn-danger btn-xs')); }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-9">
                                {{ Form::select('attribute', $attributes, $type, array('class' => 'col-sm-4 form-control')) }}
                            </div>
                            <div class="col-md-3">
                                {{ Form::submit('Add', array('class' => 'btn btn-success')); }}
                            </div>
                        </div>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>


    </div><!-- /.container -->
@stop