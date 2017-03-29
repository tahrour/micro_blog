{* Smarty *}
{include file='includes/haut.inc.tpl'}


    <!-- About Section -->
    <section>
        
        <div class="container">
        {if $connecter}      
<div class="row">              
    <form method="post" action='message.php'>
        <div class="col-sm-10">  
            <div class="form-group">
                <textarea id="message" name="message" class="form-control" placeholder="Message">{$message}</textarea>
                <input type="hidden" name="id" value="{$getid}"></input>
            </div>
        </div>
        <div class="col-sm-2">
            <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
        </div>                        
    </form>
</div>
{/if}
{foreach from=$list item=message}
 <div class="row">
          <div class='col-md-6 messages'>    
            <blockquote>
                 {$message.contenu}
          </blockquote>
            </div>
 </div>
 <div class="row">
{if $connecter} 
    <div class="col-md-1">
    <span class="label label-success">
    <a href="index.php?id={$message.id}">Modifier</a></span>
    </div>
    <div class="col-md-1">
    <span class="label label-danger">
    <a href="supprimer.php?id={$message.id}">Supprimer</a>
    </span>
    </div>
    {/if}
    <div class='col-md-3 date col-md-offset-6'>  
    <blockquote>
    <p class="date">Par {$message.pseudo} le {$message.date}</p>
    </blockquote>
    </div>

</div>  
    {/foreach}

    <div class="col-md-8 col-md-offset-5">
    <nav aria-label="Page navigation example">
    <ul class="pagination"> 

{if $page >1} 
    <li class="page-item">
      <a class="page-link" href="?page={$page -1}" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a> </li>
{/if}

{for $i=1 to $nbpage}
    <li class="page-item"><a class="page-link" href="?page={$i}">{$i}</a></li> 
{/for}

{if $page < $nbpage}
   <li class="page-item">
      <a class="page-link" href="?page={$page +1}" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>  
      </a>
    </li>
{/if}

 </ul>
</nav>
</div>


{include file='includes/bas.inc.tpl'}