<!DOCTYPE html>
<html>
<body>

<h2>Get JSON Data from a PHP Server</h2>
<p>Convert the data into a JavaScript array:</p>
<p id="demo"></p>

<script>
const xmlhttp = new XMLHttpRequest();

xmlhttp.onload = function() {
  // Use JSON.parse() to convert the result into a JavaScript array
  const myObj = JSON.parse(this.responseText);
  document.getElementById("demo").innerHTML = myObj[2];
}
xmlhttp.open("GET", "03_demo_file_array.php");
xmlhttp.send();
</script>

</body>
</html>
