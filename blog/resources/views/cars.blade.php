@extends('Layouts.master')

@section('content')
  <h1>Cars</h1>
  <p>List of Cars for Booking</p>
  

<table  class="imagetab" cellpadding = '30px' align='center'>
<tr >
<td ><b>Toyota Corolla </b>
	<a href="/carinfo/{{1}}"> <img  width="100px" height="100px" class="display" src="{{ asset('images\toyotacorolla2018.jpg') }}"></a> </td>
</tr>
<tr>
<td><b>Suzuki Swift</b> <a href="/carinfo/{{2}}"><img width="100px" height="100px" class="display" src="{{ asset('images\suzukiswift2017.jpg') }}"></a></td>
</tr>
<tr>
<td><b>Mazda 3</b><a href="/carinfo/{{3}}"><img width="100px" height="100px" class="display" src="{{ asset('images\mazda32014.jpg') }}"></a></td>
</tr>
<tr>
<td><b>Nissan Pulsar</b> <a href="/carinfo/{{4}}"><img width="100px" height="100px" class="display" src="{{ asset('images\nissanpulsar2013.jpg') }}"></a></td>
</tr>
<tr>
<td><b>Holden Berlina</b> <a href="/carinfo/{{5}}"><img width="100px" height="100px" class="display" src="{{ asset('images\holdenberlina2006.jpg') }}"></a></td>
</tr>
<tr>
<td><b>Hyundai i30 </b><a href="/carinfo/{{6}}"><img width="100px" height="100px" class="display" src="{{ asset('images\hyundai1.jpg') }}"></a></td>
</tr>
<tr>
<td><b>Hyundai Kona </b><a href="/carinfo/{{7}}"><img width="100px" height="100px" class="display" src="{{ asset('images\hyundai2.jpg') }}"></a></td>
</tr>
<tr>
<td><b>Mercedes Benz </b><a href="/carinfo/{{8}}"><img width="100px" height="100px" class="display" src="{{ asset('images\mer1.jpg') }}"></a></td>
</tr>
<tr>
<td><b>Audi q7 </b><a href="/carinfo/{{9}}"><img width="100px" height="100px" class="display" src="{{ asset('images\audi1.jpg') }}"></a></td>
</tr>
<tr>
<td><b>Toyota Prado </b><a href="/carinfo/{{10}}"><img width="100px" height="100px" class="display" src="{{ asset('images\toy2.jpg') }}"></a></td>
</tr>
<tr>
<td><b>Suzuki Vitara </b><a href="/carinfo/{{11}}"><img width="100px" height="100px" class="display" src="{{ asset('images\suz2.jpg') }}"></a></td>
</tr>
<tr>
<td><b>Mazda CX-3</b> <a href="/carinfo/{{12}}"><img width="100px" height="100px" class="display" src="{{ asset('images\maz2.jpg') }}"></a></td>
</tr>
<tr>
<td><b>Nissan Navara</b> <a href="/carinfo/{{13}}"><img width="100px" height="100px" class="display" src="{{ asset('images\nissan2.jpg') }}"></a></td>
</tr>
<tr>
<td><b>Holden UteSV6 </b><a href="/carinfo/{{14}}"><img width="100px" height="100px" class="display" src="{{ asset('images\hol2.jpg') }}"></a></td>
</tr>
<tr>
<td><b>Mercedes Benz C63 </b><a href="/carinfo/{{15}}"><img width="100px" height="100px" class="display" src="{{ asset('images\mer2.jpg') }}"></a></td>
</tr>
<tr>
<td><b>Audi A3 </b><a href="/carinfo/{{16}}"><img width="100px" height="100px" class="display" src="{{ asset('images\audi2.jpg') }}"></a></td>
</tr>

</table>
@endsection
