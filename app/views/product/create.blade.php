@extends('layout.default')

@section('content')
	<div class="container">
		<div class"panel">
			<div class="panel-heading"> Create new product</div>
				<div class="panel-body">
					{{ Form::open(array('action' => 'ProductController@store','class' => 'bs-example form-horizontal',)) }}
					
					{{ Form::Text('product_name', 'Product name', array('class' => 'form-control')) }}

					{{ $errors->first('product_name', '<div class="alert alert-danger"><b>:message</b></div> ') }}

					{{ Form::Textarea('product_desc','Product Description', array('class' => 'form-control')) }}

					{{ $errors->first('product_desc', '<div class="alert alert-danger"><b>:message</b></div> ') }}

					 {{Form::submit('Submit', array('class' => 'btn btn-primary')) }}
				
					{{ Form::close() }}
				</div>

		</div>
	</div>

