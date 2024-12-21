<?php
$ligk=$_POST['lk'];
$connect=mysqli_connect("localhost","root","","ligdb");
//$db=mysqli_select_db("ligdb");
$sql="Select * from ligands,structures where ligands.ligand_id=structures.ligand_id and ligands.description like '%$ligk%'";
$query=mysqli_query($connect,$sql);
echo "<table border=1>
<tr><td>Ligand Id</td><td>Ligand Name </td><td>Formula</td>
<td>Molecular Weight </td><td>description</td><td>structure_id</td><td>2d structure</td><tr>";
while($row=mysqli_fetch_array($query))
{
	$lid=$row['ligand_id'];
	$ln=$row['ligand_name'];
	$mf=$row['formula'];
	$de=$row['description'];
	$mw=$row['molecular_weight'];
	$sid=$row['structure_id'];
	echo "<tr><td>$lid</td><td>$ln</td><td>$mf</td>
<td>$mw</td><td>$de</td><td>$sid</td><td><img src=ligandstructure.php?id=$lid width=30%></td></tr>";


}
echo "</table>";

?>
