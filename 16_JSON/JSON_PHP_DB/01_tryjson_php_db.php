<!DOCTYPE html>
<html>
<body>

<h2>Use HTTP GET to Get JSON Data from a PHP Server</h2>
<p>The JSON received from the PHP file:</p>

<p id="demo"></p>

<script>
const dbParam = JSON.stringify({"limit":5});

const xmlhttp = new XMLHttpRequest();
xmlhttp.onload = function() {
  document.getElementById("demo").innerHTML = this.responseText;
}
xmlhttp.open("GET", "01_json_demo_db.php?x=" + dbParam);
xmlhttp.send();
</script>

</body>
</html>
