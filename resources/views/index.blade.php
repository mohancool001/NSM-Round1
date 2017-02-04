@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            {!! Form::open(array('url' => 'search', 'method' => 'post'))!!}
                    {!! Form::text('search',null) !!}
                    {!! Form::submit('Search', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        	Click the CHeckbox for checkout.
        	{!! Form::open(array('url' => 'add', 'method' => 'get'))!!}        
            @foreach ($books as $book)
            	<li>{!! $book->name!!} {!! $book->title!!} 
            		@if($book->status==1 || $book->copies <= 1)
            			{!! Form::checkbox('value',$book->id)!!}
            		@else
            			Not Available
            		@endif
            	</li><br>
            @endforeach
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
