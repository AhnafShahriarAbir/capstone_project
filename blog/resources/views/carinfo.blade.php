@extends('Layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">   
        @foreach ($cars as $car)
            <div class="thumbnail">
                    <img class="card-img-top" src="{{ $car->image }}" alt="...">
            </div>
            <div>
                <h1>Car Details:<h2>
                   <p> {{ $car->Make }} {{ $car->Model }} {{ $car->Year}} </p>
                   <p>Price(per hour): {{ $car->Price}} </p>
            </div>
        @endforeach

    </div>
    <div class="row"> 
        <div>
            <h1>User Details:<h2>
            @foreach ($users as $user)
                        {{ $user->name }}
             @endforeach
            <form>

                <div class="form-group">
                    <label for="username">User Name</label>
                    <input type="text" class="form-control" id="username" aria-describedby="username" placeholder="user name here">
                </div>
                <div class="form-group">
                    <label for="useremail">Email address</label>
                    <input type="email" class="form-control" id="useremail" aria-describedby="emailHelp" placeholder="Enter email">
                    
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" placeholder="Phone">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
    </div>
</div>

@endsection