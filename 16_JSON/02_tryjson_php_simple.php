<!DOCTYPE html>
<html>
<body>

<h2>Get JSON Data from a PHP Server</h2>
<p id="demo"></p>

<script>
const xmlhttp = new XMLHttpRequest();

xmlhttp.onload = function() {
  // Use JSON.parse() to convert the result into a JavaScript object
  const myObj = JSON.parse(this.responseText);
  document.getElementById("demo").innerHTML = "Name: " + myObj.name + ", Surname: " + myObj.lastname;
}
xmlhttp.open("GET", "01_demo_file.php");
xmlhttp.send();
</script>

</body>
</html>
