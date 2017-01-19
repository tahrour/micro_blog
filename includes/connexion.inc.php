<?php
$pdo = new PDO('mysql:host=localhost;dbname=micro_blog', 'root');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$connecter=false;
if(isset($_COOKIE['sessioncookies']))
{
	$connecter=true;
	$cookie=$_COOKIE['sessioncookies'];
	$query = 'SELECT * FROM  utilisateur where sid=:sid ';
    $prep = $pdo->prepare($query);
    $prep->bindValue(':sid',$cookie);
    $prep->execute();

	if($data=$prep->fetch())
	{
		$connecter=true;
		

	}

}
else
$connecter=false;