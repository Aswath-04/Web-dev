<?php
$filename=$_FILES['cif']['name'];
$filesize=$_FILES['cif']['size'];
$filelocation=$_FILES['cif']['tmp_name'];
$symoper=$_POST['symop'];
//echo "$filename:$filesize:$filelocation";
$rand=rand(0,100000000);
echo "Your Job id is $rand";
$newfile=$rand.".cif";
move_uploaded_file($filelocation,"C:\\wamp64\\www\\cif\\$newfile");
$fhandle=fopen("C:\\wamp64\\www\\cif\\$newfile","r");
echo '<div style="width:40%;height:90%;overflow:scroll;border:1px solid;padding:10px;">';
$sep_op=explode(",",$symoper);
print_r($sep_op);
$xs=preg_replace("/1\/2/","0.5",$sep_op[0]);
$ys=preg_replace("/1\/2/","0.5",$sep_op[1]);
$zs=preg_replace("/1\/2/","0.5",$sep_op[2]);
echo "$xs:$ys:$zs";
while(!feof($fhandle))
{
	$line=fgets($fhandle);
	if(preg_match("/^[A-Z]/",$line))
	{
		preg_match_all("/-?\d\.\d{1,6}/",$line,$matches);
	
	$xcc=preg_replace("/x/",$matches[0][0],$xs);
	$ycc=preg_replace("/y/",$matches[0][1],$ys);
	$zcc=preg_replace("/z/",$matches[0][2],$zs);
	
	$xcc=preg_replace("/--/","+",$xcc);
	$ycc=preg_replace("/--/","+",$ycc);
	$zcc=preg_replace("/--/","+",$zcc);
	
	$x=eval("return($xcc);");
	$y=eval("return($ycc);");
	$z=eval("return($zcc);");
	echo"<pre> $x:$y:$z \n";
	
	}
}
	echo"</div>";

?>
