<?php
/* Smarty version 3.1.30, created on 2017-03-19 15:13:59
  from "C:\Program Files (x86)\EasyPHP-12.1\www\my portable files\micro_blog_Copie\includes\haut.inc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ce92273efb88_75309674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '738b27c0e83db21e0e0a20f6b1c22ed1622a7a75' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-12.1\\www\\my portable files\\micro_blog_Copie\\includes\\haut.inc.tpl',
      1 => 1489932132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ce92273efb88_75309674 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>

<html lang="fr">

<head>
    

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Micro blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <?php echo '<script'; ?>
 src='js/jquery-1.4.3.min.js'><?php echo '</script'; ?>
>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand et toggle se regroupent pour un meilleur affichage mobile -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Micro blog</a>
            </div>


            <!-- Recueillir les liens de navigation, les formulaires et tout autre contenu pour basculer-->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="page_de_connexion.php">Connexion</a></li><li>
                        <a href="inscription.php">inscription</a></li> <br/>
<form method="post" action="index.php">
                        <input name="saisie" type="text" placeholder="Mots-Clefs..." />
                        <input class="loupe" type="submit" value="rechercher" />


</form>
 
</form>
                </ul>
            </div>
            <!-- /.bar de navigation -->
        </div>
        <!-- /.Fluide conteneur -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <span class="name">Le fil</span>
                        <hr class="star-light">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section>
        <div class="container"><?php }
}
