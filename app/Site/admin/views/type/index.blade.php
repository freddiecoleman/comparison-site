@extends('admin::layouts.default')
@section('content')
    <div class="container">
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
        <div class="row">
            {{ Form::open(array('class' => 'form-horizontal')) }}
            <div class="col-md-12">
                <h4>Types</h4><hr>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Attributes</th>
                            <th>Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($types as $type)
                        @if($type->id != 1)
                            <tr>
                                <td>{{ $type->name }}</td>
                                <td>
                                <ul>
                                @foreach ($type->attributes as $attribute)
                                    <li>{{ $attribute->name }}</li>
                                @endforeach
                                </ul>
                                </td>
                                <td>
                                    {{ link_to('/admin/type/'.$type->id, 'Edit', array('class' => 'btn btn-success btn-xs')); }}
                                    {{ link_to('/admin/type/'.$type->id.'/delete', 'Delete', array('class' => 'btn btn-danger btn-xs', 'onClick' => 'if(!confirm(\'If you delete this type, any subjects that use this type will have no type.\')){return false;};')); }}
                                </td>
                            </tr>
                        @endif
                        @endforeach
                        </tr>
                    </tbody>
                </table>
                <div class="form-group">
                    {{ Form::label(null, null, array('class' => 'col-sm-4 control-label')) }}
                    <div class="col-sm-6">
                        {{ Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Create new type')); }}
                    </div>
                    <div class="col-sm-2">
                        {{ Form::submit('Create', array('class' => 'btn btn-info col-sm-4 btn-block')); }}
                    </div>
                </div>
            </div>
            {{ Form::close() }}
        </div>


    </div><!-- /.container -->
@stop