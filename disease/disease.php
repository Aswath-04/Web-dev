<?php
$dname=$_GET['disease'];
$symp=$_GET['symptoms'];
$seve=$_GET['severity'];
$connect=mysqli_connect("localhost","root","","diseases");
//$db=mysqli_select_db("diseases");
$sql="Select * from diseases where disease_name like '%$dname%' and symptoms like '%$symp%' and severity like '%$seve%'";
$query=mysqli_query($connect,$sql);
echo "<table border=1px>
<tr>
<td>Disease Name</td>
<td>Description</td>
<td>Symptoms</td>
<td>Risk Factors</td>
<td>Tranmision Mode</td>
<td>Severity</td>
<td>Preventive Measures</td>
<td>Common Treatments</td>
<td>Affected Age group</td>
<td>Mortality Rate</td>
<td>Contagious</td>
</tr>";
while($row=mysqli_fetch_array($query))
{
	$dn=$row['disease_name'];
	$des=$row['description'];
	$sy=$row['symptoms'];
	$rf=$row['risk_factors'];
	$tm=$row['transmission_mode'];
	$se=$row['severity'];
	$pm=$row['preventive_measures'];
	$ct=$row['common_treatment'];
	$af=$row['affected_age_group'];
	$mr=$row['mortality_rate'];
	$co=$row['contagious'];
	
	echo "<tr>
	<td>$dn</td>
	<td>$des</td>
	<td>$sy</td>
	<td>$rf</td>
	<td>$tm</td>
	<td>$se</td>
	<td>$pm</td>
	<td>$ct</td>
	<td>$af</td>
	<td>$mr</td>
	<td>$co</td></tr>";
}
echo "</table>";
?>
