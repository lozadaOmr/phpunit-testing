<h1>Create new Todo</h1>

{{ Form::open(array('route' => 'todos.store')) }}
	{{ Form::label('title', 'Title') }} <br>
	{{ Form::text('title', null, array('placeholder' => 'Enter Title Here')) }} <br>
	<br>
	{{ Form::label('description', 'Description') }} <br>
	{{ Form::textarea('description', null) }} <br>
	{{ Form::submit('Submit') }}
{{ Form::close() }}
