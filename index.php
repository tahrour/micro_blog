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
$query = 'SELECT * FROM messages';
$stmt = $pdo->query($query);

while ($data = $stmt->fetch()) {
	?>
	<blockquote>
		<?= $data['contenu'] ?>
	</blockquote>
			<div class="row"> 		

<div class="col-sm-2">
            <a href="supprimer.php?id=<?=$data['id']?>" > Supprimer</a>
			

	
            

        </div>                
		<div class="col-sm-2">
             <a href="index.php?id=<?=$data['id']?>" > Modifier</a>

        </div>  

		<div class="col-sm-2">
			<?= date('d/m/Y H:i:s',$data['date']) ?>
		</div>

		
    </div>
<?php
}
?>

<?php include('includes/bas.inc.php'); ?>