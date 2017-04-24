<?php
include('includes/connexion.inc.php');
require 'libs/Smarty.class.php';

$blogsmarty = new Smarty;
//Modification
$getid=0;
$message='';
$rechercher='';
if (isset($_GET['id']) && !empty($_GET['id'])) 
{
   
    $getid=$_GET['id'];
$query = 'SELECT * FROM messages where id='.$_GET['id'];
    $stmt = $pdo->query($blogquery);
    while( $data=$stmt->fetch())
    {
        $getid=$data['id'];
        $message=$data['contenu'];
        
    }


}

//Affichage Pagination
$page = (!empty($_GET['page']) ? $_GET['page'] : 1);
$limite = 4;
$debut = ($page - 1) * $limite;

//affichage ça depend de la zone de recherche
if(isset($_POST['rechercher']) && !empty($_POST['rechercher'])  )
        
         $rechercher =$_POST['rechercher'];


//selection de nombre de page
$query = "SELECT count(*) as nb FROM messages where contenu like '%".$rechercher."%'";
    $stmt = $pdo->query($query);
    while( $data=$stmt->fetch())
    {
        $count=$data['nb'];
    }
$nbpage= ceil($count/$limite); 
//Affichage des messages   

$query = "SELECT * FROM messages m inner join utilisateur u on m.user_id = u.id_utilis 
where m.contenu like '%".$rechercher."%' ORDER BY date DESC LIMIT :limite OFFSET :debut";
$prep = $pdo->prepare($query);
$prep->bindValue(':limite',$limite,PDO::PARAM_INT);
$prep->bindValue(':debut', $debut, PDO::PARAM_INT);
$prep->execute();
  $list =array();
    $i=0;
while ($data = $prep->fetch())
 {
        $list[$i]['id']=$data['id'];
        $list[$i]['contenu']=$data['contenu'];
        $list[$i]['date']=date("d/m/Y H:i:s",$data['date']);
        $list[$i]['pseudo']=$data['pseudo'];




        $re =array('/^[a-zA-Z0-9\s]*[\s]*([a-zA-Z0-9_-]*(\.[a-zA-Z0-9_-]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$)/','/^[a-zA-Z0-9\s]*[\s]*(http|https|ftp):\/\/([a-zA-Z0-9_]+)*\.(com|net|org|biz|info|mobi|us|cc|bz|tv|ws|name|co|me)$/','/^[a-zA-Z0-9\s]*[\s]*#([\w|.]+)/');
        $str = $list[$i]['contenu'];
        $replace = array('<a href="mailto:$0">$0</a>','<a href="$1">lien vers: $1</a>','<a href="index.php?rechercher=$1">$0</a>');
        $list[$i]['contenu'] = preg_replace($re,$replace,$str);


        $i++;
 }
$blogsmarty ->assign('connecter',$connecter);
$blogsmarty-> assign('list',$list);
$blogsmarty -> assign(array('message' => $message,'getid'=>$getid));
$blogsmarty ->assign(array('page'=>$page,'nbpage'=>$nbpage));

$blogsmarty ->display("index.tpl");


 ?>