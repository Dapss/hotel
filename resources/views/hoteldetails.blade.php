@extends('navbar')
@section('navbars')

<style>
<style>
.button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  width: 100px;
  height: 30px;
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

</style>
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        @csrf
        @method("DELETE")
        <input type="submit" value="Delete" class="text-slate-600 hover:text-slate-500 justify-end items-end self-end">
    </form>
    <a href="/hotel/{{ $hotel->id }}/edit">Edit</a>
    <h1 style="text-align:center;">{{ $hotel->name }}</h1>
    <h3 style="text-align:center;">{{ $hotel->address }}</h3>
    <center><img src="{{ url($hotel->image) }}" alt="" style="width:25%;"></center>
    <p style="text-align:center;">{{ $hotel->about }}</p>
    <h3 style="text-align:center;">Facilities</h3>
    <p style="text-align:center;">{{ $hotel->facilities }}</p>
    <h3 style="text-align:center;">{{ $hotel->price }}$/night</h3>
    <center><button class="button button1">Book Now!</button></center>

    
</body>
</html>


@endsection

