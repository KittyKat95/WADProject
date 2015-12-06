<div id="imdb">
<table id="imdb"></table>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      myFunction(xhttp);
    }
  };
  xhttp.open("GET", "movies.xml", true);
  xhttp.send();
}
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>Artist</th><th>Title</th></tr>";
  var x = xmlDoc.getElementsByTagName("CD");
  for (i = 0; i <x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("title")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("rank")[0].childNodes[0].nodeValue +
    "</td></tr>";
    x[i].getElementsByTagName("year")[0].childNodes[0].nodeValue +
    "</td></tr>";
    x[i].getElementsByTagName("rating")[0].childNodes[0].nodeValue +
    "</td></tr>";
  }
  document.getElementById("imdb").innerHTML = table;
}
</script>

</div>