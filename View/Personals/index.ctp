<div class="Personal index">
 <!--List  Open-->
      <article class="card shadow-1">
          <fieldset>
            <legend>Personal</legend>
            <!--Search Open-->
            <div class="margenesHorizontales">
              <div class="col-md-6">
                <div class=" margenesVerticales">
	              	<form class="right" role="search" method="get">
	                 <div class="input-group">
	                    <!-- <input type="text" class="form-control" placeholder="Buscar personals..." name="filtro">
	                    <span class="input-group-btn">
	                      <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
	                    </span> -->
	                  </div>  
									</form>            
                </div>
              </div>
              <div class="col-md-6">
                <div class=" margenesVerticales" style="text-align: right;">
                  <buttom onclick="window.location.href=WEBROOT+'personals/add';" class="btn btn-primary">Add personal</buttom>
                </div>
              </div>
              <div style="clear:both;"></div>
            </div>
            <!--Search Close-->
            <div class="margenesHorizontales">
              <table class="table table-striped">
                <tr>
                  <th>Nombre</th>
                  <th>CI</th>
                  <th>Cargo</th>
                  <th>Trabajo en Home 3DLink</th>
                </th>

                <?php foreach ($personals as $item): ?>
					<tr>
	           <td><?php echo h($item['Personal']['name']); ?>&nbsp;</td>
						<td><?php echo h($item['Personal']['ci']); ?>&nbsp;</td>
						<td><?php echo h($item['Cargo']['name']); ?>&nbsp;</td>
            <td><?php echo h($item['Personal']['job']); ?>&nbsp;</td>
            <td><?php echo h($item['Personal']['bio']); ?>&nbsp;</td>
		                <td>
		                    <div style="display: block; width: 80px; margin: 0 auto;">
	                        <?php if($this->UserAuth->getGroupId() == 1){ ?>
	  	                      <a href="<?php echo $this->webroot;?>personals/edit/<?php echo $item['Personal']['id'];?>" title="Editar Item" class="menuTable">
	  	                        <span class="glyphicon glyphicon-pencil"></span>
	  	                      </a>
	  	                      <a href="<?php echo $this->webroot;?>personals/delete/<?php echo $item['Personal']['id'];?>" onclick="if (confirm(&quot;¿Seguro que desea borrar el Personal?&quot;)) { return true; } return false;" class="menuTable">
	  	                        <span class="glyphicon glyphicon-remove"></span></a>
                            <a href="<?php echo $this->webroot;?>personals/view/<?php echo $item['Personal']['id'];?>" title="Ver Detalles" class="menuTable">
                              <span class="glyphicon glyphicon-eye-open"></span></a>
                              <?php if($item['Personal']['active'] == '1'){ ?>
                                <a href="<?php echo $this->webroot;?>personals/makeinactive/<?php echo $item['Personal']['id'];?>" title="Quitar de home" class="menuTable">
                                <span class="glyphicon glyphicon-thumbs-down"></span></a>
                              <?php }else{ ?>
                                <a href="<?php echo $this->webroot;?>personals/makeactive/<?php echo $item['Personal']['id'];?>" title="Agregar a home" class="menuTable">
                                <span class="glyphicon glyphicon-thumbs-up"></span></a>
                              <?php } ?>

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
<?php echo $this->Paginator->counter(array('format' => __('Página {:page} de {:pages}, mostrando {:current} Personal de {:count} en total.')));?>
</p>
<ul class="pagination">
<?php
  echo $this->Paginator->prev('&laquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&laquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
  echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentLink' => true, 'currentClass' => 'active', 'currentTag' => 'a'));
  echo $this->Paginator->next('&raquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&raquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
?>
</ul>

</div>	
