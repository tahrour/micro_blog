<?php
	include('includes/connexion.inc.php');
	
	if(isset($_POST['message']) && !empty($_POST['message']))
	if(isset($_POST['id']) && !empty($_POST['id']))
	{
		$query = 'UPDATE messages SET contenu =:contenu, date=UNIX_TIMESTAMP() where id= :id';
        $prep  = $pdo->prepare($query);
		$prep->bindValue('contenu', $_POST['message']);
		$prep->bindValue(':id', $_POST['id']);
		$prep->execute();
	}
else
{
$query = 'INSERT INTO messages (contenu,date) VALUES (:contenu,UNIX_TIMESTAMP())';
$prep = $pdo->prepare($query);
$prep->bindValue('contenu', $_POST['message']);	
$prep->execute();
}	
header("Location:index.php");

//Si le membre est connecté on affiche le menu-connection
if(isset($_SESSION['login'])){ ?>
 
<div id="co"><?php {echo htmlentities(trim($_SESSION['login']));}?>-<a href="membre.php"> Profile </a></div>
 
<?php }?>
 
<? php
//Si le membre n'est pas connecté on affiche le menu-deconnecter
php if(empty($_SESSION['login'])) { ?>
 
<div id="log"> <a href="connexion.php">Connexion</a> /<a href="inscription.php"> Inscription</a></div>
 


		
		