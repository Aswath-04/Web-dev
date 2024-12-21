<style>
body
{
background-color:lightblue;
}
#main
{
width:500px;
padding:100px;
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
background-color:grey;
}
#footer
{
position:fixed;
left:0;
bottom:0;
width:100%;
text-align:center;
background-color:grey;
}
</style>
<html>
<center>
<div id=header>
<h1>Symmetry Operation</h1>
</div>
<body>
<form method=post action=upload.php enctype="multipart/form-data" >
<div id=main>
Upload CIF File<input type=file name=cif><br><br>
Enter the symmetry operation <input type=text name=symop placeholder="eg:1/2-x,y+1/2,z+2"><br><br>
<input type=submit value=Upload><br>
</div>
</form>
</body>
</center>
<div id=footer>
&copy all right copied
</div>
<html>
