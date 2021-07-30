<html>
<head>
<title>โปรแกรมสูตรคูณด้วยคำสั่ง while</title>
</head>
<body>
<form method= "post">
<p>กรุณากรอกแม่สูตรคูณที่ต้องการ :
<input name= "multi">
<input name= "submit" type= "submit" value= "เลือก">
</p>
</form>
<?php
$multi = @$_POST['multi'] ;
$i=1;
echo "<center>สูตรคูณแม่ $multi <br>";
while ($i<=12)
{
echo "$i x $multi = ".$i*$multi."<br>";
$i++;
} ?>
</body>
</html>
