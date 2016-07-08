<div class="Ingreso index">
 <!--List  Open-->


 <form id="pipigrandote" class="right" role="search" method="get">
   <div class="input-group" style="float:left;">
      <select id='filtro'  name="filtro">
        <option value=''>Seleccione mes</option>
        <option value='01'>enero</option>
        <option value='02'>febrero</option>
        <option value='03'>marzo</option>
        <option value='04'>abril</option>
        <option value='05'>mayo</option>
        <option value='06'>junio</option>
        <option value='07'>julio</option>
        <option value='08'>agosto</option>
        <option value='09'>septiembre</option>
        <option value='10'>octubre</option>
        <option value='11'>noviembre</option>
        <option value='12'>diciembre</option>
      </select>
    </div>
    <div class="input-group" style="float:left;">
      <select id='year-fil'  name="year-fil">
        <option value=''>Seleccione año</option>
        <option value='2016'>2016</option>
      </select>
    </div>  
</form>

<div style="clear: both;"></div>

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
                
                <?php foreach ($search as $item): ?>
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

<script type="text/javascript">

  // $('#filtro').change(function(){
  //   $('#pipigrande').submit();
  // })

  $('#year-fil').change(function(){
    $('#pipigrandote').submit();
  })

                    

</script>