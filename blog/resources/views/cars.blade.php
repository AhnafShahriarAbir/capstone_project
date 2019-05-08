@extends('Layouts.master')

@section('content')
  <h1>Cars</h1>
  <p>List of cars</p>
  <h1>Cars</h1>

<table border = "1" width="500" cellpadding = '30px' align='center'>
<tr >
<td ><a href="/carinfo/{{1}}"> <img  width="100px" height="100px" class="display" src="{{ asset('images\toyotacorolla2018.jpg') }}"></a> 

<td><a href="/carinfo/{{2}}"><img width="100px" height="100px" class="display" src="{{ asset('images\suzukiswift2017.jpg') }}"></a></td>
<td><a href="/carinfo/{{3}}"><img width="100px" height="100px" class="display" src="{{ asset('images\mazda32014.jpg') }}"></a></td>
<td><a href="/carinfo/{{4}}"><img width="100px" height="100px" class="display" src="{{ asset('images\nissanpulsar2013.jpg') }}"></a></td>
<td><a href="/carinfo/{{5}}"><img width="100px" height="100px" class="display" src="{{ asset('images\holdenberlina2006.jpg') }}"></a></td>
<td><a href="/carinfo/{{5}}"><img width="100px" height="100px" class="display" src="{{ asset('images\hyundai.jpg') }}"></a></td>

<td><a href="/carinfo/{{5}}"><img width="100px" height="100px" class="display" src="{{ asset('images\hyundai2.jpg') }}"></a></td>

<td><a href="/carinfo/{{5}}"><img width="100px" height="100px" class="display" src="{{ asset('images\mer1.jpg') }}"></a></td>

<td><a href="/carinfo/{{5}}"><img width="100px" height="100px" class="display" src="{{ asset('images\audi1.jpg') }}"></a></td>
<td><a href="/carinfo/{{5}}"><img width="100px" height="100px" class="display" src="{{ asset('images\toy2.jpg') }}"></a></td>
<td><a href="/carinfo/{{5}}"><img width="100px" height="100px" class="display" src="{{ asset('images\suz2.jpg') }}"></a></td>
<td><a href="/carinfo/{{5}}"><img width="100px" height="100px" class="display" src="{{ asset('images\maz2.jpg') }}"></a></td>
<td><a href="/carinfo/{{5}}"><img width="100px" height="100px" class="display" src="{{ asset('images\holdenberlina2006.jpg') }}"></a></td>
<td><a href="/carinfo/{{5}}"><img width="100px" height="100px" class="display" src="{{ asset('images\nissan2.jpg') }}"></a></td>
<td><a href="/carinfo/{{5}}"><img width="100px" height="100px" class="display" src="{{ asset('hol2.jpg') }}"></a></td>
<td><a href="/carinfo/{{5}}"><img width="100px" height="100px" class="display" src="{{ asset('images\mer2.jpg') }}"></a></td>
<td><a href="/carinfo/{{5}}"><img width="100px" height="100px" class="display" src="{{ asset('images\audi2.jpg') }}"></a></td>


</tr>

</table>
@endsection
