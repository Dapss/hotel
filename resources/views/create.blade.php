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
  <form method="POST" action="{{url('hotel')}}" enctype="multipart/form-data">
    @csrf
   
    <label for="fname">Name</label>
    <input type="text" id="name" name="name" placeholder="Hotel name">

    <label for="lname">Address</label>
    <input type="text" id="address" name="address" placeholder="Hotel address">

    <label for="lname">Price per night</label>
    <input type="number" id="price" name="price" placeholder=""><br>

    <label for="lname">Image (url)</label>
    <input type="text" id="image" name="image" placeholder="Image url">

    <label for="lname">Facilities</label>
    <input type="text" id="image" name="facilities" placeholder="Image url">

    {{-- <label for="lname">Facilities</label><br>
    <input type="checkbox" id="shower" name="shower" value="Shower">
    <label for="vehicle1"> Shower</label><br>
    <input type="checkbox" id="wifi" name="wifi" value="Wifi">
    <label for="vehicle2"> Wifi</label><br>
    <input type="checkbox" id="pool" name="pool" value="Pool">
    <label for="vehicle3"> Pool</label><br>
    <input type="checkbox" id="doublebed" name="doublebed" value="Double Bed">
    <label for="vehicle1"> Double Bed</label><br>
    <input type="checkbox" id="breakfast" name="breakfast" value="Breakfast">
    <label for="vehicle2"> Breakfast</label><br>
    <input type="checkbox" id="refrigerator" name="refrigerator" value="Refrigerator">
    <label for="vehicle3"> Refrigerator</label><br> --}}

    <label for="lname">About Hotel</label><br>
    <textarea type="text" id="about" name="about" placeholder="About hotel"></textarea>

  
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>