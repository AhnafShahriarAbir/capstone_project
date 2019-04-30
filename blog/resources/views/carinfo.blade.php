@extends('Layouts.master')

@section('content')

<table border = "1" width="500" cell-padding = 30px align=center>
<tr>
<td>Id</td>
<td>Description</td>
<td>Make</td>
<td>Model</td>
<td>Year</td>
<td>Price</td>

</tr>
@foreach ($cars as $car)
<tr>
<td>{{ $car->id }}</td>
<td>{{$car->Description}}</td>
<td>{{ $car->Make }}</td>
<td>{{ $car->Model }}</td>
<td>{{ $car->Year}}</td>
<td>{{ $car->Price}}</td>

</tr>
@endforeach
</table>

@endsection