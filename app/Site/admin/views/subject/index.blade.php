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
                            <th>Name</th>
                            <th>Type</th>
                            <th>Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subjects as $subject)
                        <tr>
                            <td>{{ $subject->name }}</td>
                            <td>{{ $subject->type->name }}</td>
                            <td>
                                {{ link_to('/admin/subject/'.$subject->id.'/data/structure', 'Data Structure', array('class' => 'btn btn-info btn-xs')) }}
                                {{ link_to('/admin/subject/'.$subject->id, 'Edit', array('class' => 'btn btn-success btn-xs')) }}
                                {{ link_to('#', 'Delete', array('class' => 'btn btn-danger btn-xs')) }}
                            </td>
                        </tr>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
                <div class="form-group">
                    {{ Form::label(null, null, array('class' => 'col-sm-4 control-label')) }}
                    <div class="col-sm-3">
                        {{ Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Create new subject')); }}
                    </div>
                    <div class="col-sm-3">
                        {{ Form::select('type', $types, null, array('class' => 'form-control')) }}
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