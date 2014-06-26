@extends('admin::layouts.default')
@section('content')
    <div class="container">
        <div class="row">
            {{ Form::open(array('class' => 'form-horizontal')) }}
            <div class="col-md-12">
                <h4>Subjects</h4><hr>
                <table class="table table-striped">
                        @foreach ($attributes as $attribute)
                        <tr>
                            <td>{{ $attribute->name }}</td>
                        </tr>
                        @endforeach
                </table>
            </div>
            {{ Form::close() }}
        </div>


    </div><!-- /.container -->
@stop