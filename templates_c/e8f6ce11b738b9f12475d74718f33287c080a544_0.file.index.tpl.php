<?php
/* Smarty version 3.1.30, created on 2017-03-29 14:07:08
  from "C:\Program Files (x86)\EasyPHP-12.1\www\my portable files\micro_blog_Smarty\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dba36c27f1f8_84978499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8f6ce11b738b9f12475d74718f33287c080a544' => 
    array (
      0 => 'C:\\Program Files (x86)\\EasyPHP-12.1\\www\\my portable files\\micro_blog_Smarty\\templates\\index.tpl',
      1 => 1489931971,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:includes/haut.inc.tpl' => 1,
    'file:includes/bas.inc.tpl' => 1,
  ),
),false)) {
function content_58dba36c27f1f8_84978499 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:includes/haut.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



    <!-- About Section -->
    <section>
        
        <div class="container">
        <?php if ($_smarty_tpl->tpl_vars['connecter']->value) {?>      
<div class="row">              
    <form method="post" action='message.php'>
        <div class="col-sm-10">  
            <div class="form-group">
                <textarea id="message" name="message" class="form-control" placeholder="Message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</textarea>
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['getid']->value;?>
"></input>
            </div>
        </div>
        <div class="col-sm-2">
            <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
        </div>                        
    </form>
</div>
<?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'message');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
?>
 <div class="row">
          <div class='col-md-6 messages'>    
            <blockquote>
                 <?php echo $_smarty_tpl->tpl_vars['message']->value['contenu'];?>

          </blockquote>
            </div>
 </div>
 <div class="row">
<?php if ($_smarty_tpl->tpl_vars['connecter']->value) {?> 
    <div class="col-md-1">
    <span class="label label-success">
    <a href="index.php?id=<?php echo $_smarty_tpl->tpl_vars['message']->value['id'];?>
">Modifier</a></span>
    </div>
    <div class="col-md-1">
    <span class="label label-danger">
    <a href="supprimer.php?id=<?php echo $_smarty_tpl->tpl_vars['message']->value['id'];?>
">Supprimer</a>
    </span>
    </div>
    <?php }?>
    <div class='col-md-3 date col-md-offset-6'>  
    <blockquote>
    <p class="date">Par <?php echo $_smarty_tpl->tpl_vars['message']->value['pseudo'];?>
 le <?php echo $_smarty_tpl->tpl_vars['message']->value['date'];?>
</p>
    </blockquote>
    </div>

</div>  
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    <div class="col-md-8 col-md-offset-5">
    <nav aria-label="Page navigation example">
    <ul class="pagination"> 

<?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?> 
    <li class="page-item">
      <a class="page-link" href="?page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a> </li>
<?php }?>

<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nbpage']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nbpage']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
    <li class="page-item"><a class="page-link" href="?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li> 
<?php }
}
?>


<?php if ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['nbpage']->value) {?>
   <li class="page-item">
      <a class="page-link" href="?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>  
      </a>
    </li>
<?php }?>

 </ul>
</nav>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:includes/bas.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
