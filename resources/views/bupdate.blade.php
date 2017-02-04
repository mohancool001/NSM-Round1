
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
			{!! Form::open(array('url' => 'book/insert', 'method' => 'post')) !!}
			<div class="form-group">
				{!! Form::label('name', 'Name:', ['class' => 'control-label']) !!}
			    {!! Form::text('name', $book->name, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
			    {!! Form::label('Title', 'Title:', ['class' => 'control-label']) !!}
			    {!! Form::text('title', $book->title, ['class' => 'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('synop', 'Synopsis:', ['class' => 'control-label']) !!}
			    {!! Form::textarea('synopsis', $book->synopsis, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('author', 'Author:', ['class' => 'control-label']) !!}
			    {!! Form::text('author', $book->author, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('edition', 'Edition:', ['class' => 'control-label']) !!}
			    {!! Form::number('Edition', $book->edition, ['class' => 'form-control']) !!}
			    Must be Number Integer.
			</div>
			<div class="form-group">
				{!! Form::label('type', 'Type:', ['class' => 'control-label']) !!}
				@if(!$book->type)
			    	{!! Form::radio('type','1',true) !!}Physical {!! Form::radio('type','0') !!}Online
			    @else
			    	{!! Form::radio('type','1') !!}Physical {!! Form::radio('type','0',true) !!}Online
			    @endif
			</div>
			<div class="form-group">
				{!! Form::label('Copies', 'Copies:', ['class' => 'control-label']) !!}
			    {!! Form::number('copies', $book->copies, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('genre', 'Genre:', ['class' => 'control-label']) !!}
			    {!! Form::text('genre', $book->genre, ['class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('image', 'Cover Image URL:', ['class' => 'control-label']) !!}
			    {!! Form::text('image', $book->image, ['class' => 'form-control']) !!}
			</div>

			{!! Form::submit('Edit Book', ['class' => 'btn btn-primary']) !!}

			{!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

