<div class="Client index">
 <!--List  Open-->
      <article class="card shadow-1">
          <fieldset>
            <legend>Client</legend>
            <!--Search Open-->
            <div class="margenesHorizontales">
              <div class="col-md-6">
                <div class=" margenesVerticales">
	              	<form class="right" role="search" method="get">
	                 <div class="input-group">
	                    <!-- <input type="text" class="form-control" placeholder="Buscar Clients..." name="filtro">
	                    <span class="input-group-btn">
	                      <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
	                    </span> -->
	                  </div>  
									</form>            
                </div>
              </div>
              <div class="col-md-6">
                <div class=" margenesVerticales" style="text-align: right;">
                  <buttom onclick="window.location.href=WEBROOT+'clients/add';" class="btn btn-primary">Add Client</buttom>
                </div>
              </div>
              <div style="clear:both;"></div>
            </div>
            <!--Search Close-->
            <div class="margenesHorizontales">
              <table class="table table-striped">
                <tr>
                  <th>Name</th>
                  <th>Country</th>
                  <th>Type</th>
                  <th>Email</th>
                  <th></th>
                </th>

                <?php foreach ($clients as $item): ?>
					<tr>
	                    <td><?php echo h($item['Client']['company_name']); ?>&nbsp;</td>
						<td><?php echo h($item['Client']['country']); ?>&nbsp;</td>
						<td><?php echo h($item['Client']['type']); ?>&nbsp;</td>
						<td><?php echo h($item['Client']['email']); ?>&nbsp;</td>
		                <td>
		                    <div style="display: block; width: 80px; margin: 0 auto;">
	                        <?php if($this->UserAuth->getGroupId() == 1){ ?>
	  	                      <a href="<?php echo $this->webroot;?>clients/edit/<?php echo $item['Client']['id'];?>" title="Editar Item" class="menuTable">
	  	                        <span class="glyphicon glyphicon-pencil"></span>
	  	                      </a>
	  	                      <a href="<?php echo $this->webroot;?>clients/delete/<?php echo $item['Client']['id'];?>" onclick="if (confirm(&quot;¿Seguro que desea borrar el Client?&quot;)) { return true; } return false;" class="menuTable">
	  	                        <span class="glyphicon glyphicon-remove"></span></a>
                            <a href="<?php echo $this->webroot;?>clients/view/<?php echo $item['Client']['id'];?>" title="Ver Detalles" class="menuTable">
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
<p>
<?php echo $this->Paginator->counter(array('format' => __('Page {:page} from {:pages}, showing {:current} Client from {:count}.')));?>
</p>
<ul class="pagination">
<?php
  echo $this->Paginator->prev('&laquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&laquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
  echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentLink' => true, 'currentClass' => 'active', 'currentTag' => 'a'));
  echo $this->Paginator->next('&raquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&raquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
?>
</ul>

</div>	