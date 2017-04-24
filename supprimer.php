	<?php
	include('includes/connexion.inc.php');
    $sql ='DELETE from messages WHERE id=:id';
	$prep=$pdo->prepare($sql);
	$prep->bindValue(':id',$_GET['id']);
	$prep->execute();
	  header('location:index.php');
    