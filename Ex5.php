<!doctype html>
<html lang="en">
  <head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title></title>
    <div class="p-3 mb-2 bg-success text-white">
<html>
<head>
    <title>โปรแกรมสูตรคูณด้วยคำสั่ง while</title>
</head>
<body>
<form method= "post">
<div class="text-center">
<p><h2>กรุณากรอกแม่สูตรคูณที่ต้องการ :
<input name= "multi">
<input name= "submit" type= "submit" value= "เลือก">
</h2>
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
