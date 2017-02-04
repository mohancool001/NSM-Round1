@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    {!! Form::open(array('url' => 'book/create', 'method' => 'get'))!!}
                                {!! Form::submit('Add Book', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}<br>
                    {!! Form::open(array('url' => 'book/update', 'method' => 'post'))!!}
                    ID:    {!! Form::text('id');!!}
                                {!! Form::submit('Edit Book', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
