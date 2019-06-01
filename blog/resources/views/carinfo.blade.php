@extends('Layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">   
        <h1 id="demo" style="float: right;"></h1>
        <h1 >Fill up the form within:</h1>
        
        @foreach ($cars as $car)
            <div class="thumbnail">
                    <img class="card-img-top" src="{{ $car->image }}" alt="...">
            </div>
            <div style="text-align: center;">
                <h1 >Car Details:<h2>
                   <p> {{ $car->Make }} {{ $car->Model }} {{ $car->Year}} </p>
                   <p>Price(per hour): $ {{ $car->Price}} </p>
            </div>
        @endforeach

    </div>
    <br>
    <div class="row"> 
        <div>
            <h1 style="text-align: center;">User Details:<h2>
        <form method="POST" action="{{ route('checkout') }}">
            @foreach ($users as $user)
             
           

                <div class="form-group">
                    <label for="username">User Name</label>
                    <input type="text" class="form-control" id="username" aria-describedby="username" placeholder="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <label for="useremail">User Email</label>
                    <input type="email" class="form-control" id="useremail" aria-describedby="emailHelp" placeholder="{{ $user->email }}">
                    
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" placeholder="Phone">
                </div>
                <button type="submit" class="btn btn-primary">Book</button>
                </form>
            @endforeach
        </div>
    </div>
</div>

@endsection
@section('script')
<script type="text/javascript">
    // Set the date we're counting down to
var countDownDate = new Date();
countDownDate.setMinutes( countDownDate.getMinutes() + 10 );

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    

  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML =  minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>