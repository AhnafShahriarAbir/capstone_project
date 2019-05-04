@extends('Layouts.master')



@section('content')
<h1>Book cars</h1>

<table border = "1" width="500" cell-padding = 30px align=center>
	

	@foreach($users as $user)
		<select>
			<option value="{{ $user['id']}}">{{ $user['name'] }}</option>
		</select>
	@endforeach
</table>

<button>User table</button>


@endsection