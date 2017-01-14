<?php
include('includes/connexion.inc.php');
include('includes/haut.inc.php');
?>
<?php
$id=0;

if (isset($_GET['id']) && !empty($_GET['id'])) 
{
$query = 'SELECT * FROM messages where id='.$_GET['id'];
    $stmt = $pdo->query($query);
    while( $data=$stmt->fetch())
    {
        $id=$data['id'];
        $message=$data['contenu'];
        $date=$data['date'];
        
    }
}
?>

<?php
if ($connecter==true)
{
?>
<div class="row">              
    <form method="post"  action="message.php">
        <div class="col-sm-10">  
            <div class="form-group">
                <textarea id="message" name="message" class="form-control" placeholder="Message"><?php if(!empty($message)) echo $message;?></textarea>
				<input type="hidden" name ="id" value="<?php echo $id ;?>"></input>
            </div>
        </div>
        <div class="col-sm-2">
            <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
        </div> 
		</form>
		</div>
		<?php
          }
?>





<?php

$page = (!empty($_GET['page']) ? $_GET['page'] : 1);
$limite = 2;
$debut = ($page - 1) * $limite;
$query = 'SELECT count(*) as nb FROM messages ';
    $stmt = $pdo->query($query);
    while( $data=$stmt->fetch())
    {
        $count=$data['nb'];
    }
$nbpage= $count/$limite;    
$query = 'SELECT * FROM messages ORDER BY date DESC LIMIT :limite OFFSET :debut ';
$stmt = $pdo->prepare($query);
$stmt->bindValue(':limite',$limite,PDO::PARAM_INT);
$stmt->bindValue('debut', $debut, PDO::PARAM_INT);
$stmt->execute();
while ($data = $stmt->fetch()) {
	?>
	<blockquote>
		<?= $data['contenu'] ?>
	</blockquote>
			<div class="row"> 		
<?php
if ($connecter==true)
{
?>
<div class="col-sm-2">
            <a href="supprimer.php?id=<?=$data['id']?>" > Supprimer</a>
			

	
            

        </div>                
		<div class="col-sm-2">
             <a href="index.php?id=<?=$data['id']?>" > Modifier</a>

        </div>  
<?php
}
?>
		<div class="col-sm-2">
			<?= date('d/m/Y H:i:s',$data['date']) ?>
		</div>

		
    </div>
<?php
}
?>
<?php   
    if ($page > 1):
    ?> 
  
      <a class="page-link" href="?page=<?php echo $page - 1; ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
     
      </a> <?php
endif;
for ($i = 1; $i <= $nbpage+1; $i++):
    ?>
    <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
    <?php
endfor;
if ($page < $nbpage):
    ?>
  
      <a class="page-link" href="?page=<?php echo $page + 1; ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        
      </a>
 <?php
endif;
?>



<?php include('includes/bas.inc.php'); ?>