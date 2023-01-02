<?php
require('..\projeodevi\baglan.php');

if($_POST)
{
	
	if(isset($_POST['email']))
	{
	$name=strip_tags(trim($_POST['name']));
	$username=strip_tags(trim($_POST['username']));
	$email=strip_tags(trim($_POST['email']));	
	$password=strip_tags(trim($_POST['password']));
		
	$veriekleme=mysqli_query($baglan,"INSERT INTO musteriler(NameSurname,Username,Email,Sifre)VALUES ('".$name."','".$username."','".$email."','".$password."')");
	
	header("Location: http://localhost/projeodevi/index.html");
	}
}


?>
