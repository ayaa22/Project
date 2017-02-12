@extends('main')

@section('title','| Register page')


@section('stylesheet')

{!! Html:: style('css/parsley.css') !!}

@endsection


@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		{!!Form::open(['data-parsley-validate'=>''])!!}

		{{Form::label('name','Name:')}}
		{{Form::text('name',null,array('class'=>'form-control','required'=>'','maxlength'=>'20','minlength'=>'5')) }}

		{{Form::label('email','Email:')}}
		{{Form::email('email',null,array('class'=>'form-control','required'=>'')) }}

		{{Form::label('password','Password:')}}
		{{Form::password('password',array('class'=>'form-control','required'=>'','maxlength'=>'20','minlength'=>'5')) }}

		{{Form::label('password_confirmation','Confirm Password:')}}
		{{Form::password('password_confirmation',array('class'=>'form-control','required'=>'','maxlength'=>'20','minlength'=>'5'))}}
		<br>
		{{Form::submit('Register',array('class'=>'btn btn-primary btn-block')) }}
		{!!Form::close()!!}
	</div>
</div>
@endsection

@section('scripts')

{!! Html:: script('js/parsley.min.js') !!}

@endsection