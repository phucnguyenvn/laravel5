<h1>Them Bai Viet Moi</h1>
	{!! Form::open(['url' => 'articles']) !!}
        {!! Form::label('hihi','Name:') !!}
		{!! Form::text('hihi') !!} <br />
 

 
		{!! Form::submit('Them moi')!!}
 
	{!! Form::close() !!}
@if ($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif 