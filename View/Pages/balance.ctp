<div class="index">
 <!--List  Open-->
      <article class="card shadow-1">
          <fieldset>
            <legend style="float:left;width:33%;">Balance</legend>

            <legend style="float:right;width:33%;">Total: <?php echo '<a style="color:red;"> -'; echo $totale; echo'</a>'?> </legend>
            <legend style="float:right;width:33%;">Total: <?php echo '<a style="color:green;"> -'; echo $totali; echo'</a>'?> </legend>
            <!--Search Open-->
            <div class="margenesHorizontales">
              <div class="col-md-6">
                <div class=" margenesVerticales">
	              	<form class="right" role="search" method="get">
	                 <div class="input-group">
	                  </div>  
									</form>            
                </div>
              </div>
              <div style="clear:both;"></div>
            </div>
            <!--Search Close-->
           
          </fieldset>          
      </article>
<ul class="pagination">
<?php
  echo $this->Paginator->prev('&laquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&laquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
  echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentLink' => true, 'currentClass' => 'active', 'currentTag' => 'a'));
  echo $this->Paginator->next('&raquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&raquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
?>
</ul>

</div>	