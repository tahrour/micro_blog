<?php
include('includes/haut.inc.tpl');?>



<?php
	include('includes/connexion.inc.php');
	?>
	<?php
$db = mysql_connect('localhost', 'root'); 
mysql_select_db('micro_blog',$db); 
if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['pseudo']) ) 
{
$pseudo=$_POST['pseudo'];
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$login=$_POST['login'];
$password=md5($_POST['password']);
  // on recupére le password de la table qui correspond au login du visiteur
  $sql = "select email from utilisateur where email='".$login."'";
  $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
  $data = mysql_fetch_assoc($req);
  if($data['email'] == $login) {
    echo '<div class="alert alert-dismissable alert-danger">
  <button type="button" class="close" data-dismiss="alert">x</button>
  <strong>Oh Non !</strong> cet utilisateur existe déjà. Merci de recommencer !
</div>';
  }
  
  else { 
$query = 'INSERT INTO utilisateur (email,mdp,nom,prenom,pseudo) VALUES (:email,:mdp,:nom,:prenom,:pseudo)';
            $prep = $pdo->prepare($query);
            $prep->bindValue(':email',$login );
            $prep->bindValue(':mdp',$password);
            $prep->bindValue(':nom',$nom );
            $prep->bindValue(':pseudo',$pseudo );
            $prep->bindValue(':prenom',$prenom );
            $prep->execute(); 
	header("location:page_de_connexion.php");
  }    
}
else {
  $champs = '<p><b>(Remplissez tous les champs pour vous connectez !)</b></p>';
}


?>





<form method="post" classe="form" action="">

    
     <legend>Inscription au Blog</legend>
    <div class="form-group">
      <label class="col-lg-2 control-label">Login</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="login" id="login" placeholder="Votre Login">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label"> Mot de passe</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" name="password" id="password" placeholder="Votre mot de passe">
      </div>
          <div class="form-group">
      <label class="col-lg-2 control-label"> Nom</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="nom" id="Nom" placeholder="Nom">
      </div>    <div class="form-group">
      <label class="col-lg-2 control-label"> Prénom</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="prenom" id="Prénom" placeholder="Prénom">
      </div>    <div class="form-group">
      <label class="col-lg-2 control-label"> Pseudo</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="pseudo" id="Pseudo" placeholder="Pseudo">
      </div>
    </div>
    

<br/><br/><center><button type="submit" name="submit" class="btn btn-primary">inscription</button></center>
<div classe="nom hidden"> 
</div>
</form>

<body>

  <?php
include('includes/bas.inc.tpl');?>