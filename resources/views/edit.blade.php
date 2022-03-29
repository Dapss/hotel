<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<div>
  <form method="POST" action="{{url('hotel', $hotel->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
   
    <label for="fname">Name</label>
    <input type="text" id="name" name="name" placeholder="Hotel name" value="{{ $hotel->name }}">

    <label for="lname">Address</label>
    <input type="text" id="address" name="address" placeholder="Hotel address" value="{{ $hotel->address }}">

    <label for="lname">Price per night</label>
    <input type="number" id="price" name="price" placeholder="" value="{{ $hotel->price }}"><br>

    <label for="lname">Image (url)</label>
    <input type="text" id="image" name="image" placeholder="Image url" value="{{ $hotel->image }}">

    <label for="lname">Facilities</label>
    <input type="text" id="image" name="facilities" placeholder="Facilities" value="{{ $hotel->facilities }}">

    <label for="lname">About Hotel</label><br>
    <textarea type="text" id="about" name="about" placeholder="About hotel" value="{{ $hotel->about }}"></textarea>

  
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>