<div class="Egreso index">
 <!--List  Open-->


<form id="pipigrande" class="right" role="search" method="get">
   <div class="input-group">
      <select id='filtro'  name="filtro">
        <option value='1'>enero</option>
        <option value='2'>febrero</option>
        <option value='3'>marzo</option>
        <option value='4'>abril</option>
        <option value='5'>mayo</option>
        <option value='6'>junio</option>
        <option value='7'>julio</option>
        <option value='8'>agosto</option>
        <option value='9'>septiembre</option>
        <option value='10'>octubre</option>
        <option value='11'>noviembre</option>
        <option value='12'>diciembre</option>
      </select>
    </div>  
</form>

      <article class="card shadow-1">
          <fieldset>
            <legend style="float:left;width:50%;">Egresos</legend>

            <legend style="float:right;width:50%;">Total: <?php echo '<span style="color:red;"> -'; echo $total; echo'</span>'?> </legend>
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
                  <buttom onclick="window.location.href=WEBROOT+'egresos/add';" class="btn btn-primary">Add Egreso</buttom>
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
                
                <?php foreach ($egresos as $item): ?>
					<tr>
	                    <td><?php echo h($item['Egreso']['egr_date']); ?>&nbsp;</td>
          						<td><?php echo h($item['Egreso']['concepto']); ?>&nbsp;</td>
          						<td><?php echo h($item['Egreso']['monto']); ?>&nbsp;</td>
		                <td>
		                    <div style="display: block; width: 80px; margin: 0 auto;">
	                        <?php if($this->UserAuth->getGroupId() == 1){ ?>
	  	                      <a href="<?php echo $this->webroot;?>egresos/edit/<?php echo $item['Egreso']['id'];?>" title="Editar Item" class="menuTable">
	  	                        <span class="glyphicon glyphicon-pencil"></span>
	  	                      </a>
	  	                      <a href="<?php echo $this->webroot;?>egresos/delete/<?php echo $item['Egreso']['id'];?>" onclick="if (confirm(&quot;¿Seguro que desea borrar el registro del egreso?&quot;)) { return true; } return false;" class="menuTable">
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
<!-- <ul class="pagination">
<?php
  echo $this->Paginator->prev('&laquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&laquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
  echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentLink' => true, 'currentClass' => 'active', 'currentTag' => 'a'));
  echo $this->Paginator->next('&raquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&raquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
?> </ul>
-->

</div>	

<script type="text/javascript">

  $('#filtro').change(function(){
    $('#pipigrande').submit();
  })

                    

</script>