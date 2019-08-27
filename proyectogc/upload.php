<?php
$con= mysqli_connect ("localhost","root","","dbempleo") or die("Base de datos sin conectar");
if(isset($_POST['submit']))
{

$image=addslashes($_FILES['image']['tmp_name']);
$imagename=addslashes($_FILES['image']['name']);
$image=file_get_contents($image);
$image=base64_encode($image);
$query = mysqli_query($con,"insert into uploadfile (image,imagename)values('$image','$imagename') ")
or die("Querry Error ");
    }    
?>