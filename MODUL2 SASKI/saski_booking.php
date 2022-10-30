<!DOCTYPE html>
<html>
<head>
<title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
    float: left;
    text-align: center;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

h1{
    text-align: center;
}

td{
    vertical-align: top;
}

input {
  width: 100%;
  color: gray;
}

select {
  width: 100%;
  height: 30px;
}

button {
  width: 100%;
}

.footer {
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: light gray;
  color: gray;
  text-align: center;
}

</style>

<body>

<ul>
    <li><a class="active" href="index.php">Home</a></li>
    <li><a href="#news">Book</a></li> 
</ul>

<br>
<h1>Rent Your Car Now!</h1>
<br>

<table width="90%" align="center">
<tr>
<td align="center" width="30%" ><img src="https://www.toyota.astra.co.id/sites/default/files/2021-08/1-white.png" height="300" width="500"></td>
<td><form>
<label for="fname"><h6>Name</h6></label>
  <input type="text" id="fname" name="fname">

<label for="start"><h6>Start date</h6></label>

<input type="date" id="start" name="trip-start"
       value="------"
       min="2022-10-01" max="2022-12-31">

<label for="appt"><h6>Time start</h6></label>
  <input type="time" id="appt" name="appt">

<label for="cars"><h6>Car type</h6></label><br>
<select id="cars" name="carlist" form="carform">
  <option value="Toyota Rush">Toyota Rush</option>
  <option value="Toyota Alya">Toyota Alya</option>
  <option value="Honda Brio">Honda Brio</option>
</select>

<label for="fname"><h6>No Telpon</h6></label>
  <input type="text" id="fnumber" name="fnumber">

  Add Service(s)
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Health Protocol / Rp.25,000</label>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Driver / Rp.100,000</label>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Fuel filled / Rp.25,000</label>
  </div>

  <button type="submit" class="btn btn-primary"><a href="saski_mybooking.php">Submit
</a></button>
</form></td>


</tr>
</table>

<br>
<br>
<div class="footer">
  <p>Created by Saskiya_12022202391</p>
</div>

</body>
</html>