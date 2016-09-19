<div class="Project index">
 <!--List  Open-->
      <article class="card shadow-1">
          <fieldset>
            <legend>Projects</legend>
            <!--Search Open-->
            <div class="margenesHorizontales">
              <div class="col-md-6">
                <div class=" margenesVerticales">
	              	<form class="right" role="search" method="get">
	                 <div class="input-group">
	                    <!-- <input type="text" class="form-control" placeholder="Buscar projects..." name="filtro">
	                    <span class="input-group-btn">
	                      <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
	                    </span> -->
	                  </div>  
									</form>            
                </div>
              </div>
              <div class="col-md-6">
                <div class=" margenesVerticales" style="text-align: right;">
                  <buttom onclick="window.location.href=WEBROOT+'projects/add';" class="btn btn-primary">Add Project</buttom>
                </div>
              </div>
              <div style="clear:both;"></div>
            </div>
            <!--Search Close-->
            <div class="margenesHorizontales">
              <table class="table table-striped">
                <tr>
                  <th>Name</th>
                  <th>Client</th>
                  <th>Type</th>
                  <th>Project leader</th>
                  <th>Status</th>
                  <th></th>
                </th>
                
                <?php foreach ($projects as $item): ?>
					<tr>
	                    <td><?php echo h($item['Project']['name']); ?>&nbsp;</td>
          						<td><?php echo h($item['Client']['company_name']); ?>&nbsp;</td>
                      <td><?php echo h($item['Project']['type']); ?>&nbsp;</td>
          						<td><?php echo h($item['Personal']['name']); ?>&nbsp;</td>
          						<td><?php echo h($item['Project']['status']); ?>&nbsp;</td>
		                <td>
		                    <div style="display: block; width: 80px; margin: 0 auto;">
	                        <?php if($this->UserAuth->getGroupId() == 1){ ?>
	  	                      <a href="<?php echo $this->webroot;?>projects/edit/<?php echo $item['Project']['id'];?>" title="Editar Item" class="menuTable">
	  	                        <span class="glyphicon glyphicon-pencil"></span>
	  	                      </a>
	  	                      <a href="<?php echo $this->webroot;?>projects/delete/<?php echo $item['Project']['id'];?>" onclick="if (confirm(&quot;¿Seguro que desea borrar el Project?&quot;)) { return true; } return false;" class="menuTable">
	  	                        <span class="glyphicon glyphicon-remove"></span></a>
                            <a href="<?php echo $this->webroot;?>projects/view/<?php echo $item['Project']['id'];?>" title="Ver Detalles" class="menuTable">
                              <span class="glyphicon glyphicon-eye-open"></span></a>
	                        <?php } ?>
		                    </div>                  
		                </td>
					</tr>
								<?php endforeach; ?>
              </table>
            </div> 
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
