<div class="Egreso index">
 <!--List  Open-->
<?php
$mes_hoy = date("m");
$year_hoy = date("y");
?>

<form id="pipigrande" class="right" role="search" method="get">
   <div class="input-group" style="float:left;">
      <select id='filtro'  name="filtro">
        <option value=''>Select month</option>
        <option value='01'>January</option>
        <option value='02'>February</option>
        <option value='03'>March</option>
        <option value='04'>April</option>
        <option value='05'>May</option>
        <option value='06'>June</option>
        <option value='07'>July</option>
        <option value='08'>August</option>
        <option value='09'>September</option>
        <option value='10'>October</option>
        <option value='11'>November</option>
        <option value='12'>December</option>
      </select>
    </div>
    <div class="input-group" style="float:left;">
      <select id='year-fil'  name="year-fil">
        <option value=''>Select year</option>
        <option value='2016'>2016</option>
      </select>
    </div>  
</form>

<div style="clear: both;"></div>

      <article class="card shadow-1">
          <fieldset>
            <legend style="float:left;width:50%;">
              <?php if($mes_hoy=='01'){ echo 'January';}
                    if($mes_hoy=='02'){ echo 'February';}
                    if($mes_hoy=='03'){ echo 'March';}
                    if($mes_hoy=='04'){ echo 'April';}
                    if($mes_hoy=='05'){ echo 'May';}
                    if($mes_hoy=='06'){ echo 'June';}
                    if($mes_hoy=='07'){ echo 'July';}
                    if($mes_hoy=='08'){ echo 'August';}
                    if($mes_hoy=='09'){ echo 'September';}
                    if($mes_hoy=='10'){ echo 'October';}
                    if($mes_hoy=='11'){ echo 'November';}
                    if($mes_hoy=='12'){ echo 'December';}
              ?> expenses</legend>

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
                  <buttom onclick="window.location.href=WEBROOT+'egresos/add';" class="btn btn-primary">Add Expense</buttom>
                </div>
              </div>
              <div style="clear:both;"></div>
            </div>
            <!--Search Close-->
            <div class="margenesHorizontales">
              <table class="table table-striped">
                <tr>
                  <th>Date</th>
                  <th>Concept</th>
                  <th>Amount</th>
                  <th></th>
                </th>
                
                <?php foreach ($search as $item): ?>
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
<ul class="pagination">
<?php
  echo $this->Paginator->prev('&laquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&laquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
  echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentLink' => true, 'currentClass' => 'active', 'currentTag' => 'a'));
  echo $this->Paginator->next('&raquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&raquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
?> </ul>


</div>	

<script type="text/javascript">

  // $('#filtro').change(function(){
  //   $('#pipigrande').submit();
  // })

  $('#year-fil').change(function(){
    $('#pipigrande').submit();
  })

                    

</script>