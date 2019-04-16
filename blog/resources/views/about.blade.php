@extends('Layouts.master')

@section('content')
  <h1>About</h1>

  <div class="iframe-container" height="460px" width="100%">
 	 <div id="map" height="460px" width="100%"></div>
</div>
<form action = "/create" method = "post">
      <table>
      <tr><td>Name:</td> <td><input type='text' id='name'/> </td> </tr>
      <tr><td>Address:</td> <td><input type='text' id='address'/> </td> </tr>
      <tr><td></td><td><input type='submit' value='Save' onclick='saveData()'/></td></tr>
      </table>
    </form>
    <div id="message">Location saved</div>