@extends('Layouts.master')

@section('content')
  <h1>Cars</h1>
  <p>List of cars</p>
  <h1>Cars</h1>

<table border = "1" width="500" cellpadding = '30px' align='center'>
<tr >
<td >Toyota Corolla<a href="/carinfo/{{1}}"> <img  width="100px" height="100px" class="display" src="{{ asset('images\toyotacorolla2018.jpg') }}"></a> 

<td>Suzuki Swift<a href="/carinfo/{{2}}"><img width="100px" height="100px" class="display" src="{{ asset('images\suzukiswift2017.jpg') }}"></a></td>
<td>Mazda 3<a href="/carinfo/{{3}}"><img width="100px" height="100px" class="display" src="{{ asset('images\mazda32014.jpg') }}"></a></td>
<td>Nissan Pulsar<a href="/carinfo/{{4}}"><img width="100px" height="100px" class="display" src="{{ asset('images\nissanpulsar2013.jpg') }}"></a></td>
<td>Holden Berlina<a href="/carinfo/{{5}}"><img width="100px" height="100px" class="display" src="{{ asset('images\holdenberlina2006.jpg') }}"></a></td>
<td>Hyundai i30<a href="/carinfo/{{5}}"><img width="100px" height="100px" class="display" src="{{ asset('images\hyundai.jpg') }}"></a></td>

<td>Hyundai Kona<a href="/carinfo/{{5}}"><img width="100px" height="100px" class="display" src="{{ asset('images\hyundai2.jpg') }}"></a></td>

<td>Mercedes Benz<a href="/carinfo/{{5}}"><img width="100px" height="100px" class="display" src="{{ asset('images\mer1.jpg') }}"></a></td>

<td>Audi q7<a href="/carinfo/{{5}}"><img width="100px" height="100px" class="display" src="{{ asset('images\audi1.jpg') }}"></a></td>
<td>Toyota Prado<a href="/carinfo/{{5}}"><img width="100px" height="100px" class="display" src="{{ asset('images\toy2.jpg') }}"></a></td>
<td>Suzuki Vitara<a href="/carinfo/{{5}}"><img width="100px" height="100px" class="display" src="{{ asset('images\suz2.jpg') }}"></a></td>
<td>Mazda CX-3<a href="/carinfo/{{5}}"><img width="100px" height="100px" class="display" src="{{ asset('images\maz2.jpg') }}"></a></td>
<td>Nissan Navara<a href="/carinfo/{{5}}"><img width="100px" height="100px" class="display" src="{{ asset('images\nissan2.jpg') }}"></a></td>
<td>Holden UteSV6<a href="/carinfo/{{5}}"><img width="100px" height="100px" class="display" src="{{ asset('hol2.jpg') }}"></a></td>
<td>Mercedes Benz C63<a href="/carinfo/{{5}}"><img width="100px" height="100px" class="display" src="{{ asset('images\mer2.jpg') }}"></a></td>
<td>Audi A3<a href="/carinfo/{{5}}"><img width="100px" height="100px" class="display" src="{{ asset('images\audi2.jpg') }}"></a></td>


</tr>

</table>
@endsection
