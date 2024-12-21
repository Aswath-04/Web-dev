<html>
<center>
<table border=2 width=500px>
<tr><td colspan=4><h1>DISEASE INFORMATION SITE</h1></td></tr>
<tr><td colspan=4>Enter the disease name: <input type=text name=disname id=disname placeholder="eg:Diabetes"></td></tr>
<tr><td colspan=4>Enter the symptoms    : <input type=text name=sym id=sym placeholder="eg:Frequent urination"></td></tr>
<tr><td colspan=2>Enter the severity    :</td> 
<td><select name=sev id=sev>
<option>Mild</option>
<option>Moderate</option>
<option>Severe</option>
<option>Chronic</option>
</select></td></tr>
<tr><td colspan=4><center><input type=submit value=Search onclick=displaydetails()></center></td></tr>
</table>
<span id=output>
</span>
</center>
</html>
<script>
function displaydetails() {
  let disname = document.getElementById("disname").value;
  let sym = document.getElementById("sym").value;
  let sev=document.getElementById("sev").value;
  let xmlhttp = new XMLHttpRequest();

  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      document.getElementById("output").innerHTML = xmlhttp.responseText;
    }
  };
let querystring= "disease.php?disease=" + encodeURIComponent(disname) + "&symptoms=" + encodeURIComponent(sym)+ "&severity"+encodeURIComponent(sev);
  xmlhttp.open("GET", querystring, true);
  xmlhttp.send();
}

</script>
