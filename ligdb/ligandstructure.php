<?php
header("Content-type:image/png");
$id=$_GET['id'];
$connect=mysqli_connect("localhost","root","","ligdb");
//$db=mysqli_select_db("ligdb") or die ("db not exists");
$sql="Select structure_date from structures where ligand_id="$id"";
$query=mysqli_query($connect,$sql);
while($row=mysqli_fetch_array($query))
{
$pic=$row['structure_data'];
echo $pic;
}
?>
