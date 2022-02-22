<!DOCTYPE html>
<html>
<body>

<h2>Use HTTP GET to Get JSON Data from a PHP Server</h2>
<p id="demo"></p>

<script>
const obj = { "limit":10 };
const dbParam = JSON.stringify(obj);
const xmlhttp = new XMLHttpRequest();
xmlhttp.onload = function() {
  myObj = JSON.parse(this.responseText);
  let text = ""
  for (let x in myObj) {
    text += myObj[x].title + "<br>";
  }
  document.getElementById("demo").innerHTML = text;
};
xmlhttp.open("GET", "01_json_demo_db.php?x=" + dbParam);
xmlhttp.send();
</script>

<p>Try changing the "limit" property from 10 to 5.</p>

</body>
</html>