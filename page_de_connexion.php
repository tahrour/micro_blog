<?php
	include('includes/connexion.inc.php');
	?>
	<?php
// pour détruire complètement la session, on efface également
// le cookie de session.

   setcookie("sessioncookies",'', time() +500);


// on se connecte à MySQL 
$db = mysql_connect('localhost', 'root'); 
mysql_select_db('micro_blog',$db); 
if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['password'])) {
$login=$_POST['login'];
$password=md5($_POST['password']);
  // on recupére le password de la table qui correspond au login du visiteur
  $sql = "select mdp from utilisateur where email='".$login."'";
  $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
  $data = mysql_fetch_assoc($req);
  if($data['mdp'] !=$password) {
    echo '<div class="alert alert-dismissable alert-danger">
  <button type="button" class="close" data-dismiss="alert">x</button>
  <strong>Oh Non !</strong> Mauvais login / password. Merci de recommencer !
</div>';
  }
  
  else {
    session_start();
    $_SESSION['login'] = $login;
	session_destroy();  
	$query = "SELECT * FROM utilisateur where email='$login' && mdp='$password'";
$stmt = $pdo->query($query);
if($data=$stmt->fetch())
{
    $id=$data['id'];
$sid=md5($_POST['login'].$_POST['password'].time());
setcookie("sessioncookies",$sid);

$query = 'UPDATE  utilisateur SET sid=:sid where id= :id';
    $prep = $pdo->prepare($query);
    $prep->bindValue(':sid',$sid);
    $prep->bindValue(':id', $id);
    $prep->execute();
	
}
    echo" Vous êtes  déconnecté"; 
    
    echo '<div class="alert alert-dismissable alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Yes !</strong> Vous etes bien logué, Redirection dans 5 secondes ! <meta http-equiv="refresh" content="5; URL=dashboard">
</div>';
    // ici vous pouvez afficher un lien pour renvoyer
    // vers la page d'accueil de votre espace membres 
	header("location:index.php");
  }    
}
else {
  $champs = '<p><b>(Remplissez tous les champs pour vous connectez !)</b></p>';
}


?>





<form method="post" action="">

    <legend>Connexion au Panel</legend>

    <div class="form-group">
      <label class="col-lg-2 control-label">Login</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="login" placeholder="Login">
      </div>
    </div><br/><br/><br/>

    <div class="form-group">
      <label class="col-lg-2 control-label">Mot de passe</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" name="password" placeholder="Mot de passe">
      </div>
    </div>

<br/><br/><center><button type="submit" name="submit" class="btn btn-primary">Connexion</button></center>
</form>