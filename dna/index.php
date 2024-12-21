<style>
body
{
background-color:lightgrey;
}
#content
{
padding:100px;
}
#main
{
width:1000px;
padding:50px;
margin: 0 auto;
background-color:white;
}
#header
{
position:fixed;
width:100%;
left:0;
top:0;
text-align:center;
background-color:blue;
}
#footer
{
position:fixed;
width:100%;
left:0;
bottom:0;
text-align:center;
background-color:blue;
}
.search
{
width:250px;
color:blue;
}
</style>

<html>
<center>
<div id=header>
<h1>DNA Experiments Data<h1>
</div>
<body>
<div id=content>
<div id=main>
<h2>Search for DNA Experiments Data Information</h2>
Enter the DNA Sequence <input type=text name=seq id=seq placeholder="eg:ATGC">
<br><br>
Choose the organism <select id=org name=org>
<option>Select one</option>
<option>Homo sapiens</option>
<option>Escherichia coli</option>
<option>Mus musculus</option>
<option>Saccharomyces cerevisiae</option>
<option>Arabidopsis thaliana</option>
</select>
<br><br>
<input type=submit value="Search" class=search onclick=disp()>
<br><br>
<span id=result>
</span>
</center>
</div>
</div>
</body>
<div id=footer>
&copy all rights reserved 2024
</div>
</html>

<script>
function disp()
{
let seq=document.getElementById("seq").value;
let org=document.getElementById("org").value;
let xmlhttp=new XMLHttpRequest();

xmlhttp.onreadystatechange=function()
{
if(xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("result").innerHTML=xmlhttp.responseText;
}
};
xmlhttp.open("GET","dexp.php?seq="+encodeURIComponent(seq)+"&org="+encodeURIComponent(org),true);
xmlhttp.send(null);
}
</script>
