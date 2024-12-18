<html>
<h2><b>CARDIOVASCULAR RISK CALCULATOR</b></h2>
<body>
<pre>
Age(in years): <input type=number placeholder="eg:45" id=age><br>
Total cholestrol(mg/dL):<input type=number placeholder="eg:200" id=tc><br>
Systolic Blood Pressure(mmHg):<input type=number placeholder="eg:120" id=bp><br>
Smoker:<input type=checkbox id=smoke><br>
Diabetes:<input type=checkbox id=dia><br>
<input type=button value="Calculate risk" onclick=calrisk()><br>
<p id=result></p>
</pre>
</body>
</html>
<script>
function calrisk()
{
ageFactor=2.32888
cholesterolFactor=1.20904
systolicBPFactor=2.76157
smokingFactor=0.52873
diabetesFactor=0.69154
smoke=0
dia=0
age=document.getElementById("age").value
tc=document.getElementById("tc").value
bp=document.getElementById("bp").value
age1=Math.log(age)
tc1=Math.log(tc)
bp1=Math.log(bp)
if(document.getElementById("smoke").checked)
{
	smoke=1
}
if(document.getElementById("dia").checked)
{
	dia=1
}
RS=(ageFactor*age1)+(cholesterolFactor*tc1) + (systolicBPFactor*bp1)+(smokingFactor*smoke)+(diabetesFactor*dia)
Riskper=Math.min(100,Math.max(0,(RS-10)*5))

document.getElementById("result").innerHTML="Risk percentage="+Riskper
}


</script>
