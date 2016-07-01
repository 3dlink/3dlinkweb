<div class="Ingreso index">
 <!--List  Open-->
      <article class="card shadow-1">
          <fieldset>
            <legend style="float:left;width:50%;">Ingresos</legend>

            <legend style="float:right;width:50%;">Total: <?php echo '<span style="color:green;">'; echo $total; echo'</span>'?> </legend>
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
              <div class="col-md-6">
                <div class=" margenesVerticales" style="text-align: right;">
                  <buttom onclick="window.location.href=WEBROOT+'ingresos/add';" class="btn btn-primary">Add Ingreso</buttom>
                </div>
              </div>
              <div style="clear:both;"></div>
            </div>
            <!--Search Close-->
            <div class="margenesHorizontales">
              <table class="table table-striped">
                <tr>
                  <th>Fecha</th>
                  <th>Concepto</th>
                  <th>Monto</th>
                  <th></th>
                </th>
                
                <?php foreach ($ingresos as $item): ?>
					<tr>
	                    <td><?php echo h($item['Ingreso']['ing_date']); ?>&nbsp;</td>
          						<td><?php echo h($item['Ingreso']['concepto']); ?>&nbsp;</td>
          						<td><?php echo h($item['Ingreso']['monto']); ?>&nbsp;</td>
		                <td>
		                    <div style="display: block; width: 80px; margin: 0 auto;">
	                        <?php if($this->UserAuth->getGroupId() == 1){ ?>
	  	                      <a href="<?php echo $this->webroot;?>ingresos/edit/<?php echo $item['Ingreso']['id'];?>" title="Editar Item" class="menuTable">
	  	                        <span class="glyphicon glyphicon-pencil"></span>
	  	                      </a>
	  	                      <a href="<?php echo $this->webroot;?>ingresos/delete/<?php echo $item['Ingreso']['id'];?>" onclick="if (confirm(&quot;¿Seguro que desea borrar el registro del egreso?&quot;)) { return true; } return false;" class="menuTable">
	  	                        <span class="glyphicon glyphicon-remove"></span></a>
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