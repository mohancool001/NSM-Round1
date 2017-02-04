
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
			{!! Form::open(array('url' => 'book/create', 'method' => 'post')) !!}
			<div class="form-group">
				{!! Form::label('name', 'Name:', ['class' => 'control-label']) !!}
			    {!! Form::text('name', null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
			    {!! Form::label('Title', 'Title:', ['class' => 'control-label']) !!}
			    {!! Form::text('title', null, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('synop', 'Synopsis:', ['class' => 'control-label']) !!}
			    {!! Form::textarea('synopsis', null, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('author', 'Author:', ['class' => 'control-label']) !!}
			    {!! Form::text('author', null, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('edition', 'Edition:', ['class' => 'control-label']) !!}
			    {!! Form::number('edition', null, ['class' => 'form-control']) !!}
			    Must be Number Integer.
			</div>
			<div class="form-group">
				{!! Form::label('type', 'Type:', ['class' => 'control-label']) !!}
			    {!! Form::radio('type','1') !!}Physical {!! Form::radio('type','0') !!}Online
			</div>
			<div class="form-group">
				{!! Form::label('Copies', 'Copies:', ['class' => 'control-label']) !!}
			    {!! Form::number('copies', null, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('genre', 'Genre:', ['class' => 'control-label']) !!}
			    {!! Form::text('genre', null, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('image', 'Cover Image URL:', ['class' => 'control-label']) !!}
			    {!! Form::text('image', null, ['class' => 'form-control']) !!}
			</div>

			{!! Form::submit('Add Book', ['class' => 'btn btn-primary']) !!}

			{!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

